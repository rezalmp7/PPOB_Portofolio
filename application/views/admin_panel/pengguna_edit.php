                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                            <div class="uk-width-5-6 uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-remove">
                                <h4 class="poppins-medium">Edit Pengguna</h4>
                                <form class="uk-form-stacked poppins-regular" method="POST" action="<?php echo base_url(); ?>admin_panel/pengguna/edit_aksi">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">ID</label>
                                        <div class="uk-form-controls">
                                            <?php echo $pengguna['id']; ?>
                                            <input class="uk-input" id="form-stacked-text" type="hidden" name="id" value="<?php echo $pengguna['id']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-grid-small uk-padding-remove uk-margin-remove" uk-grid>
                                        <div class="uk-margin-remove uk-padding-small-right uk-width-1-2">
                                            <label class="uk-form-label" for="form-stacked-text">Nama Depan</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="text" name="nama_depan" value="<?php echo $pengguna['nama_depan']; ?>" placeholder="Some text...">
                                            </div>
                                        </div>
                                        <div class="uk-margin-remove uk-padding-small-left uk-width-1-2">
                                            <label class="uk-form-label" for="form-stacked-text">Nama Belakang</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="text" name="nama_belakang" value="<?php echo $pengguna['nama_belakang']; ?>" placeholder="Some text...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="email" name="email" value="<?php echo $pengguna['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">No Telephone</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="number" name="no_telp" value="<?php echo $pengguna['no_telp']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Nama Pengguna</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" name="username" value="<?php echo $pengguna['username']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">PIN</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="number" name="pin" value="<?php echo $pengguna['pin']; ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-form-label">Status</div>
                                        <div class="uk-form-controls">
                                            <label><input class="uk-radio" type="radio" name="status" value="0" <?php if($pengguna['status'] == 0) echo 'checked'; ?>> Block</label>
                                            <label><input class="uk-radio" type="radio" name="status" value="1" <?php if($pengguna['status'] == 1) echo 'checked'; ?>> Register</label><br>
                                            <label><input class="uk-radio" type="radio" name="status" value="2" <?php if($pengguna['status'] == 2) echo 'checked'; ?>> Active</label><br>
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Password</label>
                                        <div class="uk-form-controls">
                                            <input type="hidden" name="password_lama" value="<?php echo $pengguna['password']; ?>">
                                            <input class="uk-input" id="form-stacked-text" type="password" name="password">
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