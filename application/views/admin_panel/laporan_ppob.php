
                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <form>
                        <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-text-right">
                                
                                <a target="_blank" href="<?php echo base_url(); ?>admin_panel/laporan_ppob/cetak" class="uk-button uk-button-primary uk-border-rounded"><span class="iconify" data-icon="ant-design:file-pdf-outlined" data-inline="false"></span> Export PDF</a>
                            </div>
                            <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-card uk-card-default">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-slide-left-small, uk-animation-slide-right-small">
                                    <li><a href="#">PPOB Internal</a></li>
                                    <li><a href="#">PPOB Tripay</a></li>
                                </ul>

                                <ul class="uk-switcher uk-margin">
                                    <li>
                                        <table id="datatable" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Pengguna</th>
                                                    <th>Layanan</th>
                                                    <th>Produk</th>
                                                    <th>Status</th>
                                                    <th>Harga VIP</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($laporan as $a) {
                                                ?>
                                                <tr>
                                                    <td><?php echo date('d/m/Y H:i:s', strtotime($a['tgl_transaksi'])); ?></td>
                                                    <td><?php echo $a['nama_depan'].' '.$a['nama_belakang']; ?></td>
                                                    <td>
                                                        <?php if($a['type'] == '0')
                                                        {
                                                            echo "Pembelian";
                                                        }
                                                        elseif ($a['type'] == '1') {
                                                            echo "Pembayaran";
                                                        }
                                                        else {
                                                            echo "Type";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $a['produk']; ?></td>
                                                    <td>
                                                        <?php
                                                        if($a['status'] == '0')
                                                        {
                                                            echo "Proses";
                                                        }
                                                        elseif($a['status'] == '1') {
                                                            echo "Berhasil";
                                                        } 
                                                        elseif ($a['status'] == '2') {
                                                            echo "Refund";
                                                        }
                                                        elseif ($a['status'] == '3') {
                                                            echo "Gagal";
                                                        }
                                                        else {
                                                            echo "Cek";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo 'Rp '.number_format($a['harga_vip'],0,',','.'); ?></td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <table id="datatable" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Target</th>
                                                    <th>Layanan</th>
                                                    <th>Produk</th>
                                                    <th>Status</th>
                                                    <th>Harga VIP</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($transaksi_ppob as $a) {
                                                ?>
                                                <tr>
                                                    <td><?php echo date('d/m/Y H:i:s', strtotime($a['created_at'])); ?></td>
                                                    <td><?php echo $a['target']; ?></td>
                                                    <td>
                                                        <?php if($a['type'] == '0')
                                                        {
                                                            echo "Pembelian";
                                                        }
                                                        elseif ($a['type'] == '1') {
                                                            echo "Pembayaran";
                                                        } 
                                                        else
                                                        {
                                                            echo "Produk Spesial";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $a['produk']; ?></td>
                                                    <td>
                                                        <?php
                                                        if($a['status'] == '0')
                                                        {
                                                            echo "Proses";
                                                        }
                                                        elseif($a['status'] == '1') {
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
                                                    <td><?php echo 'Rp '.number_format($a['harga'],0,',','.'); ?></td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </form>
                </div>