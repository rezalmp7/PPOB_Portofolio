                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                            <div class="uk-width-5-6 uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-remove">
                                <h4 class="poppins-medium">Edit Pengguna</h4>
                                <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin_panel/blog/edit_aksi">
                                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-1-2@s">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-text">ID</label>
                                                    <div class="uk-form-controls">
                                                        <?php echo $blog['id']; ?>
                                                        <input class="uk-input" id="form-stacked-text" type="hidden" name="id"
                                                            value="<?php echo $blog['id']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2@s">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-text">Penulis</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" id="form-stacked-text" type="text"
                                                            name="penulis" value="<?php echo $blog['penulis']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-text">Judul</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" id="form-stacked-text" type="text" name="judul" value="<?php echo $blog['judul']; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-text">Ganti Thumbnail</label>
                                                    <div class="uk-form-controls">
                                                        <input type="hidden" name="thumbnail_lama" value="<?php echo $blog['thumbnail']; ?>">
                                                        <div uk-form-custom="target: true">
                                                            <input type="file" name="thumbnail">
                                                            <input class="uk-input uk-form-width-medium" type="text"
                                                                placeholder="Select file" disabled><br><br>
                                                            <img style="height: 100px" src="<?php echo base_url(); ?>assets/img/website/blog/<?php echo $blog['thumbnail']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2@s">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-horizontal-select">Kategori</label>
                                                    <div class="uk-form-controls">
                                                        <select class="uk-select" name="kategori" id="form-horizontal-select"
                                                            required>
                                                            <option selected>Pilih Kategory</option>
                                                            <option value="1" <?php if($blog['kategori'] == 1) echo 'selected'; ?>>Entertaiment</option>
                                                            <option value="2" <?php if($blog['kategori'] == 2) echo 'selected'; ?>>News Update</option>
                                                            <option value="3" <?php if($blog['kategori'] == 3) echo 'selected'; ?>>Politik</option>
                                                            <option value="4" <?php if($blog['kategori'] == 4) echo 'selected'; ?>>Teknologi</option>
                                                            <option value="5" <?php if($blog['kategori'] == 5) echo 'selected'; ?>>Bencana</option>
                                                            <option value="6" <?php if($blog['kategori'] == 6) echo 'selected'; ?>>Kesehatan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-horizontal-select">Content</label>
                                                    <div class="uk-form-controls">
                                                        <textarea id="editor" name="content"><?php echo $blog['content']; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1">
                                                <div class="uk-margin">
                                                    <input type="submit" class="uk-button button-warning" value="Edit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>