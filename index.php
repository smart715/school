<?php


// Define minimum supported PHP version
define('APPSVAN_PHP', '7.3.0');
define('LARAVEL_START', microtime(true));

// Check PHP version
if (version_compare(PHP_VERSION, APPSVAN_PHP, '<')) {
    die('Your host needs to use PHP ' . APPSVAN_PHP . ' or higher to run Akaunting.<br> PHP VERSION : '.PHP_VERSION);
}

// Register the auto-loader
require __DIR__.'/vendor/autoload.php';

// Load the app
$app = require_once(__DIR__.'/bootstrap/app.php');

// Run the app
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
