
<?php


function seqCres($array){
    
     sort($array);
    
    if($array == $array - 1){
        return true;
    }
    
    if($array != $array){
        return false;
    }
}
    
   

echo seqCres(1,3,4,6,7,8,5,6);
 
?>       
 