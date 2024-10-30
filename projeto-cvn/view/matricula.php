<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>master</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="matricola.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>


<?php 

include "menu.php";

?>

  <br>
 <h1 id="titulo">matricula</h1>
  <br>

  <div class="row d-flex justify-content-center">



<form action="../control/validarCadastro.php" method="post">

<?php

$alert = isset($_GET["mensagem"])?$_GET["mensagem"]:"";
            echo "<div class='alert alert-success'  role='alert' style'text-align: center;'>".$alert."</div>";

?>

<div class="form-row">
  <div class="form-group col-md-6 ">
    <label for="inputEmail4">Email</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
  </div>
  <div class="form-group col-md-6 ">
    <label for="inputPassword4">Senha</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="senha">
  </div>
</div>
<div class="form-group">
  <label for="inputAddress">Nome</label>
  <input type="text" class="form-control" id="inputAddress" placeholder="Nome" name="nome">
</div>
<div class="form-group">
  <label for="inputAddress2">Sobre Nome</label>
  <input type="text" class="form-control" id="inputAddress2" placeholder="Sobre Nome" name="sobreNome">
</div>
<div class="form-row">
  <div class="form-group col-md-6 ">
    <label for="inputCity">cpf</label>
    <input type="text" class="form-control" id="inputCity" name="cpf">
  </div>
  <div class="form-group col-md-2 ">
    <label for="inputZip">whatsapp</label>
    <input type="text" class="form-control" id="inputZip" name="whatsapp">
  </div>
</div>
<button type="submit" class="btn btn-primary">Matricular</button>
</form>

</div>

<br>
<br>
<br>
 
<?php

include "rodape.php";

?>

</body>
</html>