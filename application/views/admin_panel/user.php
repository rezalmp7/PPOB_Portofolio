                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-right">
                            <a href="<?php echo base_url(); ?>admin_panel/user/tambah" class="uk-button uk-button-primary uk-border-rounded">Add Admin</a>
                        </div>
                        <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-card uk-card-default">
                            <table id="datatable" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($user as $u) {
                                    ?>
                                    <tr>
                                        <td><?php echo $u->nama; ?></td>
                                        <td><?php echo $u->email; ?></td>
                                        <td><?php echo $u->username; ?></td>
                                        <td>
                                            <div class="uk-inline">
                                                <a><span class="iconify" data-icon="bi:three-dots-vertical" data-inline="false"></span></a>
                                                <div uk-dropdown="mode: click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li><a href="<?php echo base_url(); ?>admin_panel/user/edit?id=<?php echo $u->id; ?>">Edit</a></li>
                                                        <li><a href="<?php echo base_url(); ?>admin_panel/user/hapus?id=<?php echo $u->id; ?>" class="uk-text-danger">Delete</a></li>
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
                </div>