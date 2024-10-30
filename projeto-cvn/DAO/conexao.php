<?php

function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "turma-m-j";
    $db = "mysql";
    try {

        $PDO = new PDO($db.':host='.$host.';dbname=' . $dbname, $user, $pass);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $PDO;

    } catch (PDOException $e) {
            echo "Erro ao conectar MySQL: ".$e->getMessage();
    }

}







?>