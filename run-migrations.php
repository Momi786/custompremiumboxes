<?php
/**
 * Simple migration runner for shared hosting
 * 
 * Place this file in your project root and access it via browser:
 * https://yourdomain.com/run-migrations.php
 * 
 * SECURITY WARNING: Delete this file after running migrations!
 */

// Simple security check - uncomment and set a password
// $password = 'YOUR_SECURE_PASSWORD_HERE';
// if (!isset($_GET['key']) || $_GET['key'] !== $password) {
//     die('Unauthorized');
// }

// Prevent direct execution without key in production
if (php_sapi_name() !== 'cli' && (!isset($_GET['key']) || $_GET['key'] !== 'CHANGE_THIS_PASSWORD')) {
    die('Unauthorized. Please set a secure password in this file.');
}

// Bootstrap Laravel
require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Run migrations
try {
    $output = [];
    $exitCode = 0;
    
    Artisan::call('migrate', ['--force' => true]);
    $output[] = Artisan::output();
    
    echo '<h2>Migration Results</h2>';
    echo '<pre>';
    echo implode("\n", $output);
    echo '</pre>';
    echo '<h3 style="color: green;">✓ Migrations completed successfully!</h3>';
    echo '<p><strong>IMPORTANT:</strong> Delete this file (run-migrations.php) for security reasons.</p>';
    
} catch (\Exception $e) {
    echo '<h2 style="color: red;">Migration Error</h2>';
    echo '<pre>';
    echo $e->getMessage();
    echo "\n\n";
    echo $e->getTraceAsString();
    echo '</pre>';
}

