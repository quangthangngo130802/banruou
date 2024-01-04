
<?php
    
    get_header();
?>
<?php 

    //$list_loaisp = list_danhsach($query_lietke_loaisanpham); 
    //$list_sanpham = list_danhsach($query_lietke_sanpham); 
   //show_data($list_sanpham);
    $cat_id = (int)$_GET['cat_id'];
    //echo $cat_id;
    //show_data($list_loaisp);
    // lấy loại sản phẩm
    $info_cat = get_cat_by_id($cat_id);
    //show_data($info_cat);

    // danh sách sản phẩm
    $list_item = get_list_product_by_cat_id($cat_id);
    //show_data($list_item);
?>
<style>
    .section-title{
        color: blue;
    }
</style>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
      
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php  echo $info_cat['tenloai'] ?></h3>
                    <!-- <p class="section-desc">Có <?php  echo count($list_item) ?> sản phẩm</p> -->
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        
                    <?php
                    if(!empty($list_item)){
                        foreach ($list_item as $key => $value) {
                            //echo $value['url'];
                            echo "
                            <li>
                                <a href='{$value['url']}' title='' class='thumb'>
                                    <img src='public/img_ruou/{$value['anh']}' alt=''>
                                </a>
                                <a href='{$value['url']}' title='' class='title'>{$value['tensp']}</a>
                                <p class='price'>{$value['dongiaban']}</p>
                            </li>
                            ";
                        }
                    }
                       
                    ?>
                        
                    </ul>
                </div>
            </div>
            <!-- <div class="section" id="pagenavi-wp">
                <div class="section-detail">
                    <ul id="list-pagenavi">
                        <li class="active">
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                    </ul>
                    <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?php 
    get_footer();
?>