<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/uikit/css/uikit.min.css" />
    <script src="<?php echo base_url(); ?>assets/vendor/uikit/js/uikit.min.js"></script>
	<title>MEMBUAT CETAK PRINT LAPORAN DENGAN PHP - WWW.MALASNGODING.COM</title>
    <style>
        table, td, th {
        border: 1px solid black;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        }
    </style>
</head>
<body>
 
	<center>
		<h2 class="uk-margin-remove uk-padding-remove">Laporan Penjualan PPOB</h2>
		<small class="uk-margin-remove uk-padding-remove">www.pulsavip.com</small>
	</center>
	<br/>
    <table>
        <tr>
            <th>Tanggal</th>
            <th>Target</th>
            <th>Layanan</th>
            <th>Produk</th>
            <th>Status</th>
            <th>Harga VIP</th>
        </tr>
        <?php
        foreach ($cetak as $a) {
        ?>
        <tr>
            <td><?php echo date('d/m/Y H:i:s', strtotime($a['tgl_transaksi'])); ?></td>
            <td><?php echo $a['phone']; ?></td>
            <td>
                <?php
                if($a['type'] == '1')
                {
                    echo "PPOB Pembelian";
                }
                elseif ($a['type'] == '2') {
                    echo "PPOB Pembayaran";
                }
                else {
                    echo "Produk Spesial (Internal)";
                }
                ?>
            </td>
            <td><?php echo $a['produk']; ?></td>
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
            <td>Rp <?php echo number_format($a['harga_vip'],0,',','.'); ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
 
	
 
	<script>
		window.print();
	</script>
	
</body>
</html>