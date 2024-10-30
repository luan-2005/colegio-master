<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionario</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap">
    <link rel="stylesheet" href="funcionario.css">
</head>
<body>
    
        <?php

            include "menu.php";

        ?>

        <h3>Trabalhe com a gente</h3>
        <br>

      

        <form>

      <p>Empresa: Colegio Master</p>
         
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">nome completo</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nome Completo">
    </div>
   
  </div>
  <div class="form-group">
    <label for="inputAddress">CEP</label>
    <input type="text" class="form-control " id="inputAddress" placeholder="CEP">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Bairro</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Municipio</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">CPF</label>
      <input type="text" class="form-control" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">RG</label>
      <input type="text"  class="form-control" >
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">gmail</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="email">
    </div>

    <div class="form-group">
    <label for="inputPassword6">data de nascimento</label>
    <input type="date" id="data" class="form-control" aria-describedby="passwordHelpInline">
    
  </div>

  <div class="form-group col-md-4">
      <label for="inputState">formas de contato</label>
    <input type="text"  class="form-control" placeholder="gmail/facebook/instagram" >
    </div>

  </div>
  
  <button type="submit" class="btn btn-primary">enviar</button>
</form>

</body>
</html>