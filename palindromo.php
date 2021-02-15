function palindromo($str){
            
            $str_in = strlen($str) - 1;
            $str_out = '';
            
            for($i = $str_in ; $i >= 0;$i--){
                $str_out .= $str[$i];
                
            }
            if($str_out == $str){
                return  true;
          
                
            }if($str_out != $str){
                return false;
               
            }
         
        }
        
        echo (palindromo("marema"));

?>
