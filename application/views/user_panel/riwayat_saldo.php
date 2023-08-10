
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                <div class="uk-width-5-6@s">
                    <h3 class="uk-text-center open-sans-bold uk-margin-remove uk-padding-remove">Riwayat Saldo</h3>
                    <ul class="uk-breadcrumb uk-text-normal">
                        <li><a href="<?php echo base_url(); ?>user_panel/dashboard">Halaman Utama</a></li>
                        <li><span>Riwayat Saldo</span></li>
                    </ul>
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-text-center"><span
                            class="line uk-display-block uk-padding-remove uk-margin-auto"></span></div>
                    <div class="content uk-width-1-1 uk-child-width-1-2@s uk-flex-center uk-padding-remove uk-margin-medium-top" uk-grid>
                        <div class="uk-padding-small">
                            <h5 class="uk-padding-remove uk-margin-remove">Riwayat Saldo</h5>
                            <div class="uk-width-1-1 uk-padding-remove uk-margin-small-top">
                                <div class="uk-uk-width-1-1 uk-card uk-card-primary uk-border-rounded uk-padding-small uk-margin-small-top uk-margin-remove-horizontal">
                                    <table class="uk-table uk-table-small">
                                        <thead>
                                            <tr>
                                                <th class="uk-text-secondary">No</th>
                                                <th class="uk-text-secondary">Judul</th>
                                                <th class="uk-text-secondary">Tanggal</th>
                                                <th class="uk-text-secondary">Nominal</th>
                                                <th class="uk-text-secondary"></th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($transaksi as $a) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $a['judul']; ?></td>
                                                <td><?php echo date('d-m-Y', strtotime($a['tanggal'])); ?></td>
                                                <td><?php echo number_format($a['nominal'],0,',','.'); ?></td>
                                                <td>
                                                    <?php if($a['type'] == 'topup')
                                                    {
                                                    ?>
                                                    <span class="uk-text-success" uk-icon="arrow-down"></span>
                                                    <?php
                                                    }
                                                    else {
                                                    ?>
                                                    <span class="uk-text-danger" uk-icon="arrow-up"></span>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                            }
                                            ?>
                                        <tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="uk-padding-small">
                            <h5 class="uk-padding-remove uk-margin-remove">Top Up</h5>
                            <div class="uk-padding-remove uk-margin-remove">
                                <?php
                                foreach ($topup_unpaid as $a) {
                                ?>
                                <div class="uk-width-1-1 uk-padding-remove uk-margin-small-top">
                                    <div class="uk-uk-width-1-1 uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-small-top uk-margin-remove-horizontal">
                                        <table class="uk-table uk-table-small">
                                            <tbody>
                                                <tr>
                                                    <td class="uk-padding-remove uk-margin-remove">Terakhir Pembayaran</td>
                                                    <td class="uk-padding-remove uk-margin-remove">: <?php echo date('d/m/Y H:i:s', strtotime($a['expired_time'])); ?></td>
                                                <tr>
                                                    <td class="uk-padding-remove uk-margin-remove">Status</td>
                                                    <td class="uk-padding-remove uk-margin-remove">: <?php if($a['status'] == 'PAID') echo "<span class='uk-text-success'>PAID</span>"; else echo "<span class='uk-text-danger'>".$a['status']."</span>"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="uk-padding-remove uk-margin-remove">Nominal Top Up</td>
                                                    <td class="uk-padding-remove uk-margin-remove">: Rp. <?php echo number_format($a['nominal'],0,',','.'); ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="uk-padding-remove uk-margin-remove">Admin</td>
                                                    <td class="uk-padding-remove uk-margin-remove">: Rp. <?php echo number_format($a['fee_tripay'],0,',','.'); ?></td>
                                                </tr>
                                                <?php
                                                $harusdibayar = $a['fee_tripay']+$a['nominal'];
                                                ?>
                                                <tr>
                                                    <td class="uk-padding-remove uk-margin-remove">Harus dibayar</td>
                                                    <td class="uk-padding-remove uk-margin-remove">: Rp. <?php echo number_format($harusdibayar,0,',','.'); ?></td>
                                                </tr>
                                            <tbody>
                                        </table>
                                        <div class="uk-padding-small uk-padding-remove-horizontal uk-margin-remove">
                                            <a href="<?php echo base_url(); ?>user_panel/dashboard/detail_riwayat_saldo?ref=<?php echo $a['ref']; ?>" class="uk-button uk-button-primary">Detail Top Up</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                <?php
                                foreach ($topup_xunpaid as $b) {
                                ?>
                                <div class="uk-width-1-1 uk-padding-remove uk-margin-small-top">
                                    <div class="uk-uk-width-1-1 uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-small-top uk-margin-remove-horizontal">
                                        <table class="uk-table uk-table-small">
                                            <tbody>
                                                <tr>
                                                    <td class="uk-padding-remove uk-margin-remove">Terakhir Pembayaran</td>
                                                    <td class="uk-padding-remove uk-margin-remove">: <?php echo date('d/m/Y H:i:s', strtotime($b['expired_time'])); ?></td>
                                                <tr>
                                                    <td class="uk-padding-remove uk-margin-remove">Status</td>
                                                    <td class="uk-padding-remove uk-margin-remove">: <?php if($b['status'] == 'PAID') echo "<span class='uk-text-success'>PAID</span>"; else echo "<span class='uk-text-danger'>".$b['status']."</span>"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="uk-padding-remove uk-margin-remove">Nominal Top Up</td>
                                                    <td class="uk-padding-remove uk-margin-remove">: Rp. <?php echo number_format($b['nominal'],0,',','.'); ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="uk-padding-remove uk-margin-remove">Admin</td>
                                                    <td class="uk-padding-remove uk-margin-remove">: Rp. <?php echo number_format($b['fee_tripay'],0,',','.'); ?></td>
                                                </tr>
                                                <?php
                                                $harusdibayar = $b['fee_tripay']+$b['nominal'];
                                                ?>
                                                <tr>
                                                    <td class="uk-padding-remove uk-margin-remove">Harus dibayar</td>
                                                    <td class="uk-padding-remove uk-margin-remove">: Rp. <?php echo number_format($harusdibayar,0,',','.'); ?></td>
                                                </tr>
                                            <tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>