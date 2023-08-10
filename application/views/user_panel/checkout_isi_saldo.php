
        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                <div class="uk-width-5-6@s">
                    <h3 class="uk-text-center open-sans-bold uk-margin-remove uk-padding-remove">Checkout Isi Saldo</h3>
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-text-center"><span
                            class="line uk-display-block uk-padding-remove uk-margin-auto"></span></div>
                    <div class="content uk-width-1-1 uk-child-width-1-2@s uk-flex-center uk-padding-remove uk-margin-medium-top" uk-grid>
                        <div class="uk-padding-small">
                            <h5 class="uk-padding-remove uk-margin-remove">Detail</h5>
                            <table class="uk-table">
                                <tbody>
                                    <tr>
                                        <th>Method</th>
                                        <td><?php echo $nama_metode; ?></td>
                                    </tr>
                                    <tr>
                                        <th>ID Transaksi</th>
                                        <td><?php echo $ref; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nominal Top Up</th>
                                        <td>Rp. <?php echo number_format($nominal_topup,0,',','.'); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Fee Admin</th>
                                        <td>Rp. <?php echo number_format($admin,0,',','.'); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td>Rp. <?php echo number_format($total,0,',','.'); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="uk-padding-small">
                            <h5 class="uk-padding-remove uk-margin-remove">Customer</h5>
                            <table class="uk-table">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?php echo $pengguna['nama_depan'].' '.$pengguna['nama_belakang']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $pengguna['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>No Handphone</th>
                                        <td><?php echo $pengguna['no_telp']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <form method="POST" action="<?php echo base_url(); ?>user_panel/dashboard/isi_aksi">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="hidden" name="merchantRef" value="<?php echo $ref; ?>">
                                <input type="hidden" name="amount" value="<?php echo $nominal_topup; ?>">
                                <input type="hidden" name="fee_tripay" value="<?php echo $admin; ?>">
                                <input type="hidden" name="total" value="<?php echo $total; ?>">
                                <input type="hidden" name="metode" value="<?php echo $metode; ?>">
                                <input type="hidden" name="customer_name" value="<?php echo $pengguna['nama_depan'].' '.$pengguna['nama_belakang']; ?>">
                                <input type="hidden" name="customer_email" value="<?php echo $pengguna['email']; ?>">
                                <input type="hidden" name="customer_phone" value="<?php echo $pengguna['no_telp']; ?>">

                                <input type="submit" class="uk-button uk-button-primary" value="Lanjut Ke Pembayaran">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>