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
