<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Callback extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct()
    {
        parent::__construct();

		$this->load->model('M_admin');
    }
	public function callback_pembelian()
	{
		
	}
    public function callback()
    {
		
		$json = file_get_contents("php://input");

		// ambil callback signature
		$callbackSignature = isset($_SERVER['HTTP_X_CALLBACK_SIGNATURE']) ? $_SERVER['HTTP_X_CALLBACK_SIGNATURE'] : '';

		$id_pengguna = $this->session->userdata('pulsavip_user_id');
		$privatekey = 'oaopg-KPnof-aq5q6-xWtVo-9iGRx'; // input your private key to here
		$apikey = 'DEV-elvmT8Xgzrnp7uJbVOJuG7MpvFUuWBS25bWXsxsg'; // input your api key to here

		// generate signature untuk dicocokkan dengan X-Callback-Signature
		$signature = hash_hmac('sha256', $json, 'oaopg-KPnof-aq5q6-xWtVo-9iGRx');

		echo $signature;

		// validasi signature
		if($callbackSignature !== $signature) {
		    exit('Signature tidak valid'); // signature tidak valid, hentikan proses
		} else {
			// Data
			$data = json_decode($json);
			$event = $_SERVER['HTTP_X_CALLBACK_EVENT'];

			print_r($data);

			if($event == 'payment_status'){
			    if($data->status == 'PAID'){
			        // pembayaran sukses, lanjutkan proses sesuai sistem Anda, contoh:
			        $where_update = array('ref' => $data->reference, );
					$set_update = array(
						'status' => 'PAID', 
						'pay_at' => date('Y-m-d H:i:s'), 
					);
					$this->M_admin->update_data('topup', $set_update, $where_update);

                    $select_transaksi = $this->M_admin->select_where('topup', $where_update)->row_array();

                    $where_pengguna = array('id' => $select_transaksi['id_pengguna'], );
                    $select_pengguna = $this->M_admin->select_where('pengguna', $where_pengguna)->row_array();

                    $saldo = $select_pengguna['saldo']+$select_transaksi['nominal'];

                    $set_update_saldo = array('saldo' => $saldo, );

                    //cek promo
                    $where_promo = array(
                        'type' => 3, 
                        'syarat <' => $select_transaksi['nominal']
                    );
                    $promo = $this->M_admin->select_where('promo', $where_promo);
                    $cek_promo = $promo->num_rows();
                    $data_promo = $promo->result_array();
                    
                    $coin = $select_pengguna['coin'];
                    if($cek_promo > 0)
                    {
                        foreach ($data_promo as $a) {
                            $coin = $coin+$a['coin'];
                        }
                    }

                    $set_update_pengguna = array(
                        'saldo' => $saldo,
                        'coin' => $coin
                    );

                    $this->M_admin->update_data('pengguna', $set_update_pengguna, $where_pengguna);

			    } elseif($data->status == 'EXPIRED'){
			        // pembayaran expired, lanjutkan proses sesuai sistem Anda, contoh:
					$where_update = array('ref' => $data->reference, );
					$set_update = array(
						'status' => 'EXPIRED', 
					);
					$this->M_admin->update_data('topup', $set_update, $where_update);
			        
			    } elseif($data->status == 'FAILED'){
			        // pembayaran gagal, lanjutkan proses sesuai sistem Anda, contoh:
					$where_update = array('ref' => $data->reference, );
					$set_update = array(
						'status' => 'FAILED',  
					);
					$this->M_admin->update_data('topup', $set_update, $where_update);
			        
			    } elseif($data->status == 'REFUND'){
			        // pembayaran dikembalikan, lanjutkan proses sesuai sistem Anda, contoh:
					$where_update = array('ref' => $data->reference, );
					$set_update = array(
						'status' => 'REFUND', 
						'pay_at' => date('Y-m-d H:i:s'), 
					);
					$this->M_admin->update_data('topup', $set_update, $where_update);
			        
			    }
			}
		}
    }
	public function callback_tripay()
	{
		// PHP NATIVE
		$secret = 'inisecret';
		$incomingSecret = isset($_SERVER['HTTP_X_CALLBACK_SECRET']) ? $_SERVER['HTTP_X_CALLBACK_SECRET'] : '';

		if( !hash_equals($secret, $incomingSecret) ) {
		    exit("Invalid secret");
		}

		$json = file_get_contents("php://input");

		file_put_contents(__DIR__.'/callback-tripay.txt', $json.PHP_EOL.PHP_EOL, FILE_APPEND | LOCK_EX);

		print_r($json);

		$data = json_decode($json);
		$callback = $data[0];

		echo $callback->status;

		$date_now = date('Y-m-d H:i:s');
		$timestamp = strtotime($date_now);

		
		if($callback->status == '0')
		{
			$set = array(
				'status' => strval($callback->status),
				'tgl_berhasil' => null,
				'tgl_gagal' => null
			);
			$where = array(
				'trxid' => $callback->api_trxid, 
			);

			$this->M_admin->update_data('transaksi', $set, $where);
		}
		elseif($callback->status == '1')
		{
			$set = array(
				'status' => strval($callback->status),
				'tgl_berhasil' => $date_now,
				'tgl_gagal' => null
			);
			$where = array(
				'id' => $callback->api_trxid, 
			);


			$data_transaksi = $this->M_admin->select_where('transaksi', $where)->row_array();

			if($data_transaksi != null)
			{
				$where_update_pengguna = array('id' => $data_transaksi['pengguna_id']);

				$select_pengguna = $this->M_admin->select_where('pengguna',$where_update_pengguna)->row_array();

				if($select_pengguna != null)
				{
					$saldo_pengguna = $select_pengguna['saldo'] - $data_transaksi['bayar_saldo'];
					$coin_pengguna = ($select_pengguna['coin'] - $data_transaksi['bayar_coin'])+$data_transaksi['promo_coin'];
					
					
					$set_update_pengguna = array(
						'saldo' => $saldo_pengguna, 
						'coin' => $coin_pengguna, 
					);

					$this->M_admin->update_data('transaksi', $set, $where);
					$this->M_admin->update_data('pengguna', $set_update_pengguna, $where_update_pengguna);
				}
			}			
		}
		elseif($callback->status == '2')
		{
			$set = array(
				'status' => strval($callback->status),
				'tgl_berhasil' => null,
				'tgl_gagal' => $date_now
			);
			$where = array(
				'id' => $callback->api_trxid, 
			);

			$this->M_admin->update_data('transaksi', $set, $where);
		}
		else {
			$set = array(
				'status' => strval($callback->status),
			);
			$where = array(
				'trxid' => $callback->api_trxid, 
			);

			$this->M_admin->update_data('transaksi', $set, $where);
		}
		
	}
}
