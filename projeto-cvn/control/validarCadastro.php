<?php
include "../model/aluno.php";
include "../DAO/conexao.php";
include "../DAO/cad.php";

$al = new Aluno();
$al->setNome($_POST['nome']);
$al->setCpf($_POST['cpf']);
$al->setEmail($_POST['email']);
$al->setsenha($_POST['senha']);

if(cadastrar($al)){
    
    $mensagem = "cadastro realizado com suscesso";

            echo "<script language='javascript'>window.location.replace('../view/matricula.php?mensagem=$mensagem');</script>";




}else{
    echo "falha ao cadastrar!";
}



?>