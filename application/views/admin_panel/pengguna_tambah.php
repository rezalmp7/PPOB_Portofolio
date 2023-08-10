                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                            <div class="uk-width-5-6 uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-remove">
                                <h4 class="poppins-medium">Tambah Pengguna</h4>
                                <form class="uk-form-stacked poppins-regular" method="POST" action="<?php echo base_url(); ?>admin_panel/pengguna/tambah_aksi">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">ID</label>
                                        <div class="uk-form-controls">
                                            <?php echo $id; ?>
                                            <input class="uk-input" id="form-stacked-text" type="hidden" value="<?php echo $id; ?>" name="id">
                                        </div>
                                    </div>
                                    <div class="uk-grid-small uk-padding-remove uk-margin-remove" uk-grid>
                                        <div class="uk-margin-remove uk-padding-small-right uk-width-1-2">
                                            <label class="uk-form-label" for="form-stacked-text">Nama Depan</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="text" name="nama_depan" placeholder="Some text...">
                                            </div>
                                        </div>
                                        <div class="uk-margin-remove uk-padding-small-left uk-width-1-2">
                                            <label class="uk-form-label" for="form-stacked-text">Nama Belakang</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="text" name="nama_belakang" placeholder="Some text...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">No Telephone</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="number" name="no_telp">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Nama Pengguna</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" name="username">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">PIN</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="number" name="pin">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-form-label">Status</div>
                                        <div class="uk-form-controls">
                                            <label><input class="uk-radio" type="radio" name="status" value="0"> Block</label>
                                            <label><input class="uk-radio" type="radio" name="status" value="1"> Register</label><br>
                                            <label><input class="uk-radio" type="radio" name="status" value="2"> Active</label><br>
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Password</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="password" name="password">
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