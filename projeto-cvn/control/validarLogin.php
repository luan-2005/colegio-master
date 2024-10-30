 <?php

include "../Model/aluno.php";
include "../DAO/conexao.php";
include "../DAO/cad.php";

    $al = new Aluno();

    $al->setEmail($_POST["email"]);
    $al->setsenha($_POST["senha"]);

    $return = verifica_acesso($al->getEmail(),$al->getSenha());

    if($return){
            echo "acesso liberado";
             echo "<script language='javascript'>window.location.replace('../view/dash.php?');</script>";
    }else{
            echo "acesso negado";

            $mensagem = "dados invalidos, verifique suas credenciais e tente novamente";

            echo "<script language='javascript'>window.location.replace('../view/login.php?mensagem=$mensagem');</script>";
    }
 
?>