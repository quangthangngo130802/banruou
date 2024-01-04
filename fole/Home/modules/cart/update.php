<?php 

    if(isset($_POST['btn_update_cart'])){
        
            
        //show_data($_POST['solg']);
        
        $magiohang = get_magiohang_giohang( $list_giohang);
        
        foreach ($_POST['solg'] as $key => $value) {
            
            foreach ($list_ctgiohang as  $item) {
                # code...
                if($magiohang == $item['magiohang']){
                    if($key == $item['masp']){
                        $update = "UPDATE tbl_ctgiohang SET soluong ='".$value."', tongcong ='".$value * $item['gia']."'  WHERE masp = '".$key."' and magiohang = '".$magiohang."' ";
                        mysqli_query($conn, $update);
                    }
                }   
               
            }

        }
        

         redirect("?mode=cart&act=show");

        
    }


?>