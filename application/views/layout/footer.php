
        <div class="footer uk-width-1-1 uk-padding uk-margin-remove">
            <div class="uk-width-1-1 uk-padding uk-padding-remove-vertical uk-margin-remove" uk-grid>
                <div class="uk-width-1-1 uk-padding-small uk-padding-remove-vertical uk-margin-remove">
                    <h4 class="poppins-bold uk-padding-remove uk-margin-remove">Hubungi Kami</h4>
                    <p class="poppins-regular uk-padding-remove uk-margin-remove">
                        Jika ada pertanyaan, Pengaduan, Kritik, dan Saran silahkan kirimkan pesan Anda melalui form di bawah ini.
                    </p>
                </div>
                <?php
                $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                $uri_segments = explode('/', $uri_path);
                ?>
                <div id="hubungi-kami" class="hubungi-kami uk-width-3-4@s uk-padding-small uk-padding-remove-vertical uk-margin-medium-top">
                    <form class="uk-grid-small uk-margin-small-top uk-width-3-4@s" method="POST" action="<?php echo base_url(); ?>home/pesan" uk-grid>
                        <input type="hidden" name="url" value="<?php echo $uri_segments[2]; ?>">
                        <div class="uk-width-1-2@s">
                            <input class="uk-input poppins-regular color-white" type="text" name="nama" placeholder="Masukkan Nama Anda">
                        </div>
                        <div class="uk-width-1-2@s">
                            <input class="uk-input poppins-regular color-white" type="text" name="no_telp" placeholder="Masukkan Nomor Handphone">
                        </div>
                        <div class="uk-width-1-2@s">
                            <input class="uk-input poppins-regular color-white" type="text" name="subject" placeholder="Masukkan Subject">
                        </div>
                        <div class="uk-width-1-2@s">
                            <input class="uk-input poppins-regular color-white" type="text" name="email" placeholder="Masukkan Alamat Email">
                        </div>
                        <div class="uk-width-1-2@s">
                            <input class="uk-input poppins-regular color-white" type="text" name="pesan" placeholder="Masukkan Pesan">
                        </div>
                        <div class="uk-width-1-2@s">
                            <button class="uk-button uk-button-primary uk-border-rounded" type="submit">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
                <div class="alamat uk-width-1-4@s uk-padding-small uk-padding-remove-vertical uk-margin-medium-top">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-remove" uk-grid>
                        <div class="uk-width-auto uk-padding-remove uk-margin-remove">
                            <span class="iconify" data-icon="entypo:location-pin" data-inline="false" data-width="20"></span>
                        </div>
                        <div class="uk-width-expand uk-padding-remove uk-margin-small-left">
                            <span class="head poppins-bold">Alamat</span>
                            <p class="uk-padding-remove uk-margin-remove poppins-regular"><?php echo $alamat['value']; ?></p>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-padding-small uk-margin-remove" uk-grid>
                        <div class="uk-width-auto uk-padding-remove uk-margin-remove">
                            <span class="iconify" data-icon="carbon:email" data-inline="false" data-width="20"></span>
                        </div>
                        <div class="uk-width-expand uk-padding-remove uk-margin-small-left">
                            <span class="head poppins-bold">Email</span>
                            <p class="uk-padding-remove uk-margin-remove poppins-regular"><?php echo $email['value']; ?></p>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-padding-small uk-margin-remove" uk-grid>
                        <div class="uk-width-auto uk-padding-remove uk-margin-remove">
                            <span class="iconify" data-icon="bi:telephone" data-inline="false" data-width="20"></span>
                        </div>
                        <div class="uk-width-expand uk-padding-remove uk-margin-small-left">
                            <span class="head poppins-bold">Hotline Kami</span>
                            <p class="uk-padding-remove uk-margin-remove poppins-regular"><?php echo $hotline['value']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="tentang-ppob uk-width-1-3@s uk-padding-small uk-margin-medium-top">
                    <h5 class="color-white poppins-semi-bold">Tentang PPOB</h5>
                    <p class="poppins-regular color-white">
                        Sebuah Platform Bisnis Yang Menyediakan Berbagai Layanan MultI Media Marketing Yang Bergerak Terutama Di Indonesia.
                        Kamipun Juga Menyediakan Pembelian Pulsa & PPOB Seperti Pulsa All Operator, Paket Data, Saldo Gojek/Grab, Token PLN, All
                        Voucher Game Online, Dll.
                    </p>
                </div>
                <div class="informasi uk-width-1-6@s uk-padding-small uk-margin-medium-top">
                    <h5 class="color-white poppins-semi-bold">Informasi</h5>
                    <ul class="uk-padding-small uk-padding-remove-vertical uk-padding-remove-right poppins-regular">
                        <li>Cara Isi Saldo</li>
                        <li>Cara Transaksi</li>
                        <li>Pembayaran</li>
                        <li>Layanan Promo</li>
                    </ul>
                </div>
                <div class="kontak-admin uk-width-1-6@s uk-padding-small uk-margin-medium-top">
                    <h5 class="color-white poppins-semi-bold">Kontak Admin</h5>
                    <ul class="uk-padding-remove poppins-regular">
                        <li><a href="<?php echo $kontak_wa_comp['value']; ?>"><span class="iconify" data-icon="dashicons:whatsapp" data-inline="false"></span> Admin Komplain</a></li>
                        <li><a href="<?php echo $kontak_wa_web['value']; ?>"><span class="iconify" data-icon="dashicons:whatsapp" data-inline="false"></span> Admin WEB</a></li>
                    </ul>
                </div>
                <div class="sosial-media uk-width-1-6@s uk-padding-small uk-margin-medium-top">
                    <h5 class="color-white poppins-semi-bold">Sosial Media</h5>
                    <p class="poppins-regular color-white">
                        <a href="#" class="twitter"><span class="iconify" data-icon="akar-icons:twitter-fill" data-inline="false" data-height="20"></span></a>
                        <a href="#" class="gmail"><span class="iconify" data-icon="cib:gmail" data-inline="false" data-height="20"></span></a>
                        <a href="#" class="facebook"><span class="iconify" data-icon="ant-design:facebook-filled" data-inline="false" data-height="20"></span></a>
                        <a href="#" class="instagram"><span class="iconify" data-icon="ant-design:instagram-filled" data-inline="false" data-height="20"></span></a>
                    </p>
                </div>
                <div class="uk-width-1-6@s uk-padding-small uk-margin-medium-top">
                    <h5 class="color-white poppins-semi-bold">Berlangganan</h5>
                    <form>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: link"></a>
                                <input class="uk-input" type="text">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/60dfcc7a649e0a0a5cca4d03/1f9l3dfsk';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    
</body>

</html>