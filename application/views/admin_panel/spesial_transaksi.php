
                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <form>
                        <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                            
                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-card uk-card-default">
                                <table id="datatable" class="uk-table uk-table-hover uk-table-striped"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Pengguna</th>
                                            <th>Tujuan</th>
                                            <th>Harga</th>
                                            <th>Promo Coin</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($transaksi as $a) {
                                        ?>
                                        <tr>
                                            <td><?php echo date('d/m/Y H:i:s', strtotime($a['tgl_transaksi'])); ?></td>
                                            <td><?php echo $a['pengguna_nama']; ?></td>
                                            <td><?php echo $a['no_pengguna']; ?></td>
                                            <td>Rp <?php echo number_format($a['harga_vip'],0,',','.'); ?></td>
                                            <td>Rp <?php echo number_format($a['promo_coin'],0,',','.'); ?></td>
                                            <td>
                                                <?php
                                                if($a['status'] == '0')
                                                {
                                                    echo "Pending";
                                                }    
                                                elseif ($a['status'] == '1') {
                                                    echo "Berhasil";
                                                }
                                                elseif ($a['status'] == '2') {
                                                    echo "Gagal";
                                                }
                                                elseif ($a['status'] == '3') {
                                                    echo "Refund";
                                                }
                                                else {
                                                    echo "Cek";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <div class="uk-inline">
                                                    <button class="uk-button uk-button-default" type="button">Update_status</button>
                                                    <div uk-dropdown="mode: click">
                                                        <ul class="uk-nav uk-dropdown-nav">
                                                            <?php 
                                                            if($a['status'] != '0')
                                                            {
                                                            ?>
                                                            <li><a href="<?php echo base_url(); ?>admin_panel/transaksi_spesial/update_status?id=<?php echo $a['id']; ?>&status=0">Pending</a></li>
                                                            <?php
                                                            }
                                                            if($a['status'] != '1')
                                                            {
                                                            ?>
                                                            <li><a href="<?php echo base_url(); ?>admin_panel/transaksi_spesial/update_status?id=<?php echo $a['id']; ?>&status=1">Success</a></li>
                                                            <?php
                                                            }
                                                            if($a['status'] != '3')
                                                            {
                                                            ?>
                                                            <li><a href="<?php echo base_url(); ?>admin_panel/transaksi_spesial/update_status?id=<?php echo $a['id']; ?>&status=2">Gagal</a></li>
                                                            <?php
                                                            }
                                                            if($a['status'] != '2')
                                                            {
                                                            ?>
                                                            <li><a href="<?php echo base_url(); ?>admin_panel/transaksi_spesial/update_status?id=<?php echo $a['id']; ?>&status=3">Refund</a></li>
                                                            <?php
                                                            }
                                                            ?>
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