<?php
$link = mysqli_connect('db', 'root', 'password');

if (!$link){
    echo "Error: impossibile connettersi al db".PHP_EOL;
    echo "Debugging errno".mysqli_connect_errno().PHP_EOL;
    echo "Debugging error".mysqli_connect_error().PHP_EOL;
    exit;
}
echo "Connessione al databse riuscita".PHP_EOL;
echo "Informazioni Host: ".mysqli_get_host_info($link).PHP_EOL;

mysqli_close($link);

?>

