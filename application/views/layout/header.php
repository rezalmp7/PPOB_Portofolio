<!DOCTYPE html>
<html>

<head>
    <title>PulsaVIP</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/img/website/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/img/website/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/img/website/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>assets/img/website/favicon/site.webmanifest">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/uikit/css/uikit.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font.css" />

    <!-- JS -->
    <script src="<?php echo base_url(); ?>assets/vendor/uikit/js/uikit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/uikit/js/uikit-icons.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</head>

<body>
    <div class="uk-container uk-container-expand uk-margin-remove uk-padding-remove" id="<?php echo $page; ?>">
        <div class="header uk-width-1-1 uk-padding-remove uk-margin-remove">
            <div class="navbar uk-width-1-1 uk-padding-remove uk-margin-remove">
                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-visible@m">
                    <div
                        uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; top: 200">
                        <nav class="uk-navbar-container uk-padding uk-padding-remove-vertical" uk-navbar>
                            <div class="uk-navbar-left">
                                <img style="height: 35px" class="uk-visible@l" src="<?php echo base_url(); ?>assets/img/website/logo_1.png">
                                <img style="height: 35px" class="uk-hidden@l" src="<?php echo base_url(); ?>assets/img/website/logo.png">
                            </div>

                            <div class="uk-navbar-right">

                                <ul class="uk-navbar-nav">
                                    <li class="uk-active uk-margin-medium-right poppins-medium"><a
                                            class="ppob-button-text" href="<?php echo base_url(); ?>">Home</a></li>
                                    <li class="uk-margin-medium-right poppins-medium"><a class="ppob-button-text"
                                            href="<?php echo base_url(); ?>transaksi#cara-transaksi">Cara Transaksi</a></li>
                                    <li class="uk-margin-medium-right poppins-medium"><a class="ppob-button-text"
                                            href="<?php echo base_url(); ?>transaksi">Cara Deposito</a></li>
                                    <li class="uk-margin-medium-right poppins-medium"><a class="ppob-button-text"
                                            href="#hubungi-kami" uk-scroll>Kontak Kami</a></li>
                                    <li class="uk-margin-medium-right poppins-medium"><a class="ppob-button-text"
                                            href="<?php echo base_url(); ?>blog">Blog</a></li>
                                    <li class="button-login uk-padding-small uk-padding-remove-right">
                                        <div><a class="uk-border-rounded poppins-semi-bold"
                                                href="<?php echo base_url(); ?>daftar">Daftar</a></div>
                                    </li>
                                    <li class="button-login uk-padding-small uk-padding-remove-right">
                                        <div><a class="uk-border-rounded poppins-semi-bold" href="<?php echo base_url(); ?>login">Masuk</a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-margin-remove uk-padding-small uk-hidden@m">
                    <div class="uk-width-1-1 uk-background-contain"
                        style="height: 40px; background-image: url('<?php echo base_url(); ?>assets/img/website/logo_1.png');">
                        <a href="#menu_mobile" uk-toggle><img src="<?php echo base_url(); ?>assets/img/website/toggle_sidebar.png"></a>
                    </div>
                    <div id="menu_mobile" uk-offcanvas>
                        <div class="uk-offcanvas-bar">
                            <ul class="uk-nav uk-nav-default poppins-normal">
                                <li class="uk-active"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>transaksi">Cara Transaksi</a></li>
                                <li><a href="<?php echo base_url(); ?>transaksi">Cara Deposito</a></li>
                                <li><a href="#hubungi-kami">Kontak Kami</a></li>
                                <li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
                                <li class="uk-nav-header">Login/Daftar</li>
                                <li><a href="<?php echo base_url(); ?>login">Login</a></li>
                                <li><a href="<?php echo base_url(); ?>daftar">Daftar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>