
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                <div class="uk-width-5-6@l uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-grid-match" uk-grid>
                        <div class="uk-width-1-4 uk-padding-small uk-margin-remove">
                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-card uk-card-default uk-box-shadow-large uk-border-rounded">
                                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                    <div class="uk-width-auto@l uk-padding-small uk-padding-remove-right uk-padding-remove-bottom uk-margin-remove">
                                        <?php
                                        if($pengguna['photo'] != null)
                                        {
                                            $photo = $pengguna['photo'];
                                        }
                                        else {
                                            $photo = "pp_1.png";
                                        }
                                        ?>
                                        <div style="height: 70px; width: 70px; background-image: url('<?php echo base_url(); ?>assets/img/panel_user/user/<?php echo $photo; ?>');"
                                            class="uk-background-cover">
                                        </div>
                                    </div>
                                    <div class="uk-width-expand@s uk-padding-small uk-margin-remove uk-padding-remove-bottom">
                                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove poppins-medium color-black">
                                            <?php echo $pengguna['nama_depan']; ?> <span class="uk-text-success"><span class="iconify" data-icon="akar-icons:circle-check-fill" data-inline="false"></span></span>
                                        </div>
                                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove poppins-light color-black">
                                            Member
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-padding-remove uk-margin-small-top uk-margin-small-bottom">
                                    <div class="all-saldo uk-child-width-1-2@m uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                        <div class="coin uk-padding-small uk-margin-remove uk-text-center color-black">
                                            <div class="head open-sans-regular uk-text-small">Coin Anda</div>
                                            <span class="iconify" data-icon="akar-icons:coin" data-width="30" data-inline="false"></span>
                                            <div class="ncoin poppins-medium uk-margin-small-top">Rp. <?php echo number_format($pengguna['coin'],0,',','.'); ?></div>
                                        </div>
                                        <div class="wallet uk-padding-small uk-margin-remove uk-text-center color-black">
                                            <div class="head open-sans-regular uk-text-small">Saldo Anda</div>
                                            <span class="iconify" data-icon="jam:box" data-width="30" data-inline="false"></span>
                                            <div class="nwallet poppins-medium uk-margin-small-top">Rp. <?php echo number_format($pengguna['saldo'],0,',','.'); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-padding-small uk-margin-remove">
                                    <div class="uk-width-auto@m">
                                        <ul class="uk-tab-left uk-subnav-pill" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                                            <li><a href="#" class="poppins-regular text-capitalize color-black"><span class="iconify" data-icon="bx:bxs-user" data-inline="false"></span> Pengaturan Akun</a></li>
                                            <li><a href="#" class="poppins-regular text-capitalize color-black"><span class="iconify" data-icon="ant-design:lock-filled" data-inline="false"></span> Ganti Kata Sandi</a></li>
                                            <li><a href="#" class="poppins-regular text-capitalize color-black"><span class="iconify" data-icon="fa-solid:map-pin" data-inline="false"></span> Ganti PIN</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-3-4 uk-padding-small uk-margin-remove">
                            <div class="uk-width-1-1 uk-height-1-1 uk-padding-small uk-margin-remove uk-card uk-card-default uk-border-rounded uk-box-shadow-large">
                                <ul id="component-tab-left" class="uk-switcher">
                                    <li>
                                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                            <form method="POST" action="<?php echo base_url(); ?>user_panel/profil/update_profil" class="uk-width-1-1 uk-margin-remove uk-padding-remove">
                                                <div class="uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                                    <div class="uk-width-1-2@s uk-margin-remove uk-padding-remove">
                                                        <div class="uk-width-1-1 uk-child-width-1-2 uk-padding-remove uk-margin-remove" uk-grid>
                                                            <div class="uk-padding-remove uk-margin-remove">
                                                                <div class="uk-margin uk-margin-remove uk-padding-small uk-padding-remove-vertical uk-padding-remove-left">
                                                                    <label class="uk-form-label" for="form-stacked-text">Nama Depan</label>
                                                                    <div class="uk-form-controls">
                                                                        <input class="uk-input uk-border-rounded" id="form-stacked-text" type="text" name="nama_depan" value="<?php echo $pengguna['nama_depan']; ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="uk-padding-remove uk-margin-remove">
                                                                <div class="uk-margin uk-margin-remove uk-padding-small uk-padding-remove-vertical uk-padding-remove-left">
                                                                    <label class="uk-form-label" for="form-stacked-text">Nama Belakang</label>
                                                                    <div class="uk-form-controls">
                                                                        <input class="uk-input uk-border-rounded" id="form-stacked-text" type="text" name="nama_belakang" value="<?php echo $pengguna['nama_belakang']; ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label" for="form-stacked-text">Email</label>
                                                            <div class="uk-form-controls">
                                                                <div class="uk-inline uk-width-1-1">
                                                                    <span class="uk-form-icon">@</span>
                                                                    <input class="uk-input uk-width-1-1 uk-border-rounded" type="text" name="email" value="<?php echo $pengguna['email']; ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label" for="form-stacked-text">No Telephone</label>
                                                            <div class="uk-form-controls">
                                                                <div class="uk-inline uk-width-1-1">
                                                                    <span class="uk-form-icon">+62</span>
                                                                    <input class="uk-input uk-width-1-1 uk-border-rounded" type="text" name="no_telp" value="<?php echo $pengguna['no_telp']; ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label" for="form-stacked-text">Nama Pengguna</label>
                                                            <div class="uk-form-controls">
                                                                <div class="uk-inline uk-width-1-1">
                                                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                                                    <input class="uk-input uk-width-1-1 uk-border-rounded" type="text" name="username" value="<?php echo $pengguna['username']; ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-2@s">
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label" for="form-stacked-text">Isi Password Untuk Update</label>
                                                            <div class="uk-inline uk-width-1-1">
                                                                <a class="uk-form-icon uk-form-icon-flip" id="buttonShowPassword" onclick="showPassword()"><span class="iconify"
                                                                        data-icon="bx:bxs-show" data-inline="false"></span></a>
                                                                <input class="uk-input field-default" id="myInput" type="password" name="password" placeholder="Password..." required>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label" for="form-stacked-text">Isi PIN Untuk Update</label>
                                                            <div class="uk-form-controls">
                                                                <input class="uk-input uk-border-rounded" id="form-stacked-text" name="pin" type="text" required>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin uk-margin-remove uk-padding-small uk-padding-remove-left">
                                                            <input type="submit" class="uk-button button-primary uk-border-rounded" value="submit">
                                                            <button onClick="window.location.reload();" class="uk-button button-danger uk-border-rounded">Ulangi</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-width-1-1 uk-padding-small uk-margin-remove">
                                            <form method="POST" action="<?php echo base_url(); ?>user_panel/profil/change_password">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-text">Kata Sandi Lama</label>
                                                    <div class="uk-inline uk-width-1-1">
                                                        <a class="uk-form-icon uk-form-icon-flip" id="buttonShowPassword1" onclick="showPassword1()"><span class="iconify"
                                                            data-icon="bx:bxs-show" data-inline="false"></span></a>
                                                        <input class="uk-input field-default" id="myInput1" type="password" name="password_lama" placeholder="Password Lama..." required>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-text">Kata Sandi Baru</label>
                                                    <div class="uk-inline uk-width-1-1">
                                                        <a class="uk-form-icon uk-form-icon-flip" id="buttonShowPassword2" onclick="showPassword2()"><span class="iconify"
                                                            data-icon="bx:bxs-show" data-inline="false"></span></a>
                                                        <input class="uk-input field-default" id="myInput2" type="password" name="password_baru" placeholder="Password Baru..." required>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-text">Konfirmasi Kata Sandi Baru</label>
                                                    <div class="uk-inline uk-width-1-1">
                                                        <a class="uk-form-icon uk-form-icon-flip" id="buttonShowPassword3" onclick="showPassword3()"><span class="iconify"
                                                            data-icon="bx:bxs-show" data-inline="false"></span></a>
                                                        <input class="uk-input field-default" id="myInput3" type="password" name="konfirmasi_baru" placeholder="Konfirmasi Password Baru..." required>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <input type="submit" class="uk-button button-primary uk-border-rounded" value="submit">
                                                    <button onClick="window.location.reload();" class="uk-button button-danger uk-border-rounded">Ulangi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-width-1-1 uk-padding-small uk-margin-remove">
                                            <form method="POST" action="<?php echo base_url(); ?>user_panel/profil/change_pin">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-text">PIN Lama</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" id="form-stacked-text" type="text" name="pin_lama">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-text">PIN Baru</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" id="form-stacked-text" type="text" name="pin_baru">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-text">Konfirmasi PIN Baru</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" id="form-stacked-text" type="text" name="konfirmasi_pin">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <input type="submit" class="uk-button button-primary uk-border-rounded" value="submit">
                                                    <button onClick="window.location.reload();"
                                                        class="uk-button button-danger uk-border-rounded">Ulangi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>