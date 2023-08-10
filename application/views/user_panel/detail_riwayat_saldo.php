
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                <div class="uk-width-5-6@s">
                    <h3 class="uk-text-center open-sans-bold uk-margin-remove uk-padding-remove">Detail Top Up Saldo</h3>
                    <ul class="uk-breadcrumb uk-text-normal">
                        <li><a href="<?php echo base_url(); ?>user_panel/dashboard">Halaman Utama</a></li>
                        <li><a href="<?php echo base_url(); ?>user_panel/dashboard/riwayat_saldo">Riwayat Saldo</a></li>
                        <li><span>Datail Top Up Saldo</span></li>
                    </ul>
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-text-center"><span
                            class="line uk-display-block uk-padding-remove uk-margin-auto"></span></div>
                    <div class="content uk-width-1-1 uk-child-width-1-2@s uk-flex-center uk-padding-remove uk-margin-medium-top" uk-grid>
                        <div class="uk-padding-small">
                            <h5 class="uk-padding-remove uk-margin-remove">Detail Transaksi</h5>
                            <div class="uk-width-1-1 uk-padding-remove uk-margin-small-top">
                                <div class="uk-uk-width-1-1 uk-card uk-card-primary uk-border-rounded uk-padding-small uk-margin-small-top uk-margin-remove-horizontal">
                                    <h4 class="uk-padding-remove uk-margin-remove uk-text-bold"><?php echo $topup->reference; ?></h4>
                                    <table style="color: white" class="uk-table uk-table-small">
                                        <tbody>
                                            <tr>
                                                <td>Nama Metode</td>
                                                <td>: <?php echo $topup->payment_name; ?></td>
                                            </tr>
                                            <?php
                                            if($topup->payment_method != "QRIS")
                                            {
                                            ?>
                                            <tr>
                                                <td>Kode Virtual Account</td>
                                                <td class="uk-text-bold">: <?php echo $topup->pay_code; ?></td>
                                            </tr>
                                            <?php
                                            }
                                            else {
                                            ?>
                                            <tr>
                                                <td colspan="2">QR Code</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="uk-text-bold">
                                                    <img style="height: 100px" src="<?php echo $topup->qr_url; ?>">
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            <tr>
                                                <td>Status</td>
                                                <td>: <?php echo $topup->status; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nominal</td>
                                                <td>: Rp. <?php echo number_format($topup->amount_received,0,',','.'); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Fee Admin</td>
                                                <td>: Rp. <?php echo number_format($topup->fee_customer,0,',','.'); ?></td>
                                            </tr>
                                            <?php
                                            $total_bayar = $topup->amount_received+$topup->fee_customer;
                                            ?>
                                            <tr>
                                                <td>Total Bayar</td>
                                                <td>: Rp. <?php echo number_format($total_bayar,0,',','.'); ?></td>
                                            </tr>
                                        <tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="uk-padding-small">
                            <h5 class="uk-padding-remove uk-margin-remove">Cara Pembayaran</h5>
                            <div class="uk-padding-remove uk-margin-remove">
                                <?php
                                foreach ($topup->instructions as $a) {
                                ?>
                                <div class="uk-width-1-1 uk-padding-remove uk-margin-small-top">
                                    <div class="uk-uk-width-1-1 uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-small-top uk-margin-remove-horizontal">
                                        <h3 class="uk-text-bold uk-padding-remove uk-margin-remove"><?php echo $a->title; ?></h3>
                                        <div class="uk-text-normal uk-padding-small uk-padding-remove-horizontal uk-margin-remove">
                                            <ul class="uk-list uk-list-disc">
                                            <?php 
                                            foreach($a->steps as $b)
                                            {
                                                echo "<li >".$b."</li>";
                                            }
                                            ?>
                                            </ul>
                                        </div>
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