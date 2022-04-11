<?php

// We always work with UTF8 encoding
mb_internal_encoding('UTF-8');

// Make sure we have a timezone set
date_default_timezone_set('America/Los_Angeles');

require __DIR__ . '/../../vendor/autoload.php';

// Load the .env file to get local vs CI CONTEXT environment value
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->safeLoad();

// Launch PHP dev server in the background
chdir(realpath(__DIR__ . '/../../'));
echo getcwd();
exec('php -S localhost:8083 -t public/ > /dev/null 2>&1 & echo $!', $output);

// We will need the pid to kill it, beware, this is the pid of the bash process started with start.sh
$processID = $output[0];

// Pause to let time for the dev server to launch in the background in CI, locally it's almost instant
usleep(isset($_ENV['CONTEXT']) && $_ENV['CONTEXT'] == 'local' ? 20_000 : 3_000_000);

// This is the function to call to stop the test server in sub-scripts
function killTestServer(string $processID): void {
    exec('kill -9 ' . $processID);
}
