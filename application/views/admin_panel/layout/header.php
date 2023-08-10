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
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/uikit/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.uikit.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_admin.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lobibox/dist/css/Lobibox.min.css"/>

    <!-- JS -->
    <script src="<?php echo base_url(); ?>assets/vendor/uikit/js/uikit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/uikit/js/uikit-icons.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.uikit.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/ckeditor5/build/ckeditor.js"></script>

</head>

<body style="overflow-y: scroll;">

    <div class="uk-height-1-1 uk-container uk-container-expand uk-margin-remove uk-padding-remove" id="<?php echo $page; ?>">
        <div class="uk-width-1-1 uk-height-1-1 uk-padding-remove uk-margin-remove" uk-grid>
            <div style="min-height: 100vh;" class="leftnav uk-width-1-6 uk-padding-remove uk-margin-remove">
                <div class="uk-width-1-1 uk-height-1-1 uk-padding-small uk-margin-remove uk-text-center">
                    <img style="height: 40px" src="<?php echo base_url(); ?>assets/img/website/logo_1.png">
                    <div class="uk-width-1-1 uk-margin-medium-top poppins-medium">
                        <ul class="uk-nav uk-text-left uk-nav-default color-black text-capitalize">
                            <li class="uk-active"><a href="<?php echo base_url(); ?>admin_panel/dashboard"><span class="iconify" data-icon="bi:grid-1x2-fill" data-inline="false"></span> Dashboard</a></li>
                            <li><a href="<?php echo base_url(); ?>admin_panel/user"><span class="iconify" data-icon="wpf:administrator" data-inline="false"></span> User Admin</a></li>
                            <li><a href="<?php echo base_url(); ?>admin_panel/pengguna"><span class="iconify" data-icon="fa-solid:users" data-inline="false"></span> Pengguna</a></li>
                            <li><a href="<?php echo base_url(); ?>admin_panel/promo"><span class="iconify" data-icon="fa-solid:ticket-alt" data-inline="false"></span> Promo</a></li>
                            <li class="uk-parent">
                                <a href="#"><span class="iconify" data-icon="mdi:folder-star-outline" data-inline="false"></span> Produk Spesial</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="<?php echo base_url(); ?>admin_panel/spesial"><span class="iconify" data-icon="mdi:folder-star-outline" data-inline="false"></span> Produk Spesial</a></li>
                                    <li><a href="<?php echo base_url(); ?>admin_panel/transaksi_spesial"><span class="iconify" data-icon="akar-icons:circle-fill" data-inline="false"></span> Transaksi</a></li>
                                </ul>
                            </li>
                            <li class="uk-parent">
                                <a href="#"><span class="iconify" data-icon="fa-solid:book" data-inline="false"></span> Laporan</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="<?php echo base_url(); ?>admin_panel/laporan_ppob"><span class="iconify" data-icon="akar-icons:circle-fill" data-inline="false"></span> PPOB</a></li>
                                    <li><a href="<?php echo base_url(); ?>admin_panel/laporan_topup"><span class="iconify" data-icon="akar-icons:circle-fill" data-inline="false"></span> Top Up Pengguna</a></li>
                                </ul>
                            </li>
                            <li class="uk-parent">
                                <a href="#"><span class="iconify" data-icon="bi:three-dots" data-inline="false"></span> Setting</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="<?php echo base_url(); ?>admin_panel/harga"><span class="iconify" data-icon="akar-icons:circle-fill" data-inline="false"></span> Harga produk</a></li>
                                    <li><a href="<?php echo base_url(); ?>admin_panel/blog"><span class="iconify" data-icon="akar-icons:circle-fill" data-inline="false"></span> Blog</a></li>
                                </ul>
                            </li>
                            <li class="uk-parent">
                                <a href="#"><span class="iconify" data-icon="bx:bxs-contact" data-inline="false"></span> Contact & Pesan</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="<?php echo base_url(); ?>admin_panel/pesan"><span class="iconify" data-icon="akar-icons:circle-fill" data-inline="false"></span> Pesan Website</a>
                                    <li><a href="<?php echo base_url(); ?>admin_panel/kontak"><span class="iconify" data-icon="akar-icons:circle-fill" data-inline="false"></span> Kontak</a>
                                    <li><a href="https://dashboard.tawk.to/#/dashboard/60af6c226699c7280da93290"><span class="iconify" data-icon="akar-icons:circle-fill" data-inline="false"></span> Live Chat Tawk to</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-width-5-6 uk-padding-remove uk-margin-remove">
                <div class="header uk-width-1-1 uk-margin-remove uk-padding-small uk-clearfix">
                    <div class="uk-width-auto uk-float-right">
                        <a class="uk-display-block" href="#" uk-grid>
                            <div uk-grid>
                                <div style="width: 30px;">
                                    <div class="uk-border-circle uk-background-cover"
                                        style="background-image:url('<?php echo base_url(); ?>assets/img/panel_user/user/pp_1.png'); width: 30px; height: 30px">
                                    </div>
                                </div>
                                <div class="name uk-padding-small uk-padding-remove-vertical">
                                    Sierra Ferguson<br>
                                    <span class="email uk-text-small">s.ferguson@gmail.com</span>
                                </div>
                            </div>
                            <div uk-dropdown="mode: click">
                                <a class="uk-link-text" href="<?php echo base_url(); ?>admin_panel/login/logout">Logout</a>
                            </div>
                        </a>
                    </div>
                    <div class="uk-width-auto uk-float-right">
                        <div class="uk-display-block uk-margin-medium-right">
                            <a href="#" class="uk-display-block ">
                                <div>
                                    <span class="uk-badge"><?php echo $select_notif; ?></span>
                                </div>
                            </a>
                            <div uk-dropdown="mode: click">
                                <div class="uk-width-1-1">
                                    <h6 class="uk-card-title">Pembelian Produk Spesial</h6>
                                    <p><?php echo $select_notif; ?> Pembelian produk spesial belum selesai.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>