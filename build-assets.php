<?php
/**
 * Build Vite assets for production
 *
 * Usage: https://yourdomain.com/build-assets.php?key=YOUR_PASSWORD
 *
 * IMPORTANT:
 * 1. Change the password below before uploading
 * 2. Delete this file immediately after building assets
 * 3. This requires Node.js and npm to be installed on your server
 */

// Set your secure password here
$SECRET_KEY = 'CHANGE_THIS_TO_A_SECURE_PASSWORD_12345';

// Check for password
if (!isset($_GET['key']) || $_GET['key'] !== $SECRET_KEY) {
    http_response_code(403);
    die('Unauthorized. Access denied.');
}

echo '<html><head><title>Building Assets</title><style>body{font-family:Arial;padding:20px;background:#f5f5f5;}pre{background:#fff;padding:15px;border-radius:5px;border:1px solid #ddd;white-space:pre-wrap;word-wrap:break-word;}</style></head><body>';
echo '<h2>Building Vite Assets...</h2>';
echo '<pre>';

$output = [];
$returnVar = 0;

// Check if npm is available
exec('which npm', $npmPath, $npmCheck);
if ($npmCheck !== 0) {
    echo "❌ ERROR: npm is not installed or not in PATH\n";
    echo "Please install Node.js and npm on your server.\n";
    echo "\nAlternatively, build assets locally and upload the 'public/build' folder.\n";
    echo '</pre></body></html>';
    exit;
}

echo "✓ npm found at: " . implode('', $npmPath) . "\n\n";

// Install dependencies if node_modules doesn't exist
if (!is_dir(__DIR__ . '/node_modules')) {
    echo "Installing npm dependencies...\n";
    exec('cd ' . escapeshellarg(__DIR__) . ' && npm install 2>&1', $output, $returnVar);
    echo implode("\n", $output) . "\n\n";
    if ($returnVar !== 0) {
        echo "❌ ERROR: npm install failed\n";
        echo '</pre></body></html>';
        exit;
    }
    $output = [];
}

// Build assets
echo "Building production assets...\n";
exec('cd ' . escapeshellarg(__DIR__) . ' && npm run build 2>&1', $output, $returnVar);

echo implode("\n", $output) . "\n\n";

if ($returnVar === 0) {
    // Check if manifest.json was created
    $manifestPath = __DIR__ . '/public/build/manifest.json';
    if (file_exists($manifestPath)) {
        echo str_repeat('=', 60) . "\n";
        echo "✓ ASSETS BUILT SUCCESSFULLY!\n";
        echo "✓ manifest.json created at: " . $manifestPath . "\n";
        echo str_repeat('=', 60) . "\n";
        echo "\n⚠️  SECURITY WARNING: Delete this file immediately!\n";
    } else {
        echo "⚠️  WARNING: Build completed but manifest.json not found.\n";
        echo "Expected location: " . $manifestPath . "\n";
    }
} else {
    echo "\n❌ Build failed with exit code: $returnVar\n";
    echo "\nCommon issues:\n";
    echo "1. Node.js/npm not installed\n";
    echo "2. Missing dependencies - try running: npm install\n";
    echo "3. Insufficient permissions\n";
}

echo '</pre>';
echo '</body></html>';

