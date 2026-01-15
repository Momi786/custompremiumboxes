<?php
/**
 * Secure migration runner - requires password via URL
 * 
 * Usage: https://yourdomain.com/run-migrations-secure.php?key=YOUR_PASSWORD
 * 
 * IMPORTANT: 
 * 1. Change the password below before uploading
 * 2. Delete this file immediately after running migrations
 */

// Set your secure password here
$SECRET_KEY = 'CHANGE_THIS_TO_A_SECURE_PASSWORD_12345';

// Check for password
if (!isset($_GET['key']) || $_GET['key'] !== $SECRET_KEY) {
    http_response_code(403);
    die('Unauthorized. Access denied.');
}

// Bootstrap Laravel
require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo '<html><head><title>Running Migrations</title><style>body{font-family:Arial;padding:20px;background:#f5f5f5;}pre{background:#fff;padding:15px;border-radius:5px;border:1px solid #ddd;}</style></head><body>';
echo '<h2>Running Database Migrations...</h2>';
echo '<pre>';

try {
    $exitCode = Artisan::call('migrate', ['--force' => true]);
    $output = Artisan::output();
    
    echo htmlspecialchars($output);
    
    if ($exitCode === 0) {
        echo "\n\n" . str_repeat('=', 60) . "\n";
        echo "✓ MIGRATIONS COMPLETED SUCCESSFULLY!\n";
        echo str_repeat('=', 60) . "\n";
        echo "\n⚠️  SECURITY WARNING: Delete this file immediately!\n";
    } else {
        echo "\n\n❌ Migration exited with code: $exitCode\n";
    }
    
} catch (\Exception $e) {
    echo "ERROR: " . htmlspecialchars($e->getMessage()) . "\n\n";
    echo "Stack Trace:\n";
    echo htmlspecialchars($e->getTraceAsString());
}

echo '</pre>';
echo '</body></html>';

