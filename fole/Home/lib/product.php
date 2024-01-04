<?php 
    function get_cat_by_id($id){
        global $list_loaisp;
        $idd = $id-1;
        if(array_key_exists($idd, $list_loaisp)){
            $list_loaisp[$idd]['url'] = "?mode=product&act=main&cat_id= {$id}";
            return $list_loaisp[$idd];
        }
    }

    function get_product($list_sanpham){
        //global ;K+
        $result = array();
        foreach ($list_sanpham as  $value) {
            
                $value['url'] = "?mode=product&act=detail&id={$value['masp']}";               
                $result[] = $value;
            
        }
        return $result;
    }

    function get_list_product_by_cat_id($id){
        global $list_sanpham;
        $result = array();
        foreach ($list_sanpham as  $value) {
            
            if($value['maloai'] == $id){
                $value['url'] = "?mode=product&act=detail&id={$value['masp']}";               
                $result[] = $value;
            }
        }
        return $result;
    }

    function get_product_by_id($id){
        global $list_sanpham;
        foreach ($list_sanpham as $key => $value) {
            # code...
            if($value['masp'] == $id){
                    $value['url'] = "?mode=product&act=detail&id={$value['masp']}";  
                    $value['url_delete'] = "?mode=cart&act=delete&id={$value['masp']}";  
                    $value['url_add_cart'] = "?mode=cart&act=add_giohang&id=$id"; 
                    return $value;
              
            }                    
        }
        //return false;
    }

    function count_loaiso_sp($list_sp,$maloai){
        $dem = 0;
        foreach ($list_sp as $key => $value) {
            # code...
            if($value['maloai'] == $maloai){
                $dem++;
            }
        }
        return $dem;
    }

    function show_product($result_tk, $loaisp){
        foreach ($result_tk as $key => $value) {
            # code...
            if($value['maloai'] == $loaisp['maloai'])
            {
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
    }


    

    function get_by_ncc( $id){
        global $list_ncc;
        $value = get_product_by_id($id);
            # code...
            foreach ($list_ncc as $key => $item) {
                # code...
                if($item['mancc'] == $value['mancc']){
                    return $item['tenncc'];
                }
            }
       
        
    }

    function get_by_chatlieu($id){
        global $list_chatlieu;
        $value = get_product_by_id($id);
            # code...
            foreach ($list_chatlieu as $key => $item) {
                # code...
                if($item['machatlieu'] == $value['machatlieu']){
                    return $item['tenchatlieu'];
                }
            }
       
        
    }

    function get_by_loai($id){
        global $list_loaisp;
        $value = get_product_by_id($id);
            # code...
            foreach ($list_loaisp as $key => $item) {
                # code...
                if($item['maloai'] == $value['maloai']){
                    return $item['tenloai'];
                }
            }
       
        
    }


  

?>