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
    <div class="uk-container uk-container-expand uk-margin-remove uk-padding-remove" id="user-login">
        <div style="min-height: 100vh;" class="uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
            <div class="content uk-background-primary uk-grid-match uk-width-2-5 uk-padding-remove uk-margin-remove uk-clearfix">
                <div class="uk-height-1-1 uk-width-1-1 uk-inline">
                    <div class="uk-width-1-1 uk-margin-remove uk-padding-remove uk-position-center uk-overlay">
                        <div class="uk-width-1-1 uk-padding-remove uk-padding-remove uk-flex-center" uk-grid>
                            <div class="uk-width-5-6">
                                <h3 class="open-sans-bold color-white">Beli Pulsa, Voucher, E-Money, dan bayar tagihan anda dengan mudah.</h3>
                                <img class="uk-width-1-1 uk-padding-remove uk-margin-small-top" src="<?php echo base_url(); ?>assets/img/website/img-user-login.png">
                            </div>
                        </div>
                    </div>
                    <div class="copyright open-sans-regular color-white uk-position-bottom-right uk-overlay uk-text-right">Copyright CV . Fun Teknologi 2021</div>
                </div>
            </div>
            <div class="form-login uk-width-3-5 uk-padding-remove uk-margin-remove">
                <div class="uk-height-1-1 uk-width-1-1 uk-inline uk-padding-remove uk-margin-remove uk-clearfix">
                <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-right"><a class="uk-button uk-button-text" href="<?php echo base_url(); ?>login">Login</a></div>
                    <div style="width: 100%" class="uk-width-1-1 uk-margin-remove uk-padding-remove uk-position-center uk-overlay">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                            <div class="uk-width-1-2 uk-padding-remove uk-margin-remove">
                                <img style="height: 50px" src="<?php echo base_url(); ?>assets/img/website/logo_1.png">
                                <h3 class="open-sans-semi-bold uk-padding-remove uk-margin-small-top uk-margin-medium-bottom">Ganti Password</h3>
                                <form class="uk-width-1-1 uk-form-stacked uk-padding-remove uk-margin-remove" method="POST" action="<?php echo base_url(); ?>login/aksi_ganti_password">
                                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                                    <input type="hidden" value="<?php echo $email; ?>" name="email">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Password Baru</label>
                                        <div class="uk-inline uk-width-1-1">
                                            <a class="uk-form-icon uk-form-icon-flip" id="buttonShowPassword" onclick="showPassword()"><span class="iconify"
                                                    data-icon="bx:bxs-show" data-inline="false"></span></a>
                                            <input class="uk-input field-default" id="myInput" type="password" name="password" placeholder="Password...">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Konfirmasi Password Baru</label>
                                        <div class="uk-inline uk-width-1-1">
                                            <a class="uk-form-icon uk-form-icon-flip" id="buttonShowPassword" onclick="showPassword()"><span class="iconify"
                                                    data-icon="bx:bxs-show" data-inline="false"></span></a>
                                            <input class="uk-input field-default" id="myInput" type="password" name="konfirmasi" placeholder="Password...">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <input type="submit" value="Ganti Password" class="uk-button uk-button-primary uk-border-rounded">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>