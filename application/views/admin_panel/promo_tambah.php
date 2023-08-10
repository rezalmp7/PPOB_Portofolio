                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                            <div class="uk-width-5-6 uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-remove">
                                <h4 class="poppins-medium">Tambah Promo</h4>
                                <form class="uk-form-stacked poppins-regular" method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin_panel/promo/tambah_aksi">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">ID</label>
                                        <div class="uk-form-controls">
                                            <?php echo $id; ?>
                                            <input class="uk-input" id="form-stacked-text" type="hidden" name="id" value="<?php echo $id; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Nama</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" name="nama" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Gambar</label>
                                        <div uk-form-custom="target: true">
                                            <input type="file" name="foto" required>
                                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                                        </div>
                                        <div>
                                            <small class="uk-text-danger">1500px X 400px</small>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Type</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="type" id="type_promo" onchange="change_type_promo()">
                                                <option value="" selected>-- Pilih Type Promo --</option>
                                                <option value="1">Semua Transaksi</option>
                                                <option value="2">Minimal Transaksi</option>
                                                <option value="3">Minimal Topup</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin" id="syarat_type_promo">
                                        <label class="uk-form-label" for="form-stacked-text">Syarat (Minimal)</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="number" name="syarat">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Coin</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="number" name="coin" required>
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