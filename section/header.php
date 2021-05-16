<?php
include $_SERVER['DOCUMENT_ROOT'].$_PATH_.'/config/app_config.php';

$app = new app('APP_92ASA2_32S0');
$_PATH_ = "/workspace";
$_NAME_ = $app->get_name();
$_DESCRIPTION_ = $app->get_desc();
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $_NAME_; ?></title>
<!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->
<meta name="application-name" content="<?php echo $_NAME_; ?>">
<!-- <meta property="og:image" content="../media/icons/logo_270x270.png"> -->
<meta property="og:title" content="<?php echo $_NAME_; ?>">
<meta property="og:site_name" content="<?php echo $_NAME_; ?>">
<meta propety="og:locale" content="en-GB">
<meta property="og:type" content="website">
<meta propety="og:description" content="<?php echo $_DESCRIPTION_; ?>">
<meta propety="twitter:description" content="<?php echo $_DESCRIPTION_; ?>">
<meta name="description" content="<?php echo $_DESCRIPTION_; ?>">
<meta name="keywords" content="">
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="nosnippet">

<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="//unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet/less" type="text/css" href="<?php echo $_PATH_; ?>/lib/less/style.less<?php echo "?v=".rand(100000000, 999999999);  ?> " />
<link rel="stylesheet" href="<?php echo $_PATH_; ?>/lib/css/fontello/animation.css">
<link rel="stylesheet" href="<?php echo $_PATH_; ?>/lib/css/fontello/fontello.css">

<script type="text/javascript">less = { javascriptEnabled: true };</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
<script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.1/socket.io.js"></script>
<script type="text/javascript" src="<?php echo $_PATH_; ?>/lib/js/script.js<?php echo "?v=".rand(100000000, 999999999);  ?> "></script>
 <script type="text/javascript" src="<?php echo $_PATH_; ?>/lib/js/socket.js<?php echo "?v=".rand(100000000, 999999999);  ?> "></script>
<!-- <script type="text/javascript" src="<?php echo $_PATH_; ?>/lib/js/ajx.js"></script> -->
