
                <div class="content uk-width-1-1 uk-padding-remove uk-margin-remove">
                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove" uk-grid>
                        <div class="uk-width-1-2 uk-padding-small uk-margin-remove">
                            <div class="uk-width-1-1 uk-child-width-1-3 uk-padding-remove uk-margin-remove" uk-grid>
                                <div class="uk-padding-small uk-padding-remove-horizontal uk-margin-remove uk-text-center poppins-medium color-black">
                                    Saldo Tripay PPOB
                                    <div class="uk-card uk-card-default uk-margin-remove uk-padding-small uk-padding-remove-horizontal uk-border-rounded uk-text-center">
                                        Rp. <?php echo number_format($saldo['data'],0,',','.'); ?>
                                    </div>
                                </div>
                                <div class="uk-padding-small uk-padding-remove-right uk-margin-remove uk-text-center poppins-medium color-black">
                                    Jumlah Pengguna
                                    <div class="uk-card uk-card-default uk-margin-remove uk-padding-small uk-padding-remove-horizontal uk-border-rounded uk-text-center">
                                        <?php echo $jumlah_pengguna; ?>
                                    </div>
                                </div>
                                <div class="uk-padding-small uk-padding-remove-right uk-margin-remove uk-text-center poppins-medium color-black">
                                    Pesanan Masuk
                                    <div class="uk-card uk-card-default uk-margin-remove uk-padding-small uk-padding-remove-horizontal uk-border-rounded uk-text-center">
                                        <?php echo $jumlah_transaksi; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-padding-small uk-margin-remove uk-width-1-1 uk-card-default">
                                <div>
                                    <div class="uk-width-1-1 uk-padding-small uk-margin-remove uk-clearfix">
                                        <span class="uk-float-left poppins-bold">Jumlah Pengguna</span><span class="uk-float-right poppins-light">per bulan</span>
                                    </div>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="aktifitas uk-width-1-2 uk-padding-small uk-margin-remove">
                            <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                <div>
                                    <div class="uk-width-1-1 uk-padding-small uk-margin-remove">
                                        <span class="poppins-bold">23 December, Sunday</span>
                                    </div>
                                    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove">
                                        <?php 
                                        foreach ($log_hari_ini as $a) {
                                        ?>
                                        <div class="uk-card uk-card-default uk-card-body uk-width-1-1 uk-margin-small-top uk-padding-small">
                                            <div class="title poppins-semi-bold color-black"><?php echo $a['pesan']; ?></div>
                                            <div><span class="poppins-light color-grey">Tanggal : </span><span class="tanggal color-black"><?php echo $a['tgl']; ?></span></div>
                                            <div class="uk-margin-remove uk-padding-small uk-padding-remove-horizontal uk-padding-remove-bottom" uk-grid>
                                                <div class="uk-width-auto uk-margin-remove uk-padding-remove"><div class="uk-background-cover" style="width: 30px; height: 30px; background-image: url('<?php echo base_url(); ?>assets/img/panel_user/user/<?php echo $a['photo']; ?>');"></div></div>
                                                <div class="uk-width-expand uk-margin-small-left uk-padding-remove color-black"><?php echo $a['nama']; ?></div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="read-more uk-width-1-1 uk-padding-small uk-text-center uk-margin-remove">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['<?php echo $nama_bulan_3; ?>', '<?php echo $nama_bulan_2; ?>', '<?php echo $nama_bulan_1; ?>', '<?php echo $nama_bulan_ini; ?>'],
                datasets: [{
                    label: 'Jumlah Pengguna',
                    data: [<?php echo $jumlah_transaksi_bulan_3; ?>, <?php echo $jumlah_transaksi_bulan_2; ?>, <?php echo $jumlah_transaksi_bulan_1; ?>, <?php echo $jumlah_transaksi_bulan; ?>],
                    backgroundColor: 'rgba(16, 156, 241, 0.3)',
                    borderColor: 'rgba(16, 156, 241, 1)',
                    borderWidth: 2,
                    tension: 0.4
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false,
                        labels: {
                            color: 'rgb(255, 99, 132)'
                        }
                    },
                    tooltip: {
                        usePointStyle: true,
                        callbacks: {
                            labelPointStyle: function (context) {
                                return {
                                    pointStyle: 'triangle',
                                    rotation: 0
                                };
                            }
                        }
                    }
                }
            }
        });
    </script>
    <!-- JS -->
    <script src="../js/main.js"></script>
</body>

</html>