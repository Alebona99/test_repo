<?php
require_once(__DIR__.'/vendor/autoload.php');
use Monolog\Logger;

$logger = new Logger ('db');
$logger->info('Log Info');

$link = mysqli_connect('db', 'root', 'password');

if (!$link){
    $logger->warning('This is a log error');
    echo "Error: impossibile connettersi al db".PHP_EOL;
    echo "Debugging errno".mysqli_connect_errno().PHP_EOL;
    echo "Debugging error".mysqli_connect_error().PHP_EOL;
    exit;
}
echo "Connessione al databse riuscita".PHP_EOL;
echo "Informazioni Host: ".mysqli_get_host_info($link).PHP_EOL;

mysqli_close($link);
?>

