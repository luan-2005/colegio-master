<?php

include "../model/aluno.php";

$email = $_POST["email"];
$cidade = $_POST["cpf"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobreNome"];
$whatsapp = $_POST["whatsapp"];

$aluno = new Aluno();

$aluno->setNome($nome);
$aluno->setSobrenome($sobrenome);  
$aluno->setEmail($email); 
$aluno->setCidade($cpf);
$aluno->setWhatsapp($whatsapp);

var_dump($aluno);

?>