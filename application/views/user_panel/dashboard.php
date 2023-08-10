        <?php
        $session_flashdata_error = $this->session->flashdata('msg');
        if($session_flashdata_error != null)
        {
        ?>
        <script>
            UIkit.modal.alert('<?php echo $this->session->flashdata('msg'); ?>');
        </script>
        <?php
            $this->session->set_flashdata('msg', '');
        }
        ?>
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top">
            <div class="slideshow uk-width-1-1 uk-padding-small uk-margin-remove">
                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                    <div class="uk-width-5-6@s uk-padding-remove uk-margin-remove">
                        <h5>Halaman Utama</h5>
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 7:2">
                            
                                <ul class="uk-slideshow-items">
                                    <li>
                                        <img src="<?php echo base_url(); ?>assets/img/panel_user/promo/promo_1.png" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url(); ?>assets/img/panel_user/promo/promo_1.png" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url(); ?>assets/img/panel_user/promo/promo_1.png" alt="" uk-cover>
                                    </li>
                                </ul>
                            
                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                                    uk-slideshow-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                                    uk-slideshow-item="next"></a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-bottom uk-width-1-1 uk-margin-remove uk-padding-remove">
                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                    <div class="uk-width-5-6@s uk-padding-remove uk-margin-remove">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-clearfix uk-grid-match">
                            <div class="saldo uk-width-1-5@s uk-float-right uk-padding-remove">
                                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                    <div class="all-saldo uk-child-width-1-2 uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                        <div class="coin uk-padding-small uk-margin-remove uk-text-center color-black">
                                            <div class="head open-sans-regular">Coin Anda</div>
                                            <span class="iconify" data-icon="akar-icons:coin" data-width="30" data-inline="false"></span>
                                            <div class="ncoin poppins-medium uk-margin-small-top">Rp. <?php echo number_format($pengguna['coin'],0,',','.'); ?></div>
                                        </div>
                                        <div class="wallet uk-padding-small uk-margin-remove uk-text-center color-black">
                                            <div class="head open-sans-regular">Saldo Anda</div>
                                            <span class="iconify" data-icon="jam:box" data-width="30" data-inline="false"></span>
                                            <div class="nwallet poppins-medium uk-margin-small-top">Rp. <?php echo number_format($pengguna['saldo'],0,',','.'); ?></div>
                                        </div>
                                    </div>
                                    <div class="top-up uk-width-1-1 uk-padding-small uk-margin-remove">
                                        <div class="body uk-width-1-1 uk-padding-remove uk-margin-remove">
                                            <div class="link uk-width-1-1 uk-padding-remove uk-margin-remove">
                                                <a href="<?php echo base_url(); ?>user_panel/dashboard/isi_saldo" class="uk-width-1-1 uk-border-rounded uk-display-block uk-padding-small uk-margin-remove poppins-medium uk-text-small">
                                                    <span class="iconify uk-margin-small-right" data-icon="uil:money-insert" data-width="30" data-inline="false"></span>Top Up Saldo
                                                </a>
                                            </div>
                                            <div class="link uk-width-1-1 uk-padding-remove uk-margin-remove">
                                                <a href="<?php echo base_url(); ?>user_panel/dashboard/riwayat_saldo" class="uk-width-1-1 uk-border-rounded uk-display-block uk-padding-small uk-margin-remove poppins-medium uk-text-small">
                                                    <span class="iconify uk-margin-small-right" data-width="30" data-icon="bi:clock-history" data-inline="false"></span>Riwayat Saldo
                                                </a>
                                            </div>
                                            <div class="link uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                                <a href="<?php echo base_url(); ?>user_panel/riwayat" class="uk-width-1-1 uk-border-rounded uk-display-block uk-padding-small uk-margin-remove poppins-medium uk-text-small"><span class="iconify" data-icon="bi:cart" data-width="30" data-inline="false"></span> <span>Riwayat Pemesanan</span></a>
                                            </div>
                                            <div class="link uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grafik uk-child-width-1-2 uk-width-1-1 uk-padding-remove uk-margin-remove">
                                        <div class="uk-width-1-1 uk-padding-small uk-padding-remove-bottom uk-margin-remove">
                                            <div class="border-bar uk-width-1-1 uk-padding-small uk-margin-remove uk-clearfix ibm-plex-bold uk-background-norepeat" style="background-image: url('<?php echo base_url(); ?>assets/img/panel_user/background-bar.png'); background-size: <?php echo $persen_pembelian; ?>% 100%;">
                                                <span class="uk-float-left text-uppercase">Pembelian</span>
                                                <span class="uk-float-right jumlah"><?php echo $jumlah_pembelian; ?></span>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-padding-small uk-margin-remove">
                                            <div class="border-bar uk-width-1-1 uk-padding-small uk-margin-remove uk-clearfix ibm-plex-bold uk-background-norepeat"
                                                style="background-image: url('<?php echo base_url(); ?>assets/img/panel_user/background-bar.png'); background-size: <?php echo $persen_pembayaran; ?>% 100%;">
                                                <span class="uk-float-left text-uppercase">Pembayaran</span>
                                                <span class="uk-float-right jumlah"><?php echo $jumlah_pembayaran; ?></span>
                                            </div>
                                        </div>
                                        <p class="uk-width-1-1 uk-margin-remove uk-padding-remove uk-text-center">Grafik Pembelian Bulan Ini</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ppob uk-width-4-5@s uk-float-left uk-padding-small">
                                <nav class="uk-navbar-container uk-width-1-1 uk-padding-remove uk-margin-remove" uk-navbar>
                                    <div class="uk-navbar-left uk-width-1-1 uk-padding-remove uk-margin-remove" uk-filter="target: .js-filter">
                                        
                                        <ul class="uk-navbar-nav uk-grid-match">
                                            <li>
                                                <a class="uk-text-center uk-padding-small uk-padding-remove-vertical" uk-filter-control href="#">
                                                    <div class="uk-width-1-1">
                                                        <span class="iconify" data-icon="bi:border-all" data-inline="false" data-height="40"></span>
                                                        <h5 class="poppins-medium color-black text-capitalize uk-padding-remove uk-margin-small-top uk-margin-small-bottom">
                                                            Semua Produk</h5>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="uk-text-center uk-padding-small uk-padding-remove-vertical" href="#" uk-filter-control="[data-color='pulsa']">
                                                    <div class="uk-width-1-1">
                                                        <span class="iconify" data-icon="simple-line-icons:screen-smartphone" data-inline="false"
                                                            data-height="40"></span>
                                                        <h5 class="poppins-medium color-black text-capitalize uk-padding-remove uk-margin-small-top uk-margin-small-bottom">
                                                            Pulsa</h5>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="uk-text-center uk-padding-small uk-padding-remove-vertical" href="#" uk-filter-control="[data-color='voucher']">
                                                    <div class="uk-width-1-1">
                                                        <span class="iconify" data-icon="uil:ticket" data-inline="false" data-height="40"></span>
                                                        <h5 class="poppins-medium color-black text-capitalize uk-padding-remove uk-margin-small-top uk-margin-small-bottom">
                                                            Voucher</h5>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="uk-text-center uk-padding-small uk-padding-remove-vertical" href="#" uk-filter-control="[data-color='emoney']">
                                                    <div class="uk-width-1-1">
                                                        <span class="iconify" data-icon="clarity:wallet-line" data-inline="false" data-height="40"></span>
                                                        <h5 class="poppins-medium color-black text-capitalize uk-padding-remove uk-margin-small-top uk-margin-small-bottom">E-
                                                            Money</h5>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="uk-text-center uk-padding-small uk-padding-remove-vertical" href="#" uk-filter-control="[data-color='pembayaran']">
                                                    <div class="uk-width-1-1">
                                                        <span class="iconify" data-icon="bx:bx-credit-card-alt" data-inline="false" data-height="40"></span>
                                                        <h5 class="poppins-medium color-black text-capitalize uk-padding-remove uk-margin-small-top uk-margin-small-bottom">
                                                            Pembayaran</h5>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="uk-text-center uk-padding-small uk-padding-remove-vertical" href="#" uk-filter-control="[data-color='lain']">
                                                    <div class="uk-width-1-1">
                                                        <span class="iconify" data-icon="bx:bx-credit-card-alt" data-inline="false" data-height="40"></span>
                                                        <h5 class="poppins-medium color-black text-capitalize uk-padding-remove uk-margin-small-top uk-margin-small-bottom">
                                                            Lain - lain</h5>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="uk-text-center uk-padding-small uk-padding-remove-vertical" href="#" uk-filter-control="[data-color='spesial']">
                                                    <div class="uk-width-1-1">
                                                        <span class="iconify" data-icon="mdi:folder-star-outline" data-inline="false" data-height="40"></span>
                                                        <h5 class="poppins-medium color-black text-capitalize uk-padding-remove uk-margin-small-top uk-margin-small-bottom">
                                                            Spesial</h5>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                            <ul class="produk js-filter uk-width-1-1 uk-child-width-1-2 uk-child-width-1-6@m uk-text-center uk-padding uk-padding-remove-horizontal uk-margin-remove uk-grid-match" uk-grid>
                                                <?php
                                                foreach ($pembelian as $a) {
                                                    if($a['status'] != '1')
                                                    {
                                                        continue;
                                                    }
                                                    $fil_nama = $a['product_name'];
                                                    $fil_filter = strtolower($fil_nama);
                                                    $fil_color = "lain";
                                                    $fil_pulsa = strpos($fil_filter, 'pulsa');
                                                    $fil_voucher = strpos($fil_filter, 'voucher');
                                                    $fil_emoney = strpos($fil_filter, "e-");
                                                    $fil_pembayaran = strpos($fil_filter, "pembayaran");
                                                    if($fil_pulsa !== false)
                                                    {
                                                        $fil_color = "pulsa";
                                                    }
                                                    if($fil_voucher !== false)
                                                    {
                                                        $fil_color = "voucher";
                                                    }
                                                    if($fil_emoney !== false)
                                                    {
                                                        $fil_color = "emoney";
                                                    }
                                                    if($fil_pembayaran !== false)
                                                    {
                                                        $fil_color = "pembayaran";
                                                    }
                                                ?>
                                                <li class="tag-white" data-color="<?php echo $fil_color; ?>">
                                                    <a onClick="operator_pembelian('<?php echo $a['id']; ?>', '<?php echo $a['product_name']; ?>', '<?php echo $a['type']; ?>' )" class="ppob uk-padding-remove uk-margin-remove uk-height-1-1">
                                                        <div class="uk-card uk-border-rounded uk-card-default uk-card-body uk-padding-small uk-padding-remove-horizontal uk-height-1-1">
                                                            <div class="icon uk-width-1-1 uk-border-rounded uk-padding-small uk-margin-remove color-white">
                                                                <img style="height: 50px" src="<?php echo base_url(); ?>assets/img/icon/produk/<?php echo $a['icon']; ?>.png">
                                                            </div>
                                                            <div class="title poppins-medium uk-margin-remove"><?php echo $a['product_name']; ?></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <?php
                                                }
                                                foreach ($pembayaran as $b) {
                                                    if($b['status'] != '1')
                                                    {
                                                        continue;
                                                    }
                                                    $fil_nama = $b['name'];
                                                    $fil_filter = strtolower($fil_nama);
                                                    $fil_color = "lain";
                                                    $fil_pulsa = strpos($fil_filter, 'pulsa');
                                                    $fil_voucher = strpos($fil_filter, 'voucher');
                                                    $fil_emoney = strpos($fil_filter, "e-");
                                                    $fil_pembayaran = strpos($fil_filter, "pembayaran");
                                                    if($fil_pulsa !== false)
                                                    {
                                                        $fil_color = "pulsa";
                                                    }
                                                    if($fil_voucher !== false)
                                                    {
                                                        $fil_color = "voucher";
                                                    }
                                                    if($fil_emoney !== false)
                                                    {
                                                        $fil_color = "emoney";
                                                    }
                                                    if($fil_pembayaran !== false)
                                                    {
                                                        $fil_color = "pembayaran";
                                                    }
                                                ?>
                                                <li class="tag-white" data-color="<?php echo $fil_color; ?>">
                                                    <a onClick="operator_pembayaran('<?php echo $b['id']; ?>', '<?php echo $b['name']; ?>', '0' )" class="ppob uk-padding-remove uk-margin-remove uk-height-1-1">
                                                        <div class="uk-card uk-border-rounded uk-card-default uk-card-body uk-padding-small uk-padding-remove-horizontal uk-height-1-1">
                                                            <div class="icon uk-width-1-1 uk-border-rounded uk-padding-small uk-margin-remove color-white">
                                                                <img style="height: 50px" src="<?php echo base_url(); ?>assets/img/icon/produk/<?php echo $b['icon']; ?>.png">
                                                            </div>
                                                            <div class="title poppins-medium uk-margin-remove"><?php echo $b['name']; ?></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <?php
                                                }
                                                foreach ($spesial_produk as $c) {
                                                    if($c['icon'] == null)
                                                    {
                                                        $icon = 'produk-spesial.png';
                                                    }
                                                    else {
                                                        $icon = $c['icon']; 
                                                    }
                                                ?>
                                                <li class="tag-white" data-color="spesial">
                                                    <a onClick="produk_spesial('<?php echo $c['id']; ?>', '<?php echo $c['nama']; ?>', '0' )" class="uk-padding-remove uk-margin-remove uk-height-1-1">
                                                        <div class="uk-card uk-border-rounded uk-card-default uk-card-body uk-padding-small uk-padding-remove-horizontal uk-height-1-1">
                                                            <div class="icon uk-width-1-1 uk-border-rounded uk-padding-small uk-margin-remove color-white">
                                                                <img style="height: 50px" src="<?php echo base_url(); ?>assets/img/icon/produk/<?php echo $icon; ?>">
                                                            </div>
                                                            <div class="title poppins-medium uk-margin-remove"><?php echo $c['nama']; ?></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                            <div class="uk-width-1-1 form_pulsa uk-padding uk-padding-remove-horizontal" id="form_pembelian">
                                                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove"><a  class="form_close"><span class="iconify" data-icon="carbon:close" data-inline="false"></span></a></div>
                                                <h4 class="roboto-bold" id="judul_form_pembelian"></h4>
                                                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                                    <form class="uk-grid-small" method="POST" action="<?php echo base_url(); ?>user_panel/transaksi/checkout" uk-grid>
                                                        <input type="hidden" name="nama_operator" id="nama_operator">
                                                        <div class="uk-width-1-2@s">
                                                            <div class="uk-margin">
                                                                <label class="uk-form-label" for="form-stacked-text">Pilih Operator</label>
                                                                <div class="uk-form-controls">
                                                                    <div class="uk-margin">
                                                                        <select class="uk-select" name="operator" id="operator_pembelian">
                                                                            <option selected>-- Pilih Operator --</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-1-2@s">
                                                            <div class="uk-margin">
                                                                <label class="uk-form-label" for="form-stacked-text">Nomor/No. Tujuan <span class="" uk-tooltip="title: Harapak Masukan Nomer Dengan Benar, Tidak Ada Pengembalian Dana Untuk Kesalahan Pengguna Yang Pesanannya Sudah Terlajur Di Pesan.; pos: bottom-left"><span class="iconify" data-icon="ant-design:question-circle-filled" data-inline="false"></span></span></label>
                                                                <div class="uk-form-controls">
                                                                    <input class="uk-input uk-border-rounded" name="nomor" id="form-stacked-text" type="numbers" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-1-2@s">
                                                            <div class="uk-margin">
                                                                <label class="uk-form-label" for="form-stacked-text">Produk</label>
                                                                <div class="uk-form-controls">
                                                                    <div class="uk-margin">
                                                                        <select class="uk-select" name="produk" id="produk_pembelian">
                                                                            <option selected>-- Pilih Produk --</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-1-2@s">
                                                            <div class="uk-margin">
                                                                <label class="uk-form-label" for="form-stacked-text">Total Harga</label>
                                                                <div class="uk-form-controls uk-width-1-1">
                                                                    <div class="uk-inline uk-width-1-1 uk-border-rounded">
                                                                        <span class="uk-form-icon">Rp.</span>
                                                                        <input class="uk-input uk-border-rounded" id="harga_pembelian" name="harga" readonly type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-1-2@s">
                                                            <div class="uk-margin">
                                                                <label class="uk-form-label" for="form-stacked-text">Pin</label>
                                                                <div class="uk-form-controls">
                                                                    <div class="uk-margin">
                                                                        <div class="uk-inline uk-width-1-1">
                                                                            <span class="uk-form-icon" uk-icon="icon: unlock"></span>
                                                                            <input class="uk-input uk-width-1-1 uk-border-rounded" name="pin" type="password" maxlength="6" placeholder="123141">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-1-1">
                                                            <div class="uk-margin">
                                                                <div class="uk-form-controls">
                                                                    <input type="submit" class="uk-button uk-button-primary uk-border-rounded" value="Beli">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1 form_pulsa uk-padding uk-padding-remove-horizontal" id="form_pembayaran">
                                                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove"><a  class="form_close"><span class="iconify" data-icon="carbon:close" data-inline="false"></span></a></div>
                                                <h4 class="roboto-bold" id="judul_form_pembayaran"></h4>
                                                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                                    <form class="uk-grid-small" method="POST" action="<?php echo base_url(); ?>user_panel/transaksi/cek_tagihan" uk-grid>
                                                        <div class="uk-width-1-2@s">
                                                            <div class="uk-margin">
                                                                <label class="uk-form-label" for="form-stacked-text">Pilih Operator</label>
                                                                <div class="uk-form-controls">
                                                                    <div class="uk-margin">
                                                                        <select class="uk-select" name="operator" id="operator_pembayaran">
                                                                            <option selected>-- Pilih Operator --</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-1-2@s">
                                                            <div class="uk-margin">
                                                                <label class="uk-form-label" for="form-stacked-text">No Pelanggan <span class="" uk-tooltip="title: Harapak Masukan Nomer Dengan Benar, Tidak Ada Pengembalian Dana Untuk Kesalahan Pengguna Yang Pesanannya Sudah Terlajur Di Pesan.; pos: bottom-left"><span class="iconify" data-icon="ant-design:question-circle-filled" data-inline="false"></span></span></label>
                                                                <div class="uk-form-controls">
                                                                    <input class="uk-input uk-border-rounded" id="form-stacked-text" name="nomor" type="numbers" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-1-2@s">
                                                            <div class="uk-margin">
                                                                <label class="uk-form-label" for="form-stacked-text">Produk</label>
                                                                <div class="uk-form-controls">
                                                                    <div class="uk-margin">
                                                                        <select class="uk-select" name="produk" id="produk_pembayaran">
                                                                            <option selected>-- Pilih Produk --</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="uk-width-1-2@s">
                                                            <div class="uk-margin">
                                                                <label class="uk-form-label" for="form-stacked-text">Pin</label>
                                                                <div class="uk-form-controls">
                                                                    <div class="uk-margin">
                                                                        <div class="uk-inline uk-width-1-1">
                                                                            <span class="uk-form-icon" uk-icon="icon: unlock"></span>
                                                                            <input class="uk-input uk-width-1-1 uk-border-rounded" name="pin" type="password" maxlength="6" placeholder="123141" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-1-1">
                                                            <div class="uk-margin">
                                                                <div class="uk-form-controls">
                                                                    <input type="submit" class="uk-button uk-button-primary uk-border-rounded" value="Cek Tagihan">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1 form_pulsa uk-padding uk-padding-remove-horizontal" id="form_spesial">
                                                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove"><a  class="form_close"><span class="iconify" data-icon="carbon:close" data-inline="false"></span></a></div>
                                                <h4 class="roboto-bold" id="judul_form_spesial"></h4>
                                                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                                    <form class="uk-grid-small" method="POST" action="<?php echo base_url(); ?>user_panel/transaksi/checkout_produk_spesial" uk-grid>
                                                        <input type="hidden" name="id_produk" id="id_produk_spesial">
                                                        <div class="uk-width-1-2@s">
                                                            <div class="uk-margin">
                                                                <label class="uk-form-label" for="form-stacked-text">Nama Produk</label>
                                                                <div class="uk-form-controls">
                                                                    <div class="uk-margin">
                                                                        <input class="uk-input uk-border-rounded" id="nama_produk_spesial" name="produk" type="numbers" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-1-2@s">
                                                            <div class="uk-margin">
                                                                <label class="uk-form-label" id="data_dibutuhkan" for="form-stacked-text"> <span class="" uk-tooltip="title: Harapak Masukan Nomer Dengan Benar, Tidak Ada Pengembalian Dana Untuk Kesalahan Pengguna Yang Pesanannya Sudah Terlajur Di Pesan.; pos: bottom-left"><span class="iconify" data-icon="ant-design:question-circle-filled" data-inline="false"></span></span></label>
                                                                <div class="uk-form-controls">
                                                                    <input class="uk-input uk-border-rounded" id="form-stacked-text" name="nomor" type="numbers" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="uk-width-1-2@s">
                                                            <div class="uk-margin">
                                                                <label class="uk-form-label" for="form-stacked-text">Pin</label>
                                                                <div class="uk-form-controls">
                                                                    <div class="uk-margin">
                                                                        <div class="uk-inline uk-width-1-1">
                                                                            <span class="uk-form-icon" uk-icon="icon: unlock"></span>
                                                                            <input class="uk-input uk-width-1-1 uk-border-rounded" name="pin" type="password" maxlength="6" placeholder="123141" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-1-1">
                                                            <div class="uk-margin">
                                                                <div class="uk-form-controls">
                                                                    <input type="submit" class="uk-button uk-button-primary uk-border-rounded" value="Cek Tagihan">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>