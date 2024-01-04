
<?php
    if(isset($_GET['sub_timkiem'])){
        $search = $_GET['timkiem'];
        if (empty($search)) {
            echo " <script >
                    alert('Yêu cầu nhập thông tin tìm kiếm')
                </script> ";
        } else {
            
           // $search_ten = "SELECT * FROM danhsach WHERE (fullname like '%$search%') OR (address like '%$search%') ";

          //$sql_timekiem = mysqli_query($mysql, $search_ten);
         // print_r($sql_timekiem);
           echo $search;
            
          
        }
    }
?>