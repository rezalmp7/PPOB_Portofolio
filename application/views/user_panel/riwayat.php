
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                <div class="uk-width-5-6@s">
                    <h3 class="uk-text-center open-sans-bold uk-margin-remove uk-padding-remove">Riwayat Transaksi</h3>
                    <ul class="uk-breadcrumb uk-text-normal">
                        <li><a href="<?php echo base_url(); ?>user_panel/dashboard">Halaman Utama</a></li>
                        <li><span>Riwayat Transaksi</span></li>
                    </ul>
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-text-center"><span
                            class="line uk-display-block uk-padding-remove uk-margin-auto"></span></div>
                    <div class="content uk-width-1-1 uk-flex-center uk-padding-remove uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-small">
                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                <div uk-filter="target: .js-filter">

                                    <ul class="uk-subnav uk-subnav-pill">
                                        <li class="uk-active" uk-filter-control><a href="#">All</a></li>
                                        <li uk-filter-control="[data-color='0']"><a href="#">Proses</a></li>
                                        <li uk-filter-control="[data-color='1']"><a href="#">Sukses</a></li>
                                        <li uk-filter-control="[data-color='2']"><a href="#">Gagal</a></li>
                                        <li uk-filter-control="[data-color='3']"><a href="#">Refund</a></li>
                                        <li uk-filter-control="[data-color='4']"><a href="#">Cek</a></li>
                                    </ul>

                                    <ul class="js-filter uk-child-width-1-1 uk-text-center" uk-grid>
                                        <?php
                                        foreach ($transaksi as $a) {
                                        ?>
                                        <li data-color="<?php echo $a['status']; ?>">
                                            <div class="uk-width-1-1 uk-padding-remove uk-margin-small-top">
                                                <div class="uk-uk-width-1-1 uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-small-top uk-margin-remove-horizontal">
                                                    <table class="uk-table uk-table-small">
                                                        <tbody>
                                                            <tr>
                                                                <td class="uk-text-left uk-padding-remove uk-margin-remove">Tanggal Transaksi</td>
                                                                <td class="uk-text-left uk-padding-remove uk-margin-remove">: <?php echo date('d/m/Y H:i:s', strtotime($a['tgl_transaksi'])); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="uk-text-left uk-padding-remove uk-margin-remove">Produk</td>
                                                                <td class="uk-text-left uk-padding-remove uk-margin-remove">: <?php echo $a['produk']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="uk-text-left uk-padding-remove uk-margin-remove">Status</td>
                                                                <td class="uk-text-left uk-padding-remove uk-margin-remove">: 
                                                                    <?php 
                                                                    if($a['status'] == '0') echo "<span class='uk-text-warning'>Pending</span>"; 
                                                                    elseif ($a['status'] == '1') echo "<span class='uk-text-success'>Berhasil</span>"; 
                                                                    elseif ($a['status'] == '2') echo "<span class='uk-text-danger'>Gagal</span>"; 
                                                                    elseif ($a['status'] == '3') echo "<span class='uk-text-primary'>Refund</span>"; 
                                                                    elseif ($a['status'] == '4') echo "<span class='uk-text-warning'>Cek</span>"; 
                                                                    else echo "<span class='uk-text-warning'>Gagal</span>"; 
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="uk-text-left uk-padding-remove uk-margin-remove">Nomor <?php if($a['type'] == '0') echo "Tujuan"; else echo "Pengguna"; ?></td>
                                                                <td class="uk-text-left uk-padding-remove uk-margin-remove">: <?php if($a['type'] == '0') echo $a['phone']; else echo $a['no_pengguna']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="uk-text-left uk-padding-remove uk-margin-remove">Harga</td>
                                                                <td class="uk-text-left uk-padding-remove uk-margin-remove">: Rp. <?php echo number_format($a['harga_vip'],0,',','.'); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="uk-text-left uk-padding-remove uk-margin-remove">Coin Promo</td>
                                                                <td class="uk-text-left uk-padding-remove uk-margin-remove">: Rp. <?php echo number_format($a['promo_coin'],0,',','.'); ?></td>
                                                            </tr>
                                                        <tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>