
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
    <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LeP-20bAAAAAFG3jkwk5ncSp_YENGKk7FylPlSA'
        });
      };
    </script>
</head>

<body>
    <div class="uk-container uk-container-expand uk-margin-remove uk-padding-remove" id="user-daftar">
        <div style="min-height: 100vh;" class="uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
            <div
                class="content uk-background-primary uk-grid-match uk-width-2-5 uk-padding-remove uk-margin-remove uk-clearfix">
                <div class="uk-height-1-1 uk-width-1-1 uk-inline">
                    <div class="uk-width-1-1 uk-margin-remove uk-padding-remove uk-position-center uk-overlay">
                        <div class="uk-width-1-1 uk-padding-remove uk-padding-remove uk-flex-center" uk-grid>
                            <div class="uk-width-5-6">
                                <h3 class="open-sans-bold color-white">Beli Pulsa, Voucher, E-Money, dan bayar tagihan
                                    anda dengan mudah.</h3>
                                <img class="uk-width-1-1 uk-padding-remove uk-margin-small-top"
                                    src="<?php echo base_url(); ?>assets/img/website/img-user-login.png">
                            </div>
                        </div>
                    </div>
                    <div
                        class="copyright open-sans-regular color-white uk-position-bottom-right uk-overlay uk-text-right">
                        Copyright CV . Fun Teknologi 2021</div>
                </div>
            </div>
            <div style="height: 120vh" class="uk-width-3-5 uk-height-1-1 uk-padding-remove uk-margin-remove">
                <div class="form-daftar uk-width-1-1 uk-height-1-1 uk-padding-medium uk-padding-remove-horizontal uk-margin-remove">
                    <div class="uk-height-1-1 uk-width-1-1 uk-inline uk-padding-remove uk-margin-remove uk-clearfix">
                        <div class="note uk-width-1-1 uk-padding-small uk-margin-remove uk-text-right">Sudah punya akun? <a
                                class="uk-button uk-button-text" href="<?php echo base_url(); ?>login">Login sekarang</a></div>
                        <div style="width: 100%"
                            class="uk-width-1-1 uk-margin-remove uk-padding-remove uk-position-center uk-overlay">
                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                                <div class="uk-width-1-2 uk-padding-remove uk-margin-remove">
                                    <img style="height: 25px" src="<?php echo base_url(); ?>assets/img/website/logo_1.png">
                                    <h3
                                        class="open-sans-semi-bold uk-padding-remove uk-margin-small-top uk-margin-small-bottom">
                                        Daftar akun PPOB</h3>
                                    <form class="uk-width-1-1 uk-form-stacked uk-padding-remove uk-margin-remove"
                                        method="POST" id="contact_form" action="<?php echo base_url(); ?>daftar/daftar_aksi">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-1-2@s">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-text">Nama depan</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" id="form-stacked-text" type="text"
                                                            name="first_name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2@s">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-text">Nama
                                                        belakang</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" id="form-stacked-text" type="text"
                                                            name="last_name" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">Email</label>
                                            <div class="uk-inline uk-width-1-1">
                                                <span class="uk-form-icon">@</span>
                                                <input class="uk-input" type="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">Nomor Telepon</label>
                                            <div class="uk-inline uk-width-1-1">
                                                <span class="uk-form-icon">+62</span>
                                                <input class="uk-input" type="text" name="no_telp" required>
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">Nama Pengguna</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="text" name="username"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">Password</label>
                                            <div class="uk-inline uk-width-1-1">
                                                <a class="uk-form-icon uk-form-icon-flip" id="buttonShowPassword"
                                                    onclick="showPassword()"><span class="iconify" data-icon="bx:bxs-show"
                                                        data-inline="false"></span></a>
                                                <input class="uk-input field-default" id="myInput" type="password"
                                                    name="password" placeholder="Password..." required>
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">Konfirmasi Password</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="password"
                                                    name="konfirmasi" placeholder="Konfirmasi Password">
                                            </div>
                                        </div>
                                        <div>
                                            <div id="html_element"></div>
                                        </div>
                                        <div class="uk-margin">
                                            <div class="uk-form-controls">
                                                <!-- <a class="uk-button uk-button-primary uk-border-rounded"
                                                    href="#modal-group-1" uk-toggle>Daftar</a> -->
                                                <input type="submit" value="Daftar" class="uk-button uk-button-primary">
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
    </div>

    <?php
    $status = $this->session->userdata('pulsavip_user_status');
    if($status == 'pulsavip_user_register_pin')
    {
    ?>
    <div class="uk-overlay-primary uk-position-cover"></div>
    <div class="uk-overlay uk-position-center">
        <form method="POST" action="<?php echo base_url(); ?>daftar/tambah_pin">
            
            <div id="create-pin" class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                    <div
                        class="uk-width-1-3@l uk-width-1-2@m uk-width-1-1@s uk-padding-small uk-margin-remove background-white uk-border-rounded">
                        <div class="uk-modal-body uk-text-center">
                            <h3 class="uk-text-center open-sans-semi-bold">Buat PIN anda</h3>
                            <p class="uk-text-center uk-text-small">silahkan masukan PIN anda agar bertransaksi lebih aman
                            </p>

                            <div class="uk-grid-small uk-width-1-1 uk-child-width-1-6 uk-padding-small" uk-grid>
                                <div>
                                    <input class="uk-input" type="number" name="pin1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" required>
                                </div>
                                <div>
                                    <input class="uk-input" type="number" name="pin2" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" required>
                                </div>
                                <div>
                                    <input class="uk-input" type="number" name="pin3" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" required>
                                </div>
                                <div>
                                    <input class="uk-input" type="number" name="pin4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" required>
                                </div>
                                <div>
                                    <input class="uk-input" type="number" name="pin5" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" required>
                                </div>
                                <div>
                                    <input class="uk-input" type="number" name="pin6" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" required>
                                </div>
                            </div>

                            <a id="to-konfirmasi-pin" class="uk-button uk-button-primary">Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="konfirmasi-pin" class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                    <div
                        class="uk-width-1-3@l uk-width-1-2@m uk-width-1-1@s uk-padding-small uk-margin-remove background-white uk-border-rounded">
                        <div class="uk-modal-body uk-text-center">
                            <h3 class="uk-text-center open-sans-semi-bold">Create PIN anda</h3>
                            <p class="uk-text-center uk-text-small">silahkan masukan PIN anda agar bertransaksi lebih aman
                            </p>
            
                            <div class="uk-grid-small uk-width-1-1 uk-child-width-1-6 uk-padding-small" uk-grid>
                                <div>
                                    <input class="uk-input" type="number" name="kpin1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" required>
                                </div>
                                <div>
                                    <input class="uk-input" type="number" name="kpin2" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" required>
                                </div>
                                <div>
                                    <input class="uk-input" type="number" name="kpin3" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" required>
                                </div>
                                <div>
                                    <input class="uk-input" type="number" name="kpin4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" required>
                                </div>
                                <div>
                                    <input class="uk-input" type="number" name="kpin5" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" required>
                                </div>
                                <div>
                                    <input class="uk-input" type="number" name="kpin6" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" required>
                                </div>
                            </div>
            
                            <a id="to-create-pin" class="uk-button uk-button-danger">Kembali</a>
                            <input type="submit" class="uk-button uk-button-primary" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
    }
    ?>
</body>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
</html>

