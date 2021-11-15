<?php
require_once 'config/ini.php';
require_once 'config/security.php';
require_once 'config/str_convert.php';


$seo_title = $seo_keyword = $seo_description = '';

if (strpos($_SERVER['SCRIPT_NAME'], 'product_details.php') !== false && !empty($_GET['p'])) {
    $product_name = $str_convert->to_query($_GET['p']);
    $seo_product = sql_read("select * from product where status=1 and name like ? limit 1", 's', $product_name);
    $seo_title = ' - '.$seo_product['name'];
    $seo_keyword =  $seo_product['seo_keyword'];
    $seo_description = $seo_product['seo_description'];
}

if (strpos($_SERVER['SCRIPT_NAME'], 'page.php') !== false && !empty($_GET['t'])) {
    $title = $str_convert->to_query($_GET['t']);
    $seo_page = sql_read("select title, seo_keyword, seo_description from pages where status = ? and title like ? limit 1", 'is', array(1, '%'.$title.'%'));
    $seo_title = ' - '.$seo_page['title'];
    $seo_keyword =  $seo_page['seo_keyword'];
    $seo_description = $seo_page['seo_description'];
}
?>
<!DOCTYPE html>
<head>
    <title>Sep and Co <?php echo $seo_title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php {/**
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo ROOT?>images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo ROOT?>images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo ROOT?>images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo ROOT?>images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo ROOT?>images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo ROOT?>images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo ROOT?>images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo ROOT?>images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo ROOT?>images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo ROOT?>images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo ROOT?>images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo ROOT?>images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT?>images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo ROOT?>images/favicon/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo ROOT?>images/logo.png">
    <meta name="theme-color" content="#ffffff">*/}?>
    <link rel="icon" href="<?php echo ROOT?>images/logo.png">
    <?php if(!empty($seo_keyword)){?>
    <meta name="keywords" content="<?php echo $seo_keyword?>">
    <?php }?>
    <?php if(!empty($seo_description)){?>
    <meta name="description" content="<?php echo $seo_description?>">
    <?php }?>

    <script src="<?php echo ROOT?>js/jquery.min.js"></script>
    <script src="<?php echo ROOT?>js/popper.min.js"></script>
    <script src="<?php echo ROOT?>js/4.3.1/bootstrap.min.js"></script>
    <script src="<?php echo ROOT?>js/bootstrap.min.js"></script>
    <script src="<?php echo ROOT?>js/jquery-3.5.0.js"></script>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ROOT?>css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo ROOT?>fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo ROOT?>fontawesome/css/all.css">
    <link rel="stylesheet" href="<?php echo ROOT?>fontawesome/css/solid.css">
    <link rel="stylesheet" href="<?php echo ROOT?>fontawesome/css/solid.min.css">


    <script src="<?php echo ROOT?>js/animate.js"></script>
    <link rel="stylesheet" href="<?php echo ROOT?>css/animate.css">

    <link href="<?php echo ROOT?>css/custom.css" rel="stylesheet" />
    
    <?php /**
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer></script>
    <script type="text/javascript">
    var onloadCallback = function() {
        grecaptcha.render('recaptcha', {
            'sitekey' : '6LdPR5gUAAAAAObMmAHwsTGWbMNB4veEV1u4lTJU'
        });
    };
    </script>
    */?>

</head>