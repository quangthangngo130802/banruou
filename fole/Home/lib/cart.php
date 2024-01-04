<?php

    function kiemtra_makh_giohang(){
        global $list_giohang;
        foreach ($list_giohang as $key => $value) {
            # code...
            if($value['makhachhang'] ==  $_SESSION['ma_user']){
                return true;
            }
        }
        return false;
    }

    
    function magiohang_makh(){
    
        global $list_giohang;
        foreach ($list_giohang as $key => $value) {
            # code...
            if($value['makhachhang'] == $_SESSION['ma_user']){
                return $value['magiohang'];
            }
        }

    }
    function get_makh_giohang( ){
        global $list_giohang;
        foreach ($list_giohang as $key => $value) {
            # code...
            if($value['makhachhang'] == $_SESSION['ma_user']){
                return $value['makhachhang'];
            }
        }
    }

    function get_so_hoadonban(){
        global $list_hdb;
        $count = count($list_hdb) -1;
        return $list_hdb[$count]['sohdb'];
        
    }

    function get_magiohang_giohang(){
        global $list_giohang;
        foreach ($list_giohang as $key => $value) {
            # code...
            if(isset($_SESSION['ma_user'])){
                if($value['makhachhang'] == $_SESSION['ma_user']){
                    return $value['magiohang'];
                }
            }
            
        }
    }



    function kiemtra($id, $makh){
        global $magiohang, $list_ctgiohang;
        foreach ($list_ctgiohang as $key => $value) {
            # code...
            
            if($id == $value['masp'] && $makh == $_SESSION['ma_user'] && $magiohang == $value['magiohang']){
                
                return true;
            }

        }
        return false;
    }


    function result($id, $makh){
        global $magiohang, $list_ctgiohang;
        foreach ($list_ctgiohang as $key => $value) {
            # code...
            if($id == $value['masp'] && $makh == $_SESSION['ma_user'] && $magiohang == $value['magiohang']){
                
               return $value;
            }

        }
        
    }


    function danhsach_ctgiohang(){
        global $magiohang, $list_ctgiohang;
        $magiohang = get_magiohang_giohang();
        $list_danhsach = array();
        //show_data($list_ctgiohang);
        foreach ($list_ctgiohang as $key => $value) {
            if($magiohang == $value['magiohang']){
                $list_danhsach[] = $value;
            }
            # code...
        }
        return $list_danhsach;

    }

    function tongtien(){
        $tong = 0;
        $list_danhsach = danhsach_ctgiohang();
        foreach ($list_danhsach as $key => $value) {
            # code...
            $tong += $value['tongcong'];
        }
        return $tong;
    }

    function count_ctgiohang(){
        
            $ds = danhsach_ctgiohang();
            return count($ds);
    }

    function tensp_by_masp($masp){
        global $list_sanpham;
        foreach ($list_sanpham as $key => $value) {
            # code...
            if($value['masp'] == $masp){
                return $value['tensp'];
            }
        }
    }

    

?>