<div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
        <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-right">
            <a class="uk-button uk-button-primary uk-border-rounded" href="#modal-container"
                uk-toggle="container:false"><span class="iconify" data-icon="bx:bx-news" data-inline="false"></span>
                Tambah Berita</a>
            <div id="modal-container" class="uk-modal-container" uk-modal="container: false">
                <div class="uk-modal-dialog uk-modal-body uk-border-rounded">
                    <div class="uk-width-1-1 uk-text-left">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin_panel/blog/tambah_aksi">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <h2 class="uk-modal-title">Tambah Berita</h2>
                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-1-2@s">
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">ID</label>
                                            <div class="uk-form-controls">
                                                <?php echo $id; ?>
                                                <input class="uk-input" id="form-stacked-text" type="hidden" name="id"
                                                    value="<?php echo $id; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s">
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">Penulis</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="text"
                                                    name="penulis" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">Judul</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="text" name="judul"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-stacked-text">Thumbnail</label>
                                            <div class="uk-form-controls">
                                                <div uk-form-custom="target: true">
                                                    <input type="file" name="thumbnail" required>
                                                    <input class="uk-input uk-form-width-medium" type="text"
                                                        placeholder="Select file" disabled>
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
                                                    <option value="1">Entertaiment</option>
                                                    <option value="2">News Update</option>
                                                    <option value="3">Politik</option>
                                                    <option value="4">Teknologi</option>
                                                    <option value="5">Bencana</option>
                                                    <option value="6">Kesehatan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-horizontal-select">Content</label>
                                            <div class="uk-form-controls">
                                                <textarea id="editor" name="content"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <input type="submit" class="uk-button button-success" value="Tambah">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-card uk-card-default">
            <table id="datatable" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Thumbnail</th>
                        <th>Penulis</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($blog as $a) {
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo date('d/m/Y H:i:s', strtotime($a['create_at'])); ?></td>
                        <td><?php echo $a['judul']; ?></td>
                        <td>
                            <?php
                            $kategori = $a['kategori'];

                            switch ($kategori) {
                                case 1:
                                    echo 'Entertainment';
                                    break;
                                case 2:
                                    echo 'New Update';
                                    break;
                                case 3:
                                    echo 'Politik';
                                    break;
                                case 4:
                                    echo 'Teknologi';
                                    break;
                                case 5:
                                    echo 'Bencana';
                                    break;
                                case 6:
                                    echo 'Kesehatan';
                                    break;
                            }
                            ?>
                        </td>
                        <td><img style="height: 40px" src="<?php echo base_url(); ?>assets/img/website/blog/<?php echo $a['thumbnail']; ?>">
                        </td>
                        <td><?php echo $a['penulis']; ?></td>
                        <td>
                            <div class="uk-inline">
                                <a><span class="iconify" data-icon="bi:three-dots-vertical"
                                        data-inline="false"></span></a>
                                <div uk-dropdown="mode: click">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li><a href="<?php echo base_url(); ?>admin_panel/blog/edit?id=<?php echo $a['id']; ?>">Edit</a></li>
                                        <li><a href="<?php echo base_url(); ?>admin_panel/blog/detail?id=<?php echo $a['id']; ?>">Detail</a></li>
                                        <li><a href="<?php echo base_url(); ?>admin_panel/blog/hapus?id=<?php echo $a['id']; ?>" class="uk-text-danger">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>