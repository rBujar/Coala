import { exec } from 'child_process';
import { writeFileSync, mkdirSync, existsSync } from 'fs';
import { dirname, join } from 'path';
import { glob } from 'glob';
import { promisify } from 'util';

const execAsync = promisify(exec);
const PHP_PORT = 9999;
const OUTPUT_DIR = 'dist';

// Check if PHP is available
async function checkPHP() {
  try {
    await execAsync('php --version');
    return true;
  } catch (error) {
    console.error('❌ PHP is not installed or not in PATH');
    console.error('   Install PHP to build HTML files from PHP sources');
    return false;
  }
}

// Start PHP server
function startPHPServer() {
  console.log('🚀 Starting PHP server...\n');
  const server = exec(`php -S localhost:${PHP_PORT} 2>&1`);
  
  // Log PHP server errors
  server.stderr?.on('data', (data) => {
    if (!data.includes('Development Server')) {
      console.error('PHP Error:', data.toString());
    }
  });
  
  // Force kill after 5 minutes (safety timeout)
  setTimeout(() => {
    if (server && !server.killed) {
      console.log('⚠️  Force killing PHP server (timeout)');
      server.kill('SIGKILL');
    }
  }, 300000);
  
  return new Promise(resolve => setTimeout(() => resolve(server), 2000));
}

// Fetch PHP page as HTML
async function fetchPage(path) {
  console.log(`📄 ${path} → ${path.replace('.php', '.html')}`);
  try {
    const response = await fetch(`http://localhost:${PHP_PORT}${path}`);
    if (!response.ok) {
      console.error(`   ⚠️  HTTP ${response.status}: ${response.statusText}`);
      return null;
    }
    return await response.text();
  } catch (error) {
    console.error(`   ❌ Failed: ${error.message}`);
    return null;
  }
}

// Fix asset paths in HTML for production
function fixAssetPaths(html) {
  return html
    // Remove Vite client (dev only)
    .replace(/<script[^>]*@vite\/client[^>]*><\/script>\s*/g, '')
    // Fix localhost URLs
    .replace(/http:\/\/localhost:\d+\//g, '/')
    // Fix relative paths
    .replace(/\.\.\/src\/assets\//g, '/assets/')
    .replace(/\/src\/assets\//g, '/assets/')
    // Fix dist paths (already in dist, so remove /dist prefix)
    .replace(/href="\/dist\//g, 'href="/')
    .replace(/src="\/dist\//g, 'src="/');
}

// Main build function
async function build() {
  console.log('🏗️  Building HTML from PHP...\n');

  // Check if PHP is available
  const hasPHP = await checkPHP();
  if (!hasPHP) {
    console.log('\n⚠️  Skipping HTML generation (PHP not available)');
    console.log('   Assets have been built to dist/assets/');
    console.log('   You can manually copy .php files or install PHP to generate HTML\n');
    process.exit(0);
  }

  let phpServer;
  
  try {
    phpServer = await startPHPServer();

    // Find all PHP files (except components and helpers)
    const phpFiles = await glob('**/*.php', {
      ignore: ['node_modules/**', 'components/**', 'vite-helper.php', 'dist/**']
    });

    console.log(`Found ${phpFiles.length} pages\n`);

    // Convert each PHP file to HTML
    for (const phpFile of phpFiles) {
      const html = await fetchPage('/' + phpFile);
      
      if (html) {
        const outputPath = join(OUTPUT_DIR, phpFile.replace('.php', '.html'));
        mkdirSync(dirname(outputPath), { recursive: true });
        writeFileSync(outputPath, fixAssetPaths(html), 'utf-8');
      }
    }

    console.log('\n✨ Build complete!\n');

  } catch (error) {
    console.error('\n❌ Build failed:', error.message);
    if (phpServer) {
      phpServer.kill('SIGTERM');
    }
    process.exit(1);
  } finally {
    if (phpServer) {
      phpServer.kill('SIGTERM');
      // Give it a moment to clean up
      await new Promise(resolve => setTimeout(resolve, 500));
      console.log('🛑 PHP server stopped\n');
    }
  }
  
  // Ensure process exits
  process.exit(0);
}

build().catch((error) => {
  console.error('Fatal error:', error);
  process.exit(1);
});
