<?php
$id = $_REQUEST['id'];
$product = $_REQUEST['product'];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Hai mandato una richiesta POST!!";
    echo $id.$product;
    exit;
}

else if ($_SERVER["REQUEST_METHOD"] == "GET"){
    echo "Hai mandato una richiesta GET!!";
    echo $id.$product;
    exit;
}

else if ($_SERVER["REQUEST_METHOD"=="PUT"]){
    echo "Hai mandato una richiesta PUT!!";
    echo $id.$product;
    exit;
}

else if ($_SERVER["REQUEST_METHOD"=="DELETE"]){
    echo "Hai mandato una richiesta DELETE";
    echo $id.$product;
    exit;
}
?>

