<?php  
        $ngay = date("d");
        $thang = date("m");
        $nam = date("Y");
        $thoigian =  $nam.'-'.$thang.'-'.$ngay;
        //echo $thoigian;
        $total = tongtien();
       
        $danhsach = danhsach_ctgiohang();
        //show_data($danhsach);
        $div_start = "<div>
            <style>
                th, td {
                    width: 240px; /* Đặt độ rộng của các cột */
                    padding: 10px; /* Đặt độ dày của phần padding trong ô */
                    text-align: left; /* Căn chữ trong ô về bên trái */
                    border: 1px solid;
                    text-align: center;
                    }
            </style>
        <table>
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody>";
       
        foreach ($danhsach as $key => $value) {
             $tensp = tensp_by_masp($value['masp']);
             $div_start = $div_start."
             <tr>
                <td>{$tensp}</td>
                <td>{$value['soluong']}</td>
                <td>{$value['tongcong']}</td>
             </tr>
             
             ";
             
         # code...
        }
         $div_end = "              
                </tbody>
            </table> 
            <p>Tổng tiền : $total</p>
            </div>";
          $div = $div_start.$div_end;
        
        ////if(isset($_POST['checkout'])){
          // // show_data($_POST);
           send_mail("San pham da mua", $div, $_POST['email'], $_POST['fullname']);
           $sql_add_cart = "INSERT INTO tbl_hdb( makhachhang, diachi, sdt, ngayban, tongtien) VALUE( '".$_SESSION['ma_user']."', '".$_POST['address']."', '".$_POST['tel']."', '".$thoigian."', '".$total."' ) ";
            mysqli_query($conn, $sql_add_cart);  
            redirect("?mode=cart&act=thongbao");
            
            

       // //}
      // // redirect("?mode=cart&act=thongbao");

?>