
<div id="sidebar" class="fl-left">
            <div id="main-menu-wp">
                <ul class="list-item">
                    <li class="active">
                        <a href="?mode=home$act=main" title="Trang chủ">Trang chủ</a>
                    </li>
                   
                    <?php
                      global $query_lietke_loaisanpham;
                      
                        foreach ($query_lietke_loaisanpham as $value) {
                            # code...
                                echo "
                                    <li>
                                        <a href='?mode=product&act=main&cat_id={$value['maloai']}' >{$value['tenloai']}</a>
                                    </li>
                                ";
                        }
                       
                    ?>
                    
                  
                </ul>
            </div>
        </div>