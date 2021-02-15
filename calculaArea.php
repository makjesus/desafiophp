<?php
// Your code here!

       function calculaArea($num){
          
          $area1 = 1;
          $area2 = 5;
          $area3 = 13;
          $area4 = 25;
          
          $areaPreenchida = $area1 + $area2 + $area3 + $area4;
          
          $areaNaoPreenchida = $num - $areaPreenchida;
          
          $areaTotal =   $areaPreenchida +  $areaNaoPreenchida ;
          
          return $areaTotal - $areaNaoPreenchida;
          
         
           
       }
       echo calculaArea(133)
       
?>       
       