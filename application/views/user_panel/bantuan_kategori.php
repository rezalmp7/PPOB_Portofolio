
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-1 uk-padding uk-padding-remove-top uk-clearfix uk-margin-remove">
                <div class="uk-width-1-2@s uk-padding-remove uk-margin-remove uk-float-left">
                    <ul class="uk-breadcrumb">
                        <li><a href="<?php echo base_url(); ?>user_panel/bantuan">Bantuan</a></li>
                        <li><span><?php echo $kategori; ?></span></li>
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
                <div class="uk-width-2-3@l uk-width-5-6@s">
                    <div class="list uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                        <div class="uk-padding-small uk-width-2-5@s uk-margin-remove">
                            <button class="dropdown uk-width-1-1 uk-border-rounded uk-text-left text-capitalize uk-clearfix uk-button uk-button-default" type="button" uk-toggle="target: #toggle-animation-multiple; animation:  uk-animation-slide-top, uk-animation-slide-top"><?php echo $kategori; ?><span class="uk-float-right"><span class="iconify" data-icon="dashicons:arrow-down-alt2" data-inline="false"></span></span></button>
                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-overflow-hidden">
                                <div id="toggle-animation-multiple" class="uk-margin-small">
                                    <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                                        <?php
                                        foreach ($bantuan as $a) {
                                        ?>
                                        <li class="uk-padding-small uk-padding-remove-horizontal"><a class="uk-display-block text-capitalize" href="#"><?php echo $a['judul']; ?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-padding-small uk-width-3-5@s uk-margin-remove">
                            <ul id="component-tab-left" class="uk-switcher">
                                <?php
                                foreach ($bantuan as $b) {
                                ?>
                                <li>
                                    <h3 class="poppins-medium"><?php echo $b['judul']; ?></h3>
                                    <p>
                                        <?php echo $b['content']; ?>
                                    </p>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>