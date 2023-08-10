
                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-right">
                            <a href="<?php echo base_url(); ?>admin_panel/spesial/tambah" class="uk-button uk-button-primary uk-border-rounded">Add Admin</a>
                        </div>
                        <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-card uk-card-default">
                            <table id="datatable" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Icon</th>
                                        <th>Harga</th>
                                        <th>Diskon</th>
                                        <th>Data</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($produk as $a) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $a['nama']; ?></td>
                                        <?php
                                        if($a['icon'] != null)
                                        {
                                            $icon = $a['icon'];
                                        }
                                        else {
                                            $icon = 'produk-default.png';
                                        }
                                        ?>
                                        <td><img style="height: 70px;" src="<?php echo base_url(); ?>assets/img/icon/produk/<?php echo $icon; ?>"></td>
                                        <td><?php echo "Rp. ".number_format($a['harga'],0,',','.'); ?></td>
                                        <td><?php echo "Rp. ".number_format($a['diskon'],0,',','.'); ?></td>
                                        <td><?php echo $a['data']; ?></td>
                                        <td>
                                            <div class="uk-inline">
                                                <a><span class="iconify" data-icon="bi:three-dots-vertical" data-inline="false"></span></a>
                                                <div uk-dropdown="mode: click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li><a href="<?php echo base_url(); ?>admin_panel/spesial/edit?id=<?php echo $a['id']; ?>">Edit</a></li>
                                                        <li><a href="<?php echo base_url(); ?>admin_panel/spesial/hapus?id=<?php echo $a['id']; ?>&gmb=<?php echo $a['icon']; ?>" class="uk-text-danger">Delete</a></li>
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