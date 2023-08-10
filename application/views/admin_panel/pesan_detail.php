                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-small uk-margin-medium-top">
                        <div class="uk-width-1-1 uk-padding-remove uk-margin-remove uk-flex-center" uk-grid>
                            <div class="uk-width-3-5@s uk-border-rounded uk-card uk-card-default uk-border-rounded uk-padding-small uk-margin-remove">
                                <h4 class="poppins-medium"><?php echo $pesan['subjek']; ?></h4>
                                <table class="uk-table">
                                    <tbody>
                                        <tr>
                                            <th>Nama</th>
                                            <td>: <?php echo $pesan['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>: <?php echo $pesan['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>No Telpon</th>
                                            <td>: <?php echo $pesan['no_telp']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pesan</th>
                                            <td>: <?php echo date('d F Y H:i:s', strtotime($pesan['create_at'])); ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan='2'>Pesan</th>
                                        </tr>
                                        <tr>
                                            <td colspan='2'><?php echo $pesan['pesan']; ?></td>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>