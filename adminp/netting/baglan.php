<?php 

try {

    $db= new PDO("mysql:host=localhost; dbname=market", 'root', '');
    $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");


//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {


    echo $e->getMessage();
}

?>