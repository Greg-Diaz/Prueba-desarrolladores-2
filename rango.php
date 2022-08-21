<?php

class rango 
{


    private $nui, $nf, $per;
    function __construct ($nui,$nf)  
    {
            $this->nui = $nui ;
            $this->nf = $nf ;

    }

        
       function get_nui()
        {
        return  $this->nui;
        }

        function set_nui($nui)
        {
        $this->nui = $nui;
        }

        function get_nf()
        {
        return  $this->nf;
        }

        function set_nf($nf)
        {
        $this->nf = $nf;
        }

        function get_per()
        {
        return  $this->per;
        }

        function set_per($per)
        {
        $this->per = $per;
        }



            function cal_perf($n)
            {

                  
                        $sum = 0;
                        for ($i = 1; $i<$n; $i++)
                        {

                            if (($n % $i) == 0) {
                                $sum = $sum + $i;
                            }

                        } return $sum == $n ;

                       
                        
            }



            function cal_rango($ni,$nf)
            {
               
                


                echo "<div class=container><hr> En el rango de : ",$ni," a ",$nf, "<br>";
                while ($ni <= $nf ) 
                {                            
                 
                 if ($this->cal_perf($ni)) {
                     echo $ni," es un numero perfecto <br>";
                     $ni ++;
                 } 
                 else{  $ni++;} 
                  
                   
               
              }  echo"<hr></div>";
            }  

}



?>