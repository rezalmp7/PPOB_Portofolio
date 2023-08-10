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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

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
    <div class="uk-container uk-container-expand uk-margin-remove uk-padding-remove" id="home">
        <div class="header uk-width-1-1 uk-padding-remove uk-margin-remove uk-background-cover uk-background-norepeat" style="background-image: url('<?php echo base_url(); ?>assets/img/website/Rectangle\ 82.png');">
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
                                    <li class="uk-active uk-margin-medium-right poppins-medium"><a class="ppob-button-text" href="<?php echo base_url(); ?>">Home</a></li>
                                    <li class="uk-margin-medium-right poppins-medium"><a class="ppob-button-text" href="<?php echo base_url(); ?>transaksi#cara-transaksi">Cara Transaksi</a></li>
                                    <li class="uk-margin-medium-right poppins-medium"><a class="ppob-button-text" href="<?php echo base_url(); ?>transaksi">Cara Deposito</a></li>
                                    <li class="uk-margin-medium-right poppins-medium"><a class="ppob-button-text" href="#hubungi-kami" uk-scroll>Kontak Kami</a></li>
                                    <li class="uk-margin-medium-right poppins-medium"><a class="ppob-button-text" href="<?php echo base_url(); ?>blog">Blog</a></li>
                                    <li class="button-login uk-padding-small uk-padding-remove-right"><div><a class="uk-border-rounded poppins-semi-bold" href="<?php echo base_url(); ?>daftar">Daftar</a></div></li>
                                    <li class="button-login uk-padding-small uk-padding-remove-right"><div><a class="uk-border-rounded poppins-semi-bold" href="<?php echo base_url(); ?>login">Masuk</a></div></li>
                                </ul>
            
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-margin-remove uk-padding-small uk-hidden@m">
                    <div class="uk-width-1-1 uk-background-contain" style="height: 40px; background-image: url('<?php echo base_url(); ?>assets/img/website/logo_1.png');">
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
            <div class="uk-width-1-1 uk-padding uk-margin-remove">
                <div class="uk-width-1-1 uk-padding">
                    <img class=" uk-width-1-2@s uk-width-1-4@l" src="<?php echo base_url(); ?>assets/img/website/logo_1.png">
                    <p class="open-sans-semi-bold color-black">Beli Pulsa, Voucher, E-Money, dan bayar tagihan<br>anda dengan mudah.</p>
                    <a href="<?php echo base_url(); ?>login" class="uk-button button-black uk-border-rounded uk-margin-small-right">Masuk</a><a href="<?php echo base_url(); ?>daftar" class="uk-button button-white uk-border-rounded">Daftar</a>
                </div>
            </div>
            <div class="uk-width-1-1 uk-margin-small-bottom uk-margin-medium-top uk-clearfix bottom-bar-header">
                <div class="uk-width-1-2@m uk-padding-small uk-border-rounded uk-float-right uk-background-default uk-box-shadow-medium uk-clearfix" uk-grid>
                    <div class="uk-width-1-4@m uk-visible@m uk-float-left uk-padding-small uk-padding-remove-horizontal uk-padding-remove-bottom uk-margin-remove uk-text-center">
                        <a href="<?php echo base_url(); ?>login" class="uk-button uk-button-primary uk-border-rounded">Mulai Transaksi</a>
                    </div>
                    <div class="uk-width-3-4@m uk-float-right uk-child-width-1-3 report uk-margin-remove uk-padding-remove" uk-grid>
                        <div class="uk-text-center uk-padding-small uk-margin-remove roboto-bold" style="border-right: 1px solid #bac8ff;"><span class="head">141+</span><br>Total Pengguna</div>
                        <div class="uk-text-center uk-padding-small uk-margin-remove roboto-bold" style="border-right: 1px solid #bac8ff;"><span class="head">141+</span><br>Total Pesanan</div>
                        <div class="uk-text-center uk-padding-small uk-margin-remove roboto-bold"><span class="head">141+</span><br>Total Layanan</div>
                    </div>
                </div>
                <div
                    class="uk-width-1-4@m uk-hidden@m uk-float-left uk-padding-small uk-padding-remove-horizontal uk-padding-remove-bottom uk-margin-remove uk-text-center">
                    <a href="<?php echo base_url(); ?>login" class="uk-button uk-button-primary uk-border-rounded roboto-bold text-capitalize">Mulai Transaksi</a>
                </div>
            </div>
        </div>
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-remove">
            <div class="langkah-transaksi uk-width-1-1 uk-padding-large uk-margin-remove">
                <h4 class="uk-text-center poppins-bold">3 Langkah Mudah Untuk Memulai Transaksi</h4>
                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div class="uk-padding-small uk-margin-remove">
                            <div class="uk-card uk-card-default uk-card-body uk-background-cover uk-border-rounded" style="background-image: url('<?php echo base_url(); ?>assets/img/website/bg-langkah-1.png');">
                                <div class="uk-text-center uk-padding">
                                    <div class="uk-inline uk-padding-small bg-icon uk-border-circle">
                                        <img src="<?php echo base_url(); ?>assets/img/website/icon/icon-list-pencil.png">
                                    </div>
                                </div>
                                <h3 class="uk-card-title uk-text-center roboto-bold">Melakukan Pendaftaran Akun</h3>
                                <p class="roboto-regular">
                                    Pendaftaran Hanya Dengan Mengisi Form Registrasi, Kemudian Verifikasi Email, Akun Anda Langsung Aktif Dan Dapat Melakukan Transaksi.
                                </p>
                            </div>
                        </div>
                        <div class="uk-padding-small uk-margin-remove">
                            <div class="uk-card uk-card-default uk-card-body uk-background-cover uk-border-rounded" style="background-image: url('<?php echo base_url(); ?>assets/img/website/bg-langkah-2.png');">
                                <div class="uk-text-center uk-padding">
                                    <div class="uk-inline uk-padding-small bg-icon uk-border-circle">
                                        <img src="<?php echo base_url(); ?>assets/img/website/icon/icon-coin.png">
                                    </div>
                                </div>
                                <h3 class="uk-card-title uk-text-center roboto-bold">Melakukan Isi Saldo</h3>
                                <p class="roboto-regular">
                                    Langkah Selanjutnya Anda Melakukan Isi Saldo Agar Dapat Digunakan Untuk Transaksi Semua Produk Terlengkap Dari Kami.
                                </p>
                            </div>
                        </div>
                        <div class="uk-padding-small uk-margin-remove">
                            <div class="uk-card uk-card-default uk-card-body uk-background-cover uk-border-rounded" style="background-image: url('<?php echo base_url(); ?>assets/img/website/bg-langkah-3.png');">
                                <div class="uk-text-center uk-padding">
                                    <div class="uk-inline uk-padding-small bg-icon uk-border-circle">
                                        <img src="<?php echo base_url(); ?>assets/img/website/icon/icon-tast.png">
                                    </div>
                                </div>
                                <h3 class="uk-card-title uk-text-center roboto-bold">Melakukan Transaksi</h3>
                                <p class="roboto-regular">Langkah Terakhir Melakukan Transaksi Anda Dengan Produk Terlengkap Dan Termurah Dari Kami.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tentang-kami uk-width-1-1 uk-padding uk-margin-remove">
                <div class="uk-flex-center uk-padding uk-padding-remove-horizontal" uk-grid>
                    <div class="uk-width-1-2@m uk-margin-remove uk-padding-remove" uk-grid>
                        <div class="uk-width-1-3@m">
                            <img src="<?php echo base_url(); ?>assets/img/website/tentang-kami.png" class="uk-width-1-2 uk-width-1-1@m">
                        </div>
                        <div class="uk-width-2-3@m">
                            <h4 class="poppins-bold uk-padding-remove uk-margin-remove">Tentang Kami</h4>
                            <p class="poppins-regular">
                                Pulsa VIP adalah sebuah platform yang menyediakan layanan penjualan Pulsa All operator, Paket Data, Saldo Gojek/Grab, Token PLN, All Voucher Game Online, Dll.
                            </p>
                            <a href="<?php echo base_url(); ?>daftar" class="uk-button uk-button-primary roboto-bold uk-border-rounded text-capitalize">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo uk-width-1-1 uk-padding uk-margin-remove">
                <div class="uk-width-1-1 uk-padding uk-margin-remove">
                    <div class="uk-position-relative uk-light uk-border-rounded uk-card-primary" uk-slideshow="ratio: 15:3; min-height: 180; max-height: 200">
                    
                        <ul class="uk-slideshow-items">
                            <?php
                            if($promo_1 != null)
                            {
                            ?>
                            <li>
                                <div class="uk-card uk-border-rounded uk-margin-remove">
                                    <div class="uk-padding uk-margin-remove uk-text-center">
                                        <h2 class="roboto-black uk-padding-remove uk-margin-remove">Dapatkan Gratis Koin <span class="primary">Rp <?php echo number_format($promo_1['coin'], 0,',','.'); ?></span></h2>
                                        <p class="uk-padding-remove uk-margin-remove">Setiap Transaksi</p>
                                    </div>
                                </div>
                            </li>
                            <?php
                            }
                            if($promo_2 != null)
                            {
                            ?>
                            <li>
                                <div class="uk-card uk-border-rounded uk-margin-remove">
                                    <div class="uk-padding uk-margin-remove uk-text-center">
                                        <h2 class="roboto-black uk-padding-remove uk-margin-remove">Dapatkan Gratis Koin <span class="primary">Rp <?php echo number_format($promo_2['coin'], 0,',','.'); ?></span></h2>
                                        <p class="uk-padding-remove uk-margin-remove">Setelah melakukan transaksi Minimal <span class="primary">Rp <?php echo number_format($promo_2['syarat'],0,',','.'); ?></span></p>
                                    </div>
                                </div>
                            </li>
                            <?php
                            }
                            if($promo_3 != null)
                            {
                            ?>
                            <li>
                                <div class="uk-card uk-border-rounded uk-margin-remove">
                                    <div class="uk-padding uk-margin-remove uk-text-center">
                                        <h2 class="roboto-black uk-padding-remove uk-margin-remove">Dapatkan Gratis Koin <span class="primary">Rp <?php echo number_format($promo_3['coin']); ?></span></h2>
                                        <p class="uk-padding-remove uk-margin-remove">Setelah melakukan Top Up Minimal <span class="primary">Rp <?php echo number_format($promo_3['syarat']); ?></span></p>
                                    </div>
                                </div>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    
                        <div class="uk-position-bottom-center uk-position-small">
                            <ul class="uk-dotnav">    
                                <?php
                                if($promo_1 != null)
                                {
                                ?>
                                <li uk-slideshow-item="0"><a href="#">Item 1</a></li>                                
                                <?php
                                }
                                if($promo_2 != null)
                                {
                                ?>
                                <li uk-slideshow-item="1"><a href="#">Item 2</a></li>
                                <?php
                                }
                                if($promo_3 != null)
                                {
                                ?>
                                <li uk-slideshow-item="2"><a href="#">Item 3</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="pembayaran uk-width-1-1 uk-padding uk-margin-remove">
                <div class="uk-padding uk-width-1-1 uk-margin-remove">
                    <h4 class="poppins-semi-bold uk-text-center uk-padding-remove uk-margin-remove">Dukungan Metode Pembayaran</h4>
                    <div class="uk-text-center uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                        <div class="uk-width-1-4@s uk-padding-remove uk-margin-remove"></div>
                        <div class="uk-width-1-2@s uk-padding-remove uk-margin-remove">
                            <?php
                            $chennel = $pembayaran['data'];
                            foreach ($chennel as $a) {
                                if($a['active'] == false)
                                {
                                    continue;
                                }
                                else {
                                    $nama1 = explode(' ',$a['name']);
                                    $nama2 = $nama1[0];
                                    $nama = strtoupper($nama2);
                            ?>
                            <img src="<?php echo base_url(); ?>assets/img/bank/<?php echo $nama; ?>.webp">
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="uk-width-1-4@s uk-padding-remove uk-margin-remove"></div>
                    </div>
                </div>
            </div>
        </div>