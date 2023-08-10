                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                            <div class="uk-width-5-6 uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-remove">
                                <h4 class="poppins-medium">Edit Promo</h4>
                                <form class="uk-form-stacked poppins-regular" method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin_panel/promo/edit_aksi">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">ID</label>
                                        <div class="uk-form-controls">
                                            <?php echo $promo['id']; ?>
                                            <input type="hidden" name="status" value="<?php echo $promo['status']; ?>">
                                            <input class="uk-input" id="form-stacked-text" type="hidden" name="id" value="<?php echo $promo['id']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Nama</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" name="nama" value="<?php echo $promo['nama']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Ganti Gambar</label>
                                        <div uk-form-custom="target: true">
                                            <input type="hidden" name="foto_lama" value="<?php echo $promo['gambar']; ?>">
                                            <input type="file" name="foto">
                                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                                        </div>
                                        <div>
                                            <small class="uk-text-danger">1500px X 400px</small>
                                        </div>
                                        <div>
                                            <img style="height:100px" src="<?php echo base_url(); ?>assets/img/website/promo/<?php echo $promo['gambar']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Type</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="type" id="type_promo" onchange="change_type_promo()">
                                                <option value="" selected>-- Pilih Type Promo --</option>
                                                <option value="1" <?php if($promo['type'] == 1) echo 'selected'; ?>>Semua Transaksi</option>
                                                <option value="2" <?php if($promo['type'] == 2) echo 'selected'; ?>>Minimal Transaksi</option>
                                                <option value="3" <?php if($promo['type'] == 3) echo 'selected'; ?>>Minimal Topup</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin" id="syarat_type_promo">
                                        <label class="uk-form-label" for="form-stacked-text">Syarat (Minimal)</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="number" value="<?php echo $promo['syarat']; ?>" name="syarat">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Coin</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="number" name="coin" value="<?php echo $promo['coin']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <input class="uk-button button-success uk-border-rounded" id="form-stacked-text" type="Submit" value="Tambah">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>