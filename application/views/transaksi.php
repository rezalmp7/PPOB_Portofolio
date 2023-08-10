
        <div class="body uk-width-1-1 uk-padding uk-padding-remove-horizontal uk-margin-remove uk-background-cover"
            style="background-image: url('<?php echo base_url(); ?>assets/img/website/background-cara-transaksi.png');">
            <div class="uk-width-1-1 uk-padding uk-margin-remove uk-flex-center" uk-grid>
                <div class="uk-width-3-5@m uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove" id="cara-deposito" uk-grid>
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                            <h4 class="poppins-bold uk-padding-remove uk-margin-remove">Cara Deposito</h4>
                        </div>
                        <div class="uk-width-1-4@s uk-padding-remove uk-margin-remove">
                            <img class="uk-width-1-1 uk-padding-remove uk-margin-remove"
                                src="<?php echo base_url(); ?>assets/img/website/gmb_cara_transaksi.png">
                        </div>
                        <div class="uk-width-3-4@s uk-padding-remove uk-margin-remove">
                            <ul class="poppins-regular uk-list uk-list-large uk-padding-remove uk-margin-remove">
                                <li uk-grid>
                                    <div class="uk-padding-remove uk-margin-remove"><img
                                            src="<?php echo base_url(); ?>assets/img/website/list-cara-transaksi.png"></div>
                                    <div class="uk-width-expand">Klik menu Isi Saldo, pilih metode deposit,</div>
                                </li>
                                <li uk-grid>
                                    <div class="uk-padding-remove uk-margin-remove"><img
                                            src="<?php echo base_url(); ?>assets/img/website/list-cara-transaksi.png"></div>
                                    <div class="uk-width-expand">Pilih metode Deposit, Pilih sistem konfirmasi
                                        (Otomatis/Manual),</div>
                                </li>
                                <li uk-grid>
                                    <div class="uk-padding-remove uk-margin-remove"><img
                                            src="<?php echo base_url(); ?>assets/img/website/list-cara-transaksi.png"></div>
                                    <div class="uk-width-expand">Isi nominal deposit, klik submit. Lakukan pembayaran,
                                    </div>
                                </li>
                                <li uk-grid>
                                    <div class="uk-padding-remove uk-margin-remove"><img
                                            src="img/website/list-cara-transaksi.png"></div>
                                    <div class="uk-width-expand">Setelah transfer selesai klik konfirmasi di menu
                                        Tagihan. Metode "Otomatis" akan dikonfirmasi detik itu juga!</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-margin-large-top uk-margin-large-bottom uk-padding uk-width-1-1"></div>
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove" id="cara-transaksi">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-large-top uk-margin-medium-bottom">
                            <h4 class="poppins-bold uk-padding-remove uk-margin-remove uk-text-right">Cara Transaksi
                            </h4>
                        </div>
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                            <div class="uk-width-1-4@s uk-float-right uk-margin-remove uk-padding-remove">
                                <img class="uk-width-1-1" src="<?php echo base_url(); ?>assets/img/website/gmb_cara_deposito.png">
                            </div>
                            <div class="uk-width-3-4@s uk-text-right uk-float-left">
                                <ul class="poppins-regular uk-list uk-list-large uk-padding-remove uk-margin-remove">
                                    <li uk-grid>
                                        <div
                                            class="uk-width-expand uk-padding-small uk-padding-remove-vertical uk-padding-remove-left">
                                            Klik Dasboard atau menu Order Baru,</div>
                                        <div class="uk-padding-remove uk-margin-remove"><img
                                                src="<?php echo base_url(); ?>assets/img/website/list-cara-transaksi.png"></div>
                                    </li>
                                    <li uk-grid>
                                        <div
                                            class="uk-width-expand uk-padding-small uk-padding-remove-vertical uk-padding-remove-left">
                                            Pilih Kategori, pilih Produk/Layanan,</div>
                                        <div class="uk-padding-remove uk-margin-remove"><img
                                                src="<?php echo base_url(); ?>assets/img/website/list-cara-transaksi.png"></div>
                                    </li>
                                    <li uk-grid>
                                        <div
                                            class="uk-width-expand uk-padding-small uk-padding-remove-vertical uk-padding-remove-left">
                                            Lalu klik Order. Setelah itu akan muncul status order, Anda juga bisa
                                            melihat informasi pemesanan pada menu Riwayat
                                            Order.</div>
                                        <div class="uk-padding-remove uk-margin-remove"><img
                                                src="<?php echo base_url(); ?>assets/img/website/list-cara-transaksi.png"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo uk-width-1-1 uk-padding uk-margin-remove">
                <div class="uk-width-1-1 uk-padding uk-margin-remove">
                    <div class="uk-position-relative uk-light uk-border-rounded uk-card-primary"
                        uk-slideshow="ratio: 15:3; min-height: 180; max-height: 200">

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
        </div>