
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-1 uk-padding uk-padding-remove-top uk-clearfix uk-margin-remove">
                <div class="uk-width-1-2@s uk-padding-remove uk-margin-remove uk-float-left">
                    <ul class="uk-breadcrumb">
                        <li><a href="<?php echo base_url(); ?>user_panel/bantuan">Bantuan</a></li>
                        <li><a href="<?php echo base_url(); ?>user_panel/bantuan_kategori?kat=<?php echo $bantuan['kategori']; ?>"><?php echo $bantuan['kategori']; ?></a></li>
                        <li><span>Bagaimana Cara Ganti Kata Sandi?</span></li>
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
            <div class="content uk-width-1-1 uk-flex-center uk-padding-remove uk-margin-remove" uk-grid>
                <div class="uk-width-2-3@l uk-width-5-6@s uk-margin-remove uk-padding-remove">
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-large-bottom">
                        <h4 class="poppins-semi-bold"><?php echo $bantuan['judul']; ?><span class="line uk-display-block"></span></h4>
                        <p class="color-black">
                            <?php echo $bantuan['content']; ?>
                        </p>
                    </div>
                    <hr>
                    <div class="pertanyaan-terkait uk-padding-small uk-padding-remove-horizontal">
                        <h4 class="poppins-medium">Pertanyaan Terkait</h4>
                        <?php
                        foreach ($kategori as $a) {
                            if($a['id'] == $bantuan['id'])
                            {
                                continue;
                            }
                        ?>
                        <a href="<?php echo base_url(); ?>user_panel/bantuan_detail?id=<?php echo $a['id']; ?>"><?php echo $a['judul']; ?></a><br>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>