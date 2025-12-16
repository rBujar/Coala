import { exec } from 'child_process';
import { writeFileSync, mkdirSync, existsSync, readFileSync } from 'fs';
import { dirname, join } from 'path';
import { glob } from 'glob';

const PHP_PORT = 9999;
const OUTPUT_DIR = 'dist';

// Start PHP server
function startPHPServer() {
  console.log('🚀 Starting PHP server...\n');
  const server = exec(`php -S localhost:${PHP_PORT}`);
  return new Promise(resolve => setTimeout(() => resolve(server), 2000));
}

// Fetch PHP page as HTML
async function fetchPage(path) {
  console.log(`📄 ${path} → ${path.replace('.php', '.html')}`);
  try {
    const response = await fetch(`http://localhost:${PHP_PORT}${path}`);
    return response.ok ? await response.text() : null;
  } catch (error) {
    console.error(`❌ Failed: ${path}`);
    return null;
  }
}

// Fix asset paths in HTML for production
function fixAssetPaths(html) {
  return html
    // Remove Vite client (dev only)
    .replace(/<script[^>]*@vite\/client[^>]*><\/script>\s*/g, '')
    // Fix localhost URLs
    .replace(/http:\/\/localhost:5173\//g, '/')
    // Fix relative paths
    .replace(/\.\.\/src\/assets\//g, '/assets/')
    .replace(/\/src\/assets\//g, '/assets/');
}

// Main build function
async function build() {
  console.log('🏗️  Building HTML from PHP...\n');

  const phpServer = await startPHPServer();

  try {
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

  } finally {
    phpServer.kill();
    console.log('🛑 PHP server stopped\n');
  }
}

build().catch(console.error);
