<?php
/**
 * Vite Helper - Auto-switches between dev and production
 */

// Check if Vite dev server is running and find the port
function getViteUrl() {
    static $viteUrl = null;
    
    if ($viteUrl === null) {
        $ports = [5173, 5174, 5175, 5176, 5177];
        
        foreach ($ports as $port) {
            $url = "http://localhost:$port";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_NOBODY, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1);
            curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            
            // Vite responds with any code (200, 404, etc), just needs to be running
            if ($httpCode > 0) {
                $viteUrl = $url;
                break;
            }
        }
        
        $viteUrl = $viteUrl ?: false;
    }
    
    return $viteUrl;
}

// Check if in development mode
function isViteDev() {
    return getViteUrl() !== false;
}

// Get asset URL (dev or production)
function viteAsset($path) {
    $viteUrl = getViteUrl();
    if ($viteUrl) {
        return $viteUrl . '/' . ltrim($path, '/');
    }
    
    // Production - read manifest
    static $manifest = null;
    if ($manifest === null) {
        $manifestFile = __DIR__ . '/dist/.vite/manifest.json';
        $manifest = file_exists($manifestFile) 
            ? json_decode(file_get_contents($manifestFile), true) 
            : [];
    }
    
    $cleanPath = preg_replace('/^src\//', '', ltrim($path, '/'));
    
    if (isset($manifest[$cleanPath]['file'])) {
        return '/dist/' . $manifest[$cleanPath]['file'];
    }
    
    return '/dist/' . $cleanPath;
}

// Include Vite client for HMR (dev only)
function viteClient() {
    $viteUrl = getViteUrl();
    if ($viteUrl) {
        echo '<script type="module" src="' . $viteUrl . '/@vite/client"></script>' . "\n";
    }
}

// Load CSS or JS entry point
function viteEntry($entry) {
    if (isViteDev()) {
        // Development mode
        $url = viteAsset($entry);
        if (preg_match('/\.(scss|css)$/', $entry)) {
            echo '<link rel="stylesheet" href="' . $url . '" />' . "\n";
        } else {
            echo '<script type="module" src="' . $url . '"></script>' . "\n";
        }
        return;
    }
    
    // Production mode
    static $manifest = null;
    if ($manifest === null) {
        $manifestFile = __DIR__ . '/dist/.vite/manifest.json';
        $manifest = file_exists($manifestFile) 
            ? json_decode(file_get_contents($manifestFile), true) 
            : [];
    }
    
    $cleanPath = ltrim($entry, '/');
    
    if (isset($manifest[$cleanPath])) {
        $entry = $manifest[$cleanPath];
        
        // Check if this is a CSS file (by extension or file property)
        if (preg_match('/\.(scss|css)$/', $cleanPath) && isset($entry['file'])) {
            // Direct CSS entry
            echo '<link rel="stylesheet" href="/dist/' . $entry['file'] . '" />' . "\n";
        }
        // Load CSS imports (for JS files that import CSS)
        elseif (isset($entry['css'])) {
            foreach ($entry['css'] as $cssFile) {
                echo '<link rel="stylesheet" href="/dist/' . $cssFile . '" />' . "\n";
            }
        }
        
        // Load JS
        if (isset($entry['file']) && !preg_match('/\.(scss|css)$/', $cleanPath)) {
            echo '<script type="module" src="/dist/' . $entry['file'] . '"></script>' . "\n";
        }
    }
}
?>
