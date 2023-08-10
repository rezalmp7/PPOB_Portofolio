
                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        
                        <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-card uk-card-default">
                            <table id="datatable" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Subject</th>
                                        <th>Email</th>
                                        <th>No Telepon</th>
                                        <th>Pesan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pesan as $a) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $a['nama']; ?></td>
                                        <td><?php echo $a['subjek']; ?></td>
                                        <td><?php echo $a['email']; ?></td>
                                        <td><?php echo $a['no_telp']; ?></td>
                                        <td><?php echo $a['pesan']; ?></td>
                                        <td>
                                            <div class="uk-inline">
                                                <a><span class="iconify" data-icon="bi:three-dots-vertical"
                                                        data-inline="false"></span></a>
                                                <div uk-dropdown="mode: click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li><a href="<?php echo base_url(); ?>admin_panel/pesan/detail?id=<?php echo $a['id']; ?>">Detail</a></li>
                                                        <li><a href="<?php echo base_url(); ?>admin_panel/pesan/hapus?id=<?php echo $a['id']; ?>" class="uk-text-danger">Delete</a></li>
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