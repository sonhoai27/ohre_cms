<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?=BASE_URL?>public/images/cdn/logo.ico">

    <title>OHRE - CMS</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- App css -->
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>public/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>public/app-assets/vendors/css/ui/jquery-ui.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>public/app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>public/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>public/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>public/app-assets/fonts/simple-line-icons/style.css">
    <?php
    if((isset($assetsCSS))){
        print_r($assetsCSS);
    }
    ?>
    <link href="<?=BASE_URL?>public/css/custom.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<!--    <script src="--><?//=BASE_URL?><!--public/js/custom.js" type="text/javascript"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.slim.js"></script>
    <script>
        var BASE_URL = "<?=BASE_URL?>"
    </script>
</head>
<body <?=$BODY_CLASS?>>