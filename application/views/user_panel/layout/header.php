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
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome/css/solid.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/uikit/css/uikit.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font.css" />

    <!-- JS -->
    <script src="<?php echo base_url(); ?>assets/vendor/uikit/js/uikit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/uikit/js/uikit-icons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

</head>

<body>
    <div class="uk-container uk-container-expand uk-margin-remove uk-padding-remove" id="<?php echo $page; ?>">
        <div class="header uk-width-1-1 uk-padding-remove uk-margin-remove">
            <div class="navbar uk-width-1-1 uk-padding-remove uk-margin-remove">
                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-visible@m">
                    <div
                        uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; top: 200">
                        <nav class="uk-navbar-container uk-padding-small uk-padding-remove-vertical" uk-navbar="mode: click">
                            <div class="uk-navbar-left">
                                <img style="height: 35px" class="uk-visible@l" src="<?php echo base_url(); ?>assets/img/website/logo_1.png">
                                <img style="height: 35px" class="uk-hidden@l" src="<?php echo base_url(); ?>assets/img/website/logo.png">
                            </div>

                            <div class="uk-navbar-right">

                                <ul class="uk-navbar-nav">
                                    <li class="uk-active uk-margin-medium-right poppins-medium"><a
                                            class="ppob-button-text" href="<?php echo base_url(); ?>user_panel/dashboard">Halaman Utama</a></li>
                                    <li class="uk-margin-medium-right poppins-medium"><a class="ppob-button-text"
                                            href="<?php echo base_url(); ?>user_panel/leaderboard">Peringkat Bulanan</a></li>
                                    <li class="uk-margin-medium-right poppins-medium"><a class="ppob-button-text"
                                            href="<?php echo base_url(); ?>user_panel/bantuan">Bantuan</a></li>
                                    <!-- <li>
                                        <a href="#"><span class="iconify" data-icon="clarity:notification-solid-badged"
                                                data-inline="false"></span></a>
                                        <div class="uk-navbar-dropdown"
                                            uk-drop="boundary: ul; boundary-align: true; pos: bottom-justify; mode: click;">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="uk-active">
                                                    <a href="#" class="uk-display-block">
                                                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove"
                                                            uk-grid>
                                                            <div style="width:30px"
                                                                class="uk-padding-remove uk-margin-small-right">
                                                                <img src="<?php echo base_url(); ?>assets/img/panel_user/img-icon.png"
                                                                    style="width: 30px">
                                                            </div>
                                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove"
                                                                uk-grid>
                                                                <div
                                                                    class="uk-width-expand uk-padding-remove uk-margin-remove">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Lorem ipsum dolor sit amet, consectetur
                                                                    adipiscing elit.
                                                                </div>
                                                                <div
                                                                    class="uk-width-auto uk-padding-remove uk-margin-remove">
                                                                    12 Maret 2014
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="uk-active">
                                                    <a href="#" class="uk-display-block">
                                                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove"
                                                            uk-grid>
                                                            <div style="width:30px"
                                                                class="uk-padding-remove uk-margin-small-right">
                                                                <img src="<?php echo base_url(); ?>assets/img/panel_user/img-icon.png"
                                                                    style="width: 30px">
                                                            </div>
                                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove"
                                                                uk-grid>
                                                                <div
                                                                    class="uk-width-expand uk-padding-remove uk-margin-remove">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Lorem ipsum dolor sit amet, consectetur
                                                                    adipiscing elit.
                                                                </div>
                                                                <div
                                                                    class="uk-width-auto uk-padding-remove uk-margin-remove">
                                                                    12 Maret 2014
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="uk-active">
                                                    <a href="#" class="uk-display-block">
                                                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove"
                                                            uk-grid>
                                                            <div style="width:30px"
                                                                class="uk-padding-remove uk-margin-small-right">
                                                                <img src="<?php echo base_url(); ?>assets/img/panel_user/img-icon.png"
                                                                    style="width: 30px">
                                                            </div>
                                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove"
                                                                uk-grid>
                                                                <div
                                                                    class="uk-width-expand uk-padding-remove uk-margin-remove">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Lorem ipsum dolor sit amet, consectetur
                                                                    adipiscing elit.
                                                                </div>
                                                                <div
                                                                    class="uk-width-auto uk-padding-remove uk-margin-remove">
                                                                    12 Maret 2014
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->
                                    <li>
                                        <a class="uk-inline" href="#">
                                            <div class="uk-border-circle uk-background-cover"
                                                style="background-image:url('<?php echo base_url(); ?>assets/img/panel_user/user/pp_1.png'); width: 30px; height: 30px">
                                            </div>
                                            <div class="uk-padding-remove-top uk-border-rounded uk-box-shadow-large" uk-dropdown="mode: click">
                                                <a class="uk-link-text uk-display-block" href="<?php echo base_url(); ?>user_panel/profil"><span class="iconify" data-icon="carbon:user-profile" data-inline="false"></span> Profil</a>
                                                <a class="uk-link-text uk-text-danger uk-display-block" href="<?php echo base_url(); ?>login/logout"><span class="iconify" data-icon="ri:logout-box-line" data-inline="false"></span> Logout</a>
                                            </div>
                                        </a>
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
                                <li class="uk-active"><a href="index.html">Halaman Utama</a></li>
                                <li><a href="cara_transaksi.html">Cara Peringkat Bulanan</a></li>
                                <li><a href="cara_transaksi.html#cara-deposite">Bantuan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>