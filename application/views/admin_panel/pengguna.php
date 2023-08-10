
                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <form>
                        <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-right">
                                <a href="<?php echo base_url(); ?>admin_panel/pengguna/tambah" class="uk-button uk-button-primary uk-border-rounded">Add Admin</a>
                            </div>
                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-card uk-card-default">
                                <table id="datatable" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th><input class="uk-checkbox" type="checkbox" id="select-all"></th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No Telpon</th>
                                            <th>Nama Pengguna</th>
                                            <th>PIN</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($pengguna as $a) {
                                        ?>
                                        <tr>
                                            <th><input class="uk-checkbox" value="<?php echo $a['id']; ?>" type="checkbox"></th>
                                            <td><?php echo $a['nama_depan']." ".$a['nama_belakang']; ?></td>
                                            <td><?php echo $a['email']; ?></td>
                                            <td><?php echo $a['no_telp']; ?></td>
                                            <td><?php echo $a['username']; ?></td>
                                            <td><?php echo $a['pin']; ?></td>
                                            <td>
                                                <?php if($a['status'] == '2')
                                                {
                                                ?>
                                                <div class="uk-padding-small uk-padding-remove-vertical uk-border-rounded uk-margin-remove background-aktif uk-text-center">Aktif</div>
                                                <?php
                                                }
                                                elseif($a['status'] == '1') {
                                                ?>
                                                <div class="uk-padding-small uk-padding-remove-vertical uk-border-rounded uk-margin-remove background-register uk-text-center">Register</div>
                                                <?php
                                                } else {
                                                ?>
                                                <div class="uk-padding-small uk-padding-remove-vertical uk-border-rounded uk-margin-remove background-blokir uk-text-center">Blokir</div>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <div class="uk-inline">
                                                    <a><span class="iconify" data-icon="bi:three-dots-vertical"
                                                            data-inline="false"></span></a>
                                                    <div uk-dropdown="mode: click">
                                                        <ul class="uk-nav uk-dropdown-nav">
                                                            <li><a href="<?php echo base_url(); ?>admin_panel/pengguna/edit?id=<?php echo $a['id']; ?>">Edit</a></li>
                                                            <li><a href="<?php echo base_url(); ?>admin_panel/pengguna/detail?id=<?php echo $a['id']; ?>">Detail</a></li>
                                                            <li><a href="<?php echo base_url(); ?>admin_panel/pengguna/hapus?id=<?php echo $a['id']; ?>" class="uk-text-danger">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>