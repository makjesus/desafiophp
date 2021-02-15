
<?php
// Your code here!

        function seculo($ano){
            
         
            if($ano > 1 && $ano <= 100){
                return 1;
            }
            if($ano >= 101 && $ano <= 200){
                return 2;
            }
        }
        
        echo seculo(200);

?>

