<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    
<div class="container">


    <div class="container">
            <center><h2>PRUEBA TECNICA DE DESARRROLLADORES 2 </h2></center>
</div>

  
  <div class="mb-3">
  <form action="index.php" method="post">
  <label for="exampleFormControlInput1" class="form-label">Rango inicial</label>
  <input type="number" class="form-control" nombre="rangoi" placeholder="inserte el rango inicial">
  <label for="exampleFormControlInput1" class="form-label">Rango final</label>
  <input type="number" class="form-control" nombre="rangof" placeholder="inserte el rango final">
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary mb-3">Buscar numeros perfectos</button>
</div>


  
<?php

require_once ("crango.php");


$rangos = new lrangos ();

$lista= $rangos->getrangos();


  $nui = $_POST['rangoi'] ;
   $rf = $_POST['rangof'];

    $r = new rango($nui,$rf);

    echo $r->get_nui();
    
    echo $r->cal_rango($r->get_nui(),$r->get_nf()) ;
    echo "<hr>"

    
    
?>

<H5>Jose Gregorio Diaz Torres</H5>
</div>




  
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
