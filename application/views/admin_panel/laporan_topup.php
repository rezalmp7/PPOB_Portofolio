
                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <form>
                        <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-right">

                                <a target="_blank" href="<?php echo base_url(); ?>admin_panel/laporan_topup/cetak" class="uk-button uk-button-primary uk-border-rounded"><span class="iconify"
                                        data-icon="ant-design:file-pdf-outlined" data-inline="false"></span> Export
                                    PDF</a>
                            </div>
                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-card uk-card-default">
                                <table id="datatable" class="uk-table uk-table-hover uk-table-striped"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Pengguna</th>
                                            <th>Top Up Type</th>
                                            <th>Jumlah Top Up</th>
                                            <th>Free Coin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($laporan as $a) {
                                        ?>
                                        <tr>
                                            <td><?php echo date('d/m/Y H:i:s', strtotime($a['create_at'])); ?></td>
                                            <td><?php echo $a['nama_depan'].' '.$a['nama_belakang']; ?></td>
                                            <td><?php echo $a['metode']; ?></td>
                                            <td>Rp <?php echo number_format($a['nominal'],0,',','.'); ?></td>
                                            <td>Rp <?php echo number_format($a['coin'],0,',','.'); ?></td>
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