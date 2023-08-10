        <div class="body uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                <div class="uk-width-5-6@s">
                    <h3 class="uk-text-center open-sans-bold uk-margin-remove uk-padding-remove">Checkout Transaksi</h3>
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-text-center"><span class="line uk-display-block uk-padding-remove uk-margin-auto"></span></div>
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-medium-top uk-margin-remove-left uk-margin-remove-right" uk-grid>
                        <div class="uk-width-1-2@s uk-padding-small uk-margin-remove">
                            <table class="uk-table">
                                <tbody>
                                    <tr>
                                        <th>Nama Akun</th>
                                        <td><?php echo $pengguna['nama_depan'].' '.$pengguna['nama_belakang']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tagihan Atas Nama</th>
                                        <td><?php echo $tagihan->nama; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kode Tagihan</th>
                                        <td><?php echo $tagihan->tagihan_id; ?></td>
                                    </tr>
                                    <tr>
                                        <th>No Pengguna</th>
                                        <td><?php echo $tagihan->no_pelanggan; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Produk</th>
                                        <td><?php echo $tagihan->product_name; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tagihan</th>
                                        <td><?php echo $tagihan->jumlah_bayar; ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Promo</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <?php
                                            $coin = 0;
                                            foreach ($promo as $a) {
                                            ?>
                                            <div class="uk-width-1-1 uk-padding-remove uk-margin-small-bottom">
                                                <h5 class="uk-padding-remove uk-margin-remove"><?php echo $a['nama']; ?></h5>
                                                <p class="uk-padding-remove uk-margin-remove">Rp <?php echo number_format($a['coin'],0,",","."); ?><p>
                                            </div>
                                            <?php
                                            $coin = $coin+$a['coin'];
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Pendapatan coin</th>
                                        <td>Rp <?php echo number_format($coin,0,",","."); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="uk-width-1-2@s uk-padding-small uk-margin-remove">
                            <form class="uk-form-stacked" method="POST" action="<?php echo base_url(); ?>user_panel/transaksi/transaksi_pembelian">
                                <div class="uk-width-1-1 uk-box-shadow-medium uk-padding-small uk-background-primary uk-margin-remove uk-border-rounded">
                                    <div class="uk-padding-small uk-background-muted uk-border-rounded uk-width-1-1 uk-margin" onClick="bayar_dengan_coin()">
                                        <label><input class="uk-checkbox" name="coin" value="1" type="checkbox" id="cek_bayar_coin"> Gunakan Coin (<?php echo $pengguna['coin']; ?>)</label>
                                    </div>
                                    <!-- tanpa coin -->
                                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove" id="tanpa_coin">
                                        <h5 class="color-black uk-text-bold uk-margin-small-bottom">Detail Transaksi</h5>
                                        <div class="color-black uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">Nomor Pengguna :</div>
                                            <div class="uk-width-auto uk-padding-remove uk-margin-remove uk-text-large uk-text-bold"><?php echo $tagihan->no_pelanggan; ?>(<?php echo $tagihan->nama; ?>)</div>
                                        </div>
                                        <div class="color-black uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                            <div class="uk-width-auto uk-padding-remove uk-margin-remove"><?php echo $tagihan->product_name; ?></div>
                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove uk-text-right"><?php echo number_format($tagihan->jumlah_bayar,0,',','.'); ?></div>
                                        </div>
                                        <hr class="uk-padding-small-top uk-padding-small-bottom uk-margin-remove" style="border-color: black;">
                                        <div class="color-black uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                            <div class="uk-width-auto uk-padding-remove uk-margin-remove">Total Harga</div>
                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove uk-text-right" id="harga"><?php echo $total_bayar; ?></div>
                                        </div>
                                        <?php
                                        $harga = $total_bayar;
                                        $sisa_saldo = $pengguna['saldo']-(int)$harga;
                                        $bayar_saldo = $harga;
                                        $bayar_coin = 0;
                                        ?>
                                        <input type="hidden" name="bayar_saldo" value="<?php echo $bayar_saldo; ?>">
                                        <input type="hidden" name="bayar_coin" value="<?php echo $bayar_coin; ?>">
                                        <input type="hidden" name="sisa_saldo" value="<?php echo $sisa_saldo; ?>">
                                        <input type="hidden" name="sisa_coin" value="<?php echo $pengguna['coin']; ?>">
                                        <div class="color-black uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                            <div class="uk-width-auto uk-padding-remove uk-margin-remove">Saldo</div>
                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove uk-text-right">Rp <?php echo number_format($pengguna['saldo'],0,',','.'); ?></div>
                                        </div>
                                        <div class="color-black uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                            <div class="uk-width-auto uk-padding-remove uk-margin-remove">Sisa Saldo</div>
                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove uk-text-right">Rp <?php echo number_format($sisa_saldo,0,',','.'); ?></div>
                                        </div>
                                    </div>
                                    <!-- dengan Coin -->
                                    <div class="uk-width-1-1 uk-margin-remove uk-padding-remove" id="dengan_coin">
                                        <h5 class="color-black uk-text-bold uk-margin-small-bottom">Detail Transaksi</h5>
                                        <div class="color-black uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">Nomor Tujuan :</div>
                                            <div class="uk-width-auto uk-padding-remove uk-margin-remove uk-text-large uk-text-bold"><?php echo $transaksi['nomor']; ?></div>
                                        </div>
                                        <div class="color-black uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                            <div class="uk-width-auto uk-padding-remove uk-margin-remove"><?php echo $detail_produk->product_name; ?></div>
                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove uk-text-right"><?php echo $transaksi['harga']; ?></div>
                                        </div>
                                        <hr class="uk-padding-small-top uk-padding-small-bottom uk-margin-remove" style="border-color: black;">
                                        <div class="color-black uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                            <div class="uk-width-auto uk-padding-remove uk-margin-remove">Total Harga</div>
                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove uk-text-right" id="harga"><?php echo $transaksi['harga']; ?></div>
                                        </div>
                                        <?php
                                        $harga = preg_replace("/[^0-9]/","",$transaksi['harga']);
                                        if($pengguna['coin'] <= $harga)
                                        {
                                            $min_coin = $pengguna['coin'];
                                            $sisa_coin = 0;
                                            $sisa_harga = $harga-$pengguna['coin'];
                                        }
                                        else {
                                            $min_coin = $harga;
                                            $sisa_coin = $pengguna['coin']-$harga;
                                            $sisa_harga = 0;
                                        }
                                        $sisa_saldo = $pengguna['saldo']-$sisa_harga;
                                        $bayar_coin = $pengguna['coin']-$sisa_coin;
                                        $bayar_saldo = $pengguna['saldo']-$sisa_saldo;
                                        ?>
                                        <input type="hidden" name="bayar_saldo" value="<?php echo $bayar_saldo; ?>">
                                        <input type="hidden" name="bayar_coin" value="<?php echo $bayar_coin; ?>">
                                        <input type="hidden" name="sisa_saldo" value="<?php echo $sisa_saldo; ?>">
                                        <input type="hidden" name="sisa_coin" value="<?php echo $sisa_coin; ?>">
                                        <div class="color-black uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                            <div class="uk-width-auto uk-padding-remove uk-margin-remove">Coin</div>
                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove uk-text-right">- Rp <?php echo number_format($min_coin,'0',',','.'); ?></div>
                                        </div>
                                        <div class="color-black uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                            <div class="uk-width-auto uk-padding-remove uk-margin-remove">Saldo</div>
                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove uk-text-right">- Rp <?php echo number_format($sisa_harga,0,',','.'); ?></div>
                                        </div>
                                        <div class="color-black uk-width-1-1 uk-padding-remove uk-margin-remove" id="checkout_sisa_coin" uk-grid>
                                            <div class="uk-width-auto uk-padding-remove uk-margin-remove">Sisa Coin</div>
                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove uk-text-right" id="sisa_saldo">Rp <?php echo number_format($sisa_coin,0,',','.'); ?></div>
                                        </div>
                                        <div class="color-black uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                                            <div class="uk-width-auto uk-padding-remove uk-margin-remove">Sisa Saldo</div>
                                            <div class="uk-width-expand uk-padding-remove uk-margin-remove uk-text-right" id="sisa_coin">Rp <?php echo number_format($sisa_saldo,0,',','.'); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="operator" value="<?php echo $transaksi['nama_operator']; ?>">
                                <input type="hidden" name="nomor" value="<?php echo $transaksi['nomor']; ?>">
                                <input type="hidden" name="produk" value="<?php echo $detail_produk->code; ?>">
                                <input type="hidden" name="harga_api" value="<?php echo $detail_produk->price; ?>">
                                <input type="hidden" name="harga_vip" value="<?php echo $harga; ?>">
                                <input type="hidden" name="promo_coin" value="<?php echo $coin; ?>">
                                <input type="submit" class="uk-width-1-1 uk-margin-small-top uk-border-rounded uk-button uk-button-primary" value="Lanjut Ke Pembayaran">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>