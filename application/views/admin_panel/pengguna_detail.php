                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                            <div class="uk-width-3-5@s uk-border-rounded uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-remove">
                                <h4 class="poppins-medium"><?php echo $pengguna['nama']; ?></h4>
                                <?php
                                if($pengguna['photo'] != null)
                                {
                                    $photo = $pengguna['photo'];
                                }
                                else {
                                    $photo = 'default.png';
                                }
                                ?>
                                <div style="height: 150px; width: 150px; background-image: url('<?php echo base_url(); ?>assets/img/panel_user/user/<?php echo $photo; ?>');" class="uk-margin-small-left uk-background-cover uk-background-top-center uk-border-circle"></div>
                                <table class="uk-table">
                                    <tbody>
                                        <tr>
                                            <th>Nama</th>
                                            <td>: <?php echo $pengguna['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>: <?php echo $pengguna['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>No Telpon</th>
                                            <td>: <?php echo $pengguna['no_telp']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Pengguna</th>
                                            <td>: <?php echo $pengguna['username']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>PIN</th>
                                            <td>: <?php echo $pengguna['pin']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>: <?php if($pengguna['status'] == '0') echo 'Blokir'; elseif($pengguna['status'] == '1') echo 'Register'; else echo 'Aktif'; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Terdaftar</th>
                                            <td>: <?php echo date('d F Y, H:i:s', strtotime($pengguna['create_at'])); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Saldo Pengguna</th>
                                            <td>: <?php echo 'Rp. '.number_format($pengguna['saldo'],2,',','.');; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Coin Pengguna</th>
                                            <td>: <?php echo $pengguna['coin']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>API Key</th>
                                            <td>: <?php echo $pengguna['api']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>