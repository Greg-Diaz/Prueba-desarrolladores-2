<?php


require_once("rango.php");

class lrangos 
{
    function getrangos()
    {
        $lista = array();

            $ran = new rango("1","10");
            array_push($lista,$ran);

            $ran = new rango("1","28");
            array_push($lista,$ran);

            $ran = new rango("1","500");
            array_push($lista,$ran);

            $ran = new rango("1","9000");
            array_push($lista,$ran);


                return $lista ;

    }


         

}

?>