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
            <th>Pengguna</th>
            <th>Top Up Type</th>
            <th>Jumlah Top Up</th>
            <th>Fee Tripay</th>
        </tr>
        <?php
        foreach ($cetak as $a) {
        ?>
        <tr>
            <td><?php echo date('d/m/Y H:i:s', strtotime($a['create_at'])); ?></td>
            <td><?php echo $a['nama_depan'].' '.$a['nama_belakang']; ?></td>
            <td><?php echo $a['metode']; ?></td>
            <td>Rp <?php echo number_format($a['nominal'],0,',','.'); ?></td>
            <td>Rp <?php echo number_format($a['fee_tripay'],0,',','.'); ?></td>
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