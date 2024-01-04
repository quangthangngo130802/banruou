<?php 
    function is_fullname($fullname){
       
            $pattern = "/^[\p{L}\'\- ]+$/u";
           if(!preg_match($pattern, $fullname, $matchs)){
              return false;
           }
           else{
              return true;
           }
       

    }

    function is_email($email){
        $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
       
        
           if(!preg_match($pattern, $email, $matchs)){
              return false;
           }
           else{
              return true;
           }
       
   }
   
   function is_address($address){
    $pattern = "/^[\p{L}0-9.,\s]+$/u";  
            if(!preg_match($pattern, $address, $matchs)){
                return false;
            }
            else{
                return true;
            }
      
          
   }

   function is_number($number){
    $pattern = "/^(09|08|01[2|6|8|9])+([0-9]{8})$/";
   
    
        
        if(!preg_match($pattern, $number, $matchs)){
            return false;
        }
        else{
            return true;
        }
  
}


?>