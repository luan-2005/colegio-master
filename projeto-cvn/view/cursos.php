<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="cursos.css">
</head>
<body>

<?php

    include "menu.php";

?>

<h3>Cursos</h3>
<br>
<div class="container">

<div class="row">

<div class="col-sm-4 curso1">

<img src="img/python_png.png" alt="..." class="img-thumbnail">
 
   <br>
   <h5>Python + Estatística</h5>
   <p>transforme seus dados em informações por meio de automatização com linguagem de programação Python </p>
   <button class="btn btn-primary btn-lg" type="submit" ><a href="matricula.php">Matricular</a></button>
</div>

<div class="col-sm-4 curso2">

   <img src="img/python_png.png" alt="..." class="img-thumbnail">
   <br>
   <h5>Python + Estatística</h5>
   <p>transforme seus dados em informações por meio de automatização com linguagem de programação Python </p>
   <button class="btn btn-primary btn-lg" type="submit" ><a href="matricula.php">Matricular</a></button>
</div>

<div class="col-sm-4 curso3">

   <img src="img/python_png.png"class="img-thumbnail">
   <br>
   <h5>Python + Estatística</h5>
   <p>transforme seus dados em informações por meio de automatização com linguagem de programação Python </p>
   <button class="btn btn-primary btn-lg" type="submit" ><a href="matricula.php">Matricular</a></button>
</div>

</div>

</div>
<br>

<?php 

include "rodape.php"

?>

</body>
</html>