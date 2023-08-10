
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-1 uk-padding uk-padding-remove-top uk-clearfix uk-margin-remove">
                <div class="uk-width-1-2@s uk-padding-remove uk-margin-remove uk-float-left">
                    <ul class="uk-breadcrumb">
                        <li><span>Bantuan</span></li>
                    </ul>
                </div>
                <div class="uk-width-1-2@s uk-width-1-4@l uk-padding-remove uk-margin-remove uk-float-right">
                    <form class="uk-width-1-1">
                        <div class="uk-margin uk-width-1-1">
                            <div class="uk-inline uk-width-1-1">
                                <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: search"></a>
                                <input class="uk-input uk-width-1-1 uk-border-rounded" name="kata_kunci"
                                    placeholder="Kata Kunci ..." type="text">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="uk-width-1-1 uk-flex-center uk-padding-remove uk-margin-remove" uk-grid>
                <div class="uk-width-2-3@l uk-width-5-6@s uk-padding-small uk-margin-remove">
                    <h4 class="poppins-semi-bold">Bantuan<span class="line uk-display-block"></span></h4>
                    <p class="color-black">Pertanyaan Populer</p>
                    <div class="list uk-width-1-1 uk-child-width-1-2@s uk-padding-remove uk-margin-remove" uk-grid>
                        <div class="uk-padding-small uk-margin-remove">
                            <ul>
                                <?php
                                
                                for($i = 0;$i < 4; $i++) { 
                                ?>
                                <li class="uk-padding uk-padding-remove-top uk-padding-remove-horizontal"><a href="<?php echo base_url(); ?>user_panel/bantuan_detail?id=<?php echo $bantuan[$i]['id']; ?>"><?php echo $bantuan[$i]['judul']; ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="uk-padding-small uk-margin-remove">
                            <ul>
                                <?php
                                for($i = 4;$i < 8; $i++) { 
                                ?>
                                <li class="uk-padding uk-padding-remove-top uk-padding-remove-horizontal"><a href="<?php echo base_url(); ?>user_panel/bantuan_detail?id=<?php echo $bantuan[$i]['id']; ?>"><?php echo $bantuan[$i]['judul']; ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="bantuan-bottom uk-width-1-1 uk-padding-remove uk-margin-remove">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                            <div class="uk-width-5-6@l uk-padding-remove uk-margin-remove">
                                <div class="uk-width-1-1 uk-child-width-1-6@l uk-child-width-1-4@m uk-child-width-1-2 uk-padding-remove uk-margin-remove uk-grid-match" uk-grid>
                                    <div class="uk-padding-small uk-margin-remove">
                                        <a href="#" class="uk-border-rounded uk-display-block">
                                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-center">
                                                <img src="<?php echo base_url(); ?>assets/img/panel_user/icon/bantuan-user.png"><br>
                                                <span>Akun</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="uk-padding-small uk-margin-remove">
                                        <a href="#" class="uk-border-rounded uk-display-block">
                                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-center">
                                                <img src="<?php echo base_url(); ?>assets/img/panel_user/icon/bantuan-keranjang.png"><br>
                                                <span>Keranjang</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="uk-padding-small uk-margin-remove">
                                        <a href="#" class="uk-border-rounded uk-display-block">
                                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-center">
                                                <img src="<?php echo base_url(); ?>assets/img/panel_user/icon/bantuan-coin.png"><br>
                                                <span>Koin</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="uk-padding-small uk-margin-remove">
                                        <a href="#" class="uk-border-rounded uk-display-block">
                                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-center">
                                                <img src="<?php echo base_url(); ?>assets/img/panel_user/icon/bantuan-isi-saldo.png"><br>
                                                <span>Isi Saldo</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="uk-padding-small uk-margin-remove">
                                        <a href="#" class="uk-border-rounded uk-display-block">
                                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-center">
                                                <img src="<?php echo base_url(); ?>assets/img/panel_user/icon/bantuan-penagambilan-dana.png"><br>
                                                <span>Pengambilan Dana</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="uk-padding-small uk-margin-remove">
                                        <a href="#" class="uk-border-rounded uk-display-block">
                                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-center">
                                                <img src="<?php echo base_url(); ?>assets/img/panel_user/icon/bantuan-status.png"><br>
                                                <span>Status</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>