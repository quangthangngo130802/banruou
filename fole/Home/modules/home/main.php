<?php 
    get_header();
?>
<?php


    $per_page = 8;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;

    $offset =  ($page - 1) * $per_page;

    $danhsachsql = "select * from tbl_sanpham LIMIT $per_page offset $offset";

    $result = mysqli_query($conn, $danhsachsql);

    

?>
<style>
    #page{
        display: block;
        text-align: center;
    }
    #page a{
        border: 1px solid blue;
        padding: 7px 10px;
        margin-left: 4px;
        color: red;
    }
</style>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar()  ?>
        <div id="content" class="fl-right">
           
        <div class="section list-cat">
        <?php 
            if(isset($_GET['sub_timkiem'])){
                $search = $_GET['timkiem'];
                $search_ten = "SELECT * FROM tbl_sanpham WHERE tensp like '%$search%' ";
                $sql_timekiem = mysqli_query($conn, $search_ten);
                $sql_sanpham_timkiem = list_danhsach($sql_timekiem);
                

                $result_tk = get_product($sql_sanpham_timkiem);
                if(!empty($search)){
                    if(count($result_tk)> 0){
                        foreach ($list_loaisp as $key => $loaisp) {
                            # code...
                            if(count_loaiso_sp($result_tk, $loaisp['maloai']) > 0){
                                echo " 
            
                                <div class='section-head'>
                                    <a class='section-title' href='#'>  {$loaisp['tenloai']} </a>
                                </div>
                            ";
                            }else{
                                echo "";
                            }               
                            echo "
                                <div class='section-detail'>
                                    <ul class='list-item clearfix'>
                            ";
                                    show_product($result_tk, $loaisp);
                                    echo "
                                    </ul>
                                </div>";
            
                        }
                    }
                    else{
                        echo "Không tìm thấy sản phẩm có chữ : <b>$search</b>";
                    }
                }else{
                    
                    echo "Không có sản phẩm nào !";
                }         

            }else{
        ?>
               
                
                <div class="section-detail">
                    <ul class="list-item clearfix">
                    <?php

                    while($row = mysqli_fetch_array($result)){
                        echo "
                        <li>
                            <a href='?mode=product&act=detail&id={$row['masp']}' title='' class='thumb'>
                                <img src='public/img_ruou/{$row['anh']}' alt=''>
                            </a>
                            <a href='?mode=product&act=detail&id={$row['masp']}' title='' class='title'>{$row['tensp']}</a>
                            <p class='price'>{$row['dongiaban']}</p>
                        </li>
                        ";      
                    }
                    
                       
                    ?>
                    </ul>
                </div>
           

        <?php  
                while($row = mysqli_fetch_array($result)){
                
                }


                $sql = "Select count('masp') as total from tbl_sanpham";
                $result = mysqli_query($conn, $sql);
                $row = $result->fetch_assoc();
                $total_product = $row['total'];
                $totale_page = ceil($total_product/$per_page);

                echo "<div id='page'>";

                for ($i=1; $i<=$totale_page ; $i++) { 
                            echo "<a href ='?mode=home&act=main&page=$i'>$i</a>"    ;
                }

                echo "</div>";
                
            }
        
        ?>

                
        </div>
           
        </div>
    </div>
</div>

<
<?php 
    get_footer();
?>
