<!doctype html>
<html lang="tr">
<head>
    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,700' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,700,500' rel='stylesheet'
          type='text/css'>
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/flaticon.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/colors/red.css" id="color"/>
    <title>Tunahan AKA V Card </title>
    <?php if ($resim == null) {
        echo "<h4 class='alert-succes'>Hata</h4>";
    } else {
        foreach ($resim as $row) { ?>

            <style type="text/css">
                .bgimg {
                    background-image: url('<?php echo base_url()?>assets/images/resim/<?php echo $row->resim; ?>');
                }
            </style>
        <?php }
    } ?>

</head>
<body>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.9&appId=310215749434908";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<!-- Loader -->
<div id="page-loader"></div>
<!-- Loader / End -->


<!-- Page Wrapper -->
<div id="page-wrapper">

