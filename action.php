<?php

require_once ("crango.php");


$rangos = new lrangos ();

$lista= $rangos->getrangos();

foreach ($lista as $ran)


    {

        echo $ran->cal_rango($ran->get_nui(),$ran->get_nf()) ;
         echo '<br>';
    }


    $nui = $_POST['rangoi'] ;
    $rf = $_POST['rangof'];
    

    $r = new rango($nui,$rf);

  
    
    echo $r->cal_rango($r->get_nui(),$r->get_nf()) ;
    echo "<hr>"
        




    
    
?>
