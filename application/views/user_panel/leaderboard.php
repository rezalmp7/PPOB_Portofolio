
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                <div class="uk-width-5-6@s">
                    <h3 class="uk-text-center open-sans-bold uk-margin-remove uk-padding-remove">Leaderboad</h3>
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-text-center"><span
                            class="line uk-display-block uk-padding-remove uk-margin-auto"></span></div>
                    <div class="content uk-width-1-1 uk-child-width-1-2@s uk-padding-remove uk-margin-medium-top" uk-grid>
                        <div class="uk-padding-small">
                            <h5 class="uk-padding-remove uk-margin-remove uk-text-center poppins-semi-bold">5 Top Pesanan Tertinggi</h5>
                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                <?php
                                $no = 1;
                                foreach ($pesanan as $a) {
                                    if($no > 5)
                                    {
                                        break;
                                    }
                                ?>
                                <div class="akun uk-border-rounded uk-width-1-1 uk-padding-small uk-margin-small-top">
                                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove poppins-medium" uk-grid>
                                        <div class="uk-width-1-6">
                                            <?php echo $no; ?>
                                        </div>
                                        <div class="uk-width-1-6">
                                            <div class="uk-width-1-1 uk-rounded-circle uk-background-cover" style="width:30px; height: 30px; background-image: url('<?php echo base_url(); ?>assets/img/panel_user/user/pp_1.png');"></div>
                                        </div>
                                        <div class="uk-width-1-3">
                                            <?php echo $a['nama']; ?>
                                        </div>
                                        <div class="uk-width-1-3">
                                            <?php echo 'Rp '.number_format($a['nominal'],0,',','.'); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $no++;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="uk-padding-small">
                            <h5 class="uk-padding-remove uk-margin-remove uk-text-center poppins-semi-bold">5 Top Deposit Tertinggi</h5>
                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                <?php
                                $no = 1;
                                foreach ($deposit as $b) {
                                    if($no > 5)
                                    {
                                        break;
                                    }
                                ?>
                                <div class="akun uk-border-rounded uk-width-1-1 uk-padding-small uk-margin-small-top">
                                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove color-black poppins-medium" uk-grid>
                                        <div class="uk-width-1-6">
                                            <?php echo $no; ?>
                                        </div>
                                        <div class="uk-width-1-6">
                                            <div class="uk-width-1-1 uk-rounded-circle uk-background-cover"
                                                style="width:30px; height: 30px; background-image: url('<?php echo base_url(); ?>assets/img/panel_user/user/pp_1.png');"></div>
                                        </div>
                                        <div class="uk-width-1-3">
                                            <?php echo $b['nama']; ?>
                                        </div>
                                        <div class="uk-width-1-3">
                                            <?php echo 'Rp '.number_format($b['nominal'],0,',','.'); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $no++;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>