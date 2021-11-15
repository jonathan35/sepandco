<?php 
require_once 'config/ini.php';


if(count((array)$_POST['showlist'])>0){
    foreach($_POST['showlist'] as $i){

        //---------------- Update product_analytic > display ---------------------
        $exist = sql_read("select id, display from product_analytic where product=? limit 1", 'i', $i);

        if(!empty($exist['id'])){
            $analytic['id'] = $exist['id'];
            $analytic['display'] = $exist['display'] + 1;
        }else{
            $analytic['product'] = $i;
            $analytic['display'] = 1;
        }
        
        sql_save("product_analytic", $analytic);
        
    }
}

?>