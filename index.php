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

<?php

require_once ("crango.php");


$rangos = new lrangos ();

$lista= $rangos->getrangos();

foreach ($lista as $ran)


    {

        echo $ran->cal_rango($ran->get_nui(),$ran->get_nf()) ;
         echo '<br>';
    }


?>

<H5>Jose Gregorio Diaz Torres</H5>
</div>




  
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>