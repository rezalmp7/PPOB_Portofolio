                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                            <div class="uk-width-5-6 uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-remove">
                                <h4 class="poppins-medium">Edit Produk Spesial</h4>
                                <form class="uk-form-stacked poppins-regular" method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin_panel/spesial/edit_aksi">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">ID</label>
                                        <div class="uk-form-controls">
                                            <?php echo $produk['id']; ?>
                                            <input class="uk-input" id="form-stacked-text" type="hidden" name="id" value="<?php echo $produk['id']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Nama</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" name="nama" value="<?php echo $produk['nama']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Ganti Icon</label>
                                        <div uk-form-custom="target: true">
                                            <input type="file" name="icon">
                                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled><br>
                                            <input type="hidden" name="icon_lama" value="<?php echo $produk['icon']; ?>">
                                            <img style="height: 70px;" class="uk-margin-small-top" src="<?php echo base_url(); ?>assets/img/icon/produk/<?php echo $produk['icon']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Harga</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="number" name="harga" value="<?php echo $produk['harga']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Diskon</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="number" name="diskon" value="<?php echo $produk['diskon']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Data Yang Dibutuhkan <span class="iconify" data-icon="bx:bxs-help-circle" data-inline="false" uk-tooltip="title: Contoh: No Telephone; pos: right"></span></label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" name="data" placeholder="No Telephone" value="<?php echo $produk['data']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <input class="uk-button button-warning uk-border-rounded" id="form-stacked-text" type="Submit" value="Edit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>