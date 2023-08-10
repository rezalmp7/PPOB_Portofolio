
                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <form>
                        <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-right">
                                <a href="<?php echo base_url(); ?>admin_panel/harga/tambah" class="uk-button uk-button-primary uk-border-rounded">Add Admin</a>
                            </div>
                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-card uk-card-default">
                                <table id="datatable" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Rentang Harga</th>
                                            <th>Keuntungan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($harga as $a) {
                                        ?>
                                        <tr>
                                            <td><?php echo "Rp ".number_format($a['start'],0,',','.')." - Rp ".number_format($a['end'],0,',','.'); ?></td>
                                            <td><?php echo "Rp ".number_format($a['keuntungan'],0,',','.'); ?></td>
                                            <td>
                                                <div class="uk-inline">
                                                    <a><span class="iconify" data-icon="bi:three-dots-vertical"
                                                            data-inline="false"></span></a>
                                                    <div uk-dropdown="mode: click">
                                                        <ul class="uk-nav uk-dropdown-nav">
                                                            <li><a href="<?php echo base_url(); ?>admin_panel/harga/edit?id=<?php echo $a['id']; ?>">Edit</a></li>
                                                            <li><a href="<?php echo base_url(); ?>admin_panel/harga/hapus?id=<?php echo $a['id']; ?>" class="uk-text-danger">Delete</a></li>
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