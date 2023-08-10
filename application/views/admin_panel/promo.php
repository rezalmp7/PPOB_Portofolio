
                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-child-width-1-3@l uk-child-width-1-2@s uk-grid-match uk-padding-small uk-margin-remove" uk-grid>
                        <div class="uk-padding-small uk-margin-remove">
                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                <a class="uk-button button-success uk-width-1-1" href="<?php echo base_url(); ?>admin_panel/promo/tambah">Tambah</a>
                            </div>
                        </div>
                        <?php
                        foreach ($promo as $a) {
                            if($a['type'] == 1)
                            {
                        ?>
                        <div class="uk-padding-small uk-margin-remove">
                            <div class="uk-card uk-card-default uk-padding-small uk-margin-remove">
                                <h5 class="uk-text-center poppins-semi-bold"><?php echo $a['nama']; ?></h5>
                                <div class="img-promo uk-width-1-1 uk-padding-remove uk-margin-remove">
                                    <div class="uk-inline uk-margin">
                                        <img class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-border-rounded" src="<?php echo base_url(); ?>assets/img/website/promo/<?php echo $a['gambar']; ?>">
                                    </div>
                                </div>
                                <div class="deskripsi uk-width-1-1 uk-padding-remove uk-margin-remove">
                                    <div class="uk-width-1-1 uk-child-width-1-2 uk-padding-remove uk-margin-remove" uk-grid>
                                        <div class="uk-padding-small uk-margin-remove">
                                            <h5 class="poppins-medium uk-padding-remove uk-margin-remove">Mendapat Coin</h5>
                                            <div class="bonus uk-padding-remove uk-margin-remove">Rp. <?php echo number_format($a['coin'],0,',','.'); ?></div>
                                        </div>
                                        <div class="uk-padding-small uk-margin-remove">
                                            <a href="<?php echo base_url(); ?>admin_panel/promo/edit?id=<?php echo $a['id']; ?>" class="uk-width-1-1 uk-margin-small-bottom uk-border-rounded uk-button uk-button-primary text-capitalize poppins-medium">Update</a>
                                            <?php
                                            if($a['status'] == 1)
                                            {
                                            ?>
                                            <a href="<?php echo base_url(); ?>admin_panel/promo/switch?id=<?php echo $a['id']; ?>&status=<?php echo $a['status']; ?>" class="uk-width-1-1 uk-margin-small-bottom uk-border-rounded uk-button button-success text-capitalize poppins-medium">Aktif</a>
                                            <?php
                                            }
                                            else {
                                            ?>
                                            <a href="<?php echo base_url(); ?>admin_panel/promo/switch?id=<?php echo $a['id']; ?>&status=<?php echo $a['status']; ?>" class="uk-width-1-1 uk-margin-small-bottom uk-border-rounded uk-button button-danger text-capitalize poppins-medium">Tidak Aktif</a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                            else
                            {
                        ?>
                        <div class="uk-padding-small uk-margin-remove">
                            <div class="uk-card uk-card-default uk-padding-small uk-margin-remove">
                                <h5 class="uk-text-center poppins-semi-bold"><?php echo $a['nama']; ?></h5>
                                <div class="img-promo uk-width-1-1 uk-padding-remove uk-margin-remove">
                                    <div class="uk-inline uk-margin">
                                        <img class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-border-rounded"
                                            src="<?php echo base_url(); ?>assets/img/panel_user/promo/promo_1.png">
                                        <div class="uk-position-small uk-position-bottom-right uk-overlay uk-padding-remove uk-margin-remove color-white">
                                        </div>
                                    </div>
                                </div>
                                <div class="deskripsi uk-width-1-1 uk-padding-remove uk-margin-remove">
                                    <div class="uk-width-1-1 uk-child-width-1-2 uk-padding-remove uk-margin-remove" uk-grid>
                                        <div class="uk-padding-small uk-margin-remove">
                                            <h5 class="poppins-medium uk-padding-remove uk-margin-remove">Syarat Minimal</h5>
                                            <div class="bonus uk-padding-remove uk-margin-remove">Rp. <?php echo number_format($a['syarat'],0,',','.'); ?></div>
                                        </div>
                                        <div class="uk-padding-small uk-margin-remove">
                                            <h5 class="poppins-medium uk-padding-remove uk-margin-remove">Mendapat Coin</h5>
                                            <div class="bonus uk-padding-remove uk-margin-remove">Rp. <?php echo number_format($a['coin'],0,',','.'); ?></div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-child-width-1-2 uk-padding-small uk-margin-remove" uk-grid>
                                        <div class="uk-padding-small uk-padding-remove-left uk-padding-remove-vertical">
                                            <a href="<?php echo base_url(); ?>admin_panel/promo/edit?id=<?php echo $a['id']; ?>" class="uk-width-1-1 uk-margin-small-bottom uk-border-rounded uk-button uk-button-primary text-capitalize poppins-medium">Update</a>
                                        </div>
                                        <div class="uk-padding-small uk-padding-remove-right uk-padding-remove-vertical">
                                            <?php
                                            if($a['status'] == 1)
                                            {
                                            ?>
                                            <a href="<?php echo base_url(); ?>admin_panel/promo/switch?id=<?php echo $a['id']; ?>&status=<?php echo $a['status']; ?>" class="uk-width-1-1 uk-margin-small-bottom uk-border-rounded uk-button button-success text-capitalize poppins-medium">Aktif</a>
                                            <?php
                                            }
                                            else {
                                            ?>
                                            <a href="<?php echo base_url(); ?>admin_panel/promo/switch?id=<?php echo $a['id']; ?>&status=<?php echo $a['status']; ?>" class="uk-width-1-1 uk-margin-small-bottom uk-border-rounded uk-button button-danger text-capitalize poppins-medium">Tidak Aktif</a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>