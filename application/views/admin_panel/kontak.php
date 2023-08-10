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
                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                        <div class="uk-width-5-6 uk-padding-remove uk-margin-medium-top poppins-medium">
                            <hr>
                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove">
                                <h5 class="uk-padding-remove uk-margin-remove uk-text-center poppins-medium">Konfigurasi</h5>
                            </div>
                            <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin_panel/kontak/update_saldo">
                                    <input type="hidden" value="0" name="type">
                                <div class="uk-grid-small">
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">Min Saldo Pertama Untuk Transaksi</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="text" name="saldo" value="<?php echo $min_saldo['value']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <div class="uk-form-controls">
                                                <input class="uk-button uk-button-primary uk-border-rounded" id="form-stacked-text" type="submit" value="Update">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove">
                                <h5 class="uk-padding-remove uk-margin-remove uk-text-center poppins-medium">Logo Website</h5>
                            </div>
                            <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin_panel/kontak/logo">
                                    <input type="hidden" value="0" name="type">
                                <div class="uk-grid-small">
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">logo</label>
                                            <div class="uk-form-controls">
                                                <div uk-form-custom="target: true">
                                                    <input type="file" name="logo">
                                                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                                                </div>
                                            </div>
                                            <div class="uk-form-controls">
                                                <img style="height: 100px" src="<?php echo base_url(); ?>assets/img/website/<?php echo $logo['value']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">logo dengan teks</label>
                                            <div class="uk-form-controls">
                                                <div uk-form-custom="target: true">
                                                    <input type="file" name="logo_1">
                                                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                                                </div>
                                            </div>
                                            <div class="uk-form-controls">
                                                <img style="height: 100px" src="<?php echo base_url(); ?>assets/img/website/<?php echo $logo_1['value']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">logo 1x1</label>
                                            <div class="uk-form-controls">
                                                <div uk-form-custom="target: true">
                                                    <input type="file" name="logo_2">
                                                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                                                </div>
                                            </div>
                                            <div class="uk-form-controls">
                                                <img style="height: 100px" src="<?php echo base_url(); ?>assets/img/website/<?php echo $logo_2['value']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <div class="uk-form-controls">
                                                <input class="uk-button uk-button-primary uk-border-rounded" id="form-stacked-text" type="submit" value="Update">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                                <h5 class="uk-padding-remove uk-margin-remove uk-text-center poppins-medium">Footer Web Pengguna</h5>
                            </div>
                            <form method="POST" action="<?php echo base_url(); ?>admin_panel/kontak/update">
                                <div>
                                    <input type="hidden" value="1" name="type">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Alamat</label>
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon"><span class="iconify" data-icon="bx:bxs-map" data-inline="false"></span></span>
                                            <textarea class="uk-input uk-width-1-1 uk-border-rounded" row='3' name="value[]"><?php echo $alamat['value']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon"><span class="iconify" data-icon="carbon:email" data-inline="false"></span></span>
                                            <input class="uk-input uk-width-1-1" type="text" name="value[]" value="<?php echo $email['value']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Hotline Kami</label>
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon"><span class="iconify" data-icon="bi:telephone" data-inline="false"></span></span>
                                            <input class="uk-input uk-width-1-1" type="text" name="value[]" value="<?php echo $hotline['value']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <div class="uk-form-controls">
                                                <input class="uk-button uk-button-primary uk-border-rounded" id="form-stacked-text" type="submit"
                                                    value="Update">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form method="POST" action="<?php echo base_url(); ?>admin_panel/kontak/update">
                                <div>
                                    <input type="hidden" value="1" name="type">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Alamat</label>
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon"><span class="iconify" data-icon="bx:bxs-map" data-inline="false"></span></span>
                                            <textarea class="uk-input uk-width-1-1 uk-border-rounded" row='3' name="value[]"><?php echo $alamat['value']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon"><span class="iconify" data-icon="carbon:email" data-inline="false"></span></span>
                                            <input class="uk-input uk-width-1-1" type="text" name="value[]" value="<?php echo $email['value']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Hotline Kami</label>
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon"><span class="iconify" data-icon="bi:telephone" data-inline="false"></span></span>
                                            <input class="uk-input uk-width-1-1" type="text" name="value[]" value="<?php echo $hotline['value']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <div class="uk-form-controls">
                                                <input class="uk-button uk-button-primary uk-border-rounded" id="form-stacked-text" type="submit"
                                                    value="Update">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>