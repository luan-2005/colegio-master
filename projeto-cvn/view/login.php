<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio master</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap">
    <link rel="stylesheet" href="login.css">
	
</head>
<body>
    
    <?php

 include "menu.php";

    ?> 
        <style>
        body {
            background-image: url('imagem.jpg'); /* Caminho da imagem */
            background-size: cover; /* Ajusta a imagem para cobrir toda a tela */
            background-position: center; /* Centraliza a imagem */
            background-repeat: no-repeat; /* Evita repetição da imagem */
        }
    </style>



    <div class="container  ">

        <div class="col-sm-12 titulo">
            <h1>Área de Login</h1>
        </div>

        <div class="row">
            <div class="cal-sm-12 login">
                
           <?php

            
            $alert = isset($_GET["mensagem"])?$_GET["mensagem"]:"";
            echo "<div class='alert alert-danger'  role='alert' style'text-align: center;'>".$alert."</div>";

           ?>

  <form action="../control/validarlogin.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Informe o seu email" name="email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"name="senha">
  </div>
 
  <button type="submit" class="btn btn-primary">enviar</button>
</form>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php

include "rodape.php";

?>

</body>
</html>