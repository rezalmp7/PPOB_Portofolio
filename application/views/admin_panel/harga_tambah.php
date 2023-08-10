                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                            <div class="uk-width-5-6 uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-remove">
                                <h4 class="poppins-medium">Tambah Harga</h4>
                                <form class="uk-form-stacked poppins-regular" method="POST" action="<?php echo base_url(); ?>admin_panel/harga/tambah_aksi">
                                    <div class="uk-grid-small" uk-grid>
                                        <div class="uk-width-1-2@s">
                                            <label class="uk-form-label" for="form-horizontal-text">Harga Awal</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-horizontal-text" type="number" name="harga_awal">
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2@s">
                                            <label class="uk-form-label" for="form-horizontal-text">Harga Akhir</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-horizontal-text" type="number" name="harga_akhir">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-horizontal-text">Keuntungan</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-horizontal-text" name="keuntungan" type="number">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <input class="uk-button button-success uk-border-rounded" id="form-stacked-text" type="submit" value="Tambah">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>