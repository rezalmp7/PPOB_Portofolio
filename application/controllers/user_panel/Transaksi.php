<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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

		if($this->session->userdata('pulsavip_user_status') != 'pulsavip_user_login')
        {
            redirect(base_url('login'));
        }

		$this->load->model('M_admin');
    }
	public function index()
	{
        $header = array(
            'page' => 'user-bantuan-detail', 
        );
		$this->load->view('user_panel/layout/header', $header);
        $this->load->view('user_panel/transaksi');
        $this->load->view('user_panel/layout/footer');
	}
	public function checkout()
	{
		

		$header = array(
			'page' => 'user-bantuan-detail', 
		);

		$id_pengguna = $this->session->userdata('pulsavip_user_id');
		
		$where_pengguna = array(
			'id' => $id_pengguna, 
		);
		$data['pengguna'] = $this->M_admin->select_where('pengguna', $where_pengguna)->row_array();

		$saldo_min = $this->M_admin->select_where('konfigurasi', array('id' => 4))->row_array();
		$where_jumlah_saldo = array('id_pengguna' => $id_pengguna, 'status' => 'PAID');
		$jumlah_saldo = $this->M_admin->select_select_where('sum(nominal) as nominal', 'topup', $where_jumlah_saldo)->row_array();
		
		if($jumlah_saldo['nominal'] >= $saldo_min['value'])
		{
			
			$data['type'] = 'produk_ppob';
			$post = $this->input->post();
			
			if($post['pin'] == $data['pengguna']['pin'])
			{
				$data['transaksi'] = $post;

				$detail_produk = $this->detail_pembelian_ppob($post['produk']);
				$array_detail_produk = json_decode($detail_produk);
				$data_detail_produk = $array_detail_produk->data;
				$data['detail_produk'] = $data_detail_produk;

				$where_vip = array(
					'start <=' => $data_detail_produk->price,
					'end >=' => $data_detail_produk->price
				);
				$data['harga'] = $this->M_admin->select_where('harga_api', $where_vip)->row_array();

				//cek promo
				$where_cek_promo = "type=1 OR type=2 AND status=1";
				$data['promo'] = $this->M_admin->select_where('promo', $where_cek_promo)->result_array();

				$this->load->view('user_panel/layout/header', $header);
				$this->load->view('user_panel/transaksi_checkout', $data);
				$this->load->view('user_panel/layout/footer');
			}
			else {
				$this->session->set_flashdata('msg', 'Checkout dibatalkan, PIN Salah');
				redirect(base_url('user_panel/dashboard'));
			}
		}
		else {
			$this->session->set_flashdata('msg', 'Top Up min Rp '.number_format($saldo_min['value'],0,',','.').' sebelum bisa bertransaksi, saldo anda baru terisi '.number_format($jumlah_saldo['nominal'],0,',','.'));
			redirect(base_url('user_panel/dashboard'));
		}
	}
	public function cek_tagihan()
	{
		$header = array(
			'page' => 'user-bantuan-detail', 
		);

		$id_pengguna = $this->session->userdata('pulsavip_user_id');
		$where_pengguna = array(
			'id' => $id_pengguna, 
		);
		$data['pengguna'] = $this->M_admin->select_where('pengguna', $where_pengguna)->row_array();
		$pengguna = $data['pengguna'];
		
		$post = $this->input->post();

		$saldo_min = $this->M_admin->select_where('konfigurasi', array('id' => 4))->row_array();
		$where_jumlah_saldo = array('id_pengguna' => $id_pengguna, 'status' => 'PAID');
		$jumlah_saldo = $this->M_admin->select_select_where('sum(nominal) as nominal', 'topup', $where_jumlah_saldo)->row_array();
		
		if($jumlah_saldo['nominal'] >= $saldo_min['value'])
		{
			if($post['pin'] == $data['pengguna']['pin'])
			{
				$data['transaksi'] = $post;

				$detail_tagihan = $this->cek_tagihan_api($post['produk'], $post['nomor']);
				$array_detail_tagihan = json_decode($detail_tagihan);
				$data_detail_tagihan = $array_detail_tagihan;

				if($data_detail_tagihan->success == false)
				{
					echo $data_detail_tagihan->message;
					$this->session->set_flashdata('msg', $data_detail_tagihan->message);
					redirect(base_url('user_panel/dashboard'));
				}
				else {
					//cek promo
					$where_cek_promo = "type=1 OR type=2 AND status=1";
					$data['promo'] = $this->M_admin->select_where('promo', $where_cek_promo)->result_array();

					$data_db_database = array(
						'id' => $id,
						'trxid' => $id,
						'pembayaran_id' => $post['id_pembayaran'],
						'inquiry' => null,
						'type' => 1,
						'produk' => $post['produk'],
						'phone' => $post['nomor'],
						'no_pengguna' => $post['nomor'],
						'pengguna_id' => $pengguna['id'],
						'pengguna_nama' => $pengguna['nama_depan'].' '.$pengguna['nama_belakang'],
						'harga_api' => $data_detail_tagihan->total,
						'harga_vip' => null,
						'promo_coin' => null,
						'bayar_saldo' => null,
						'bayar_coin' => null, 
						'status' => 4
					);

					$data['tagihan'] = $data_detail_tagihan;

					$this->M_admin->insert_data('transaksi', $data_db_database);

					$this->load->view('user_panel/layout/header', $header);
					$this->load->view('user_panel/pembayaran_cek', $data);
					$this->load->view('user_panel/layout/footer');
				}
			}
			else {
				$this->session->set_flashdata('msg', 'Checkout dibatalkan, PIN Salah');
				redirect(base_url('user_panel/dashboard'));
			}
		}
		else {
			$this->session->set_flashdata('msg', 'Top Up min Rp '.number_format($saldo_min['value'],0,',','.').' sebelum bisa bertransaksi, saldo anda baru terisi '.number_format($jumlah_saldo['nominal'],0,',','.'));
			redirect(base_url('user_panel/dashboard'));
		}
	}
	function cek_tagihan_api($code_produk, $no_pelanggan)
	{
		$url = 'https://tripay.co.id/api/v2/pembayaran/cek-tagihan';

		$header = array(
			'Accept: application/json',
			'Authorization: Bearer 21Xgw1mvNCKutM7pjQvf2mXdQwxKN7V0', // Ganti [apikey] dengan API KEY Anda
		);

		$max_id = $this->M_admin->select_select('max(id) as max_id', 'transaksi')->row_array();
		if($max_id != null)
		{
			$id = $max_id['max_id']+1;
		}
		else {
			$id = 1;
		}

		$data = array(
			'product' => $code_produk, // Masukkan ID Produk (exp : PLN)
			'phone' => '085825220800', // Masukkan No.hp Anda
			'no_pelanggan' => $no_pelanggan, // Masukkan ID Pelanggan (exp: no.meteran/ id pembayaran)
			'api_trxid' => $id, // ID transaksi dari server Anda. (tidak wajib, maks. 25 karakter)
			'pin' => '3946', // Masukkan PIN user (anda)
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);

		if(curl_errno($ch)){
			return 'Request Error:' . curl_error($ch);
		}
		return $result;
	}
	function bayar_tagihan()
	{
		$post = $this->input->post();

		$url = 'https://tripay.co.id/api/v2/transaksi/pembayaran';

		$header = array(
			'Accept: application/json',
			'Authorization: Bearer 21Xgw1mvNCKutM7pjQvf2mXdQwxKN7V0', // Ganti [apikey] dengan API KEY Anda
		);

		$data = array(
			'order_id' => $post['order_id'], // Masukkan ID yang didapat setelah melakukan pengecekan pembayaran
			'api_trxid' => $post['trx_id'], // Atau Anda bisa menggunakan ID transaksi dari server Anda (pilih salah satu)
			'pin' => '2554', // Masukkan PIN user (anda)
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		$result = curl_exec($ch);

		if(curl_errno($ch)){
			return 'Request Error:' . curl_error($ch);
		}
		echo $result;
	}
	function detail_pembelian_ppob($produk)
	{

		$url = 'https://tripay.co.id/api/v2/pembelian/produk/cek';

		$header = array(
			'Accept: application/json',
			'Authorization: Bearer 21Xgw1mvNCKutM7pjQvf2mXdQwxKN7V0', // Ganti [apikey] dengan API KEY Anda
		);

		$data = array(
			'code' => $produk, // Kode Operator
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);

		if(curl_errno($ch)){
			return 'Request Error:' . curl_error($ch);
		}
		return $result;
	}
	public function transaksi_pembelian()
	{
		$post = $this->input->post();

		$id_pengguna = $this->session->userdata('pulsavip_user_id');
		$where_pengguna = array('id' => $id_pengguna, );
		$pengguna = $this->M_admin->select_where('pengguna', $where_pengguna)->row_array();

		if($post[$post['bayar_saldo'] > $pengguna['saldo']])
		{
			$url = 'https://tripay.co.id/api/v2/transaksi/pembelian';

			$header = array(
				'Accept: application/json',
				'Authorization: Bearer 21Xgw1mvNCKutM7pjQvf2mXdQwxKN7V0', // Ganti [apikey] dengan API KEY Anda
			);

			$max_id = $this->M_admin->select_select('max(id) as max_id', 'transaksi')->row_array();

			if($max_id != null)
			{
				$id = $max_id['max_id']+1;
			}
			else {
				$id = 1;
			}

			if($post['operator'] == 'PLN')
			{
				$inquiry = 'PLN';
			}
			else {
				$inquiry = 'I';
			}


			$data = array(
				'inquiry' => $inquiry, // 'PLN' untuk pembelian PLN Prabayar, atau 'I' (i besar) untuk produk lainnya
				'code' => $post['produk'], // kode produk
				'phone' => $post['nomor'], // nohp pembeli
				'no_meter_pln' => $post['nomor'], // khusus untuk pembelian token PLN prabayar
				'api_trxid' => $id, // ID transaksi dari server Anda. (tidak wajib, maks. 25 karakter)
				'pin' => '3946', // pin member
			);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$result = curl_exec($ch);

			if(curl_errno($ch)){
				return 'Request Error:' . curl_error($ch);
			}

			echo $result;
			$callback = $result;
			$array_callback = json_decode($callback);
			$data_callback = $array_callback;

			if($data_callback->success != false)
			{
				$data_db_database = array(
					'id' => $id,
					'trxid' => $id,
					'inquiry' => $inquiry,
					'type' => '0',
					'produk' => $post['produk'],
					'phone' => $post['nomor'],
					'no_pengguna' => $post['nomor'],
					'pengguna_id' => $pengguna['id'],
					'pengguna_nama' => $pengguna['nama_depan'].' '.$pengguna['nama_belakang'],
					'harga_api' => $post['harga_api'],
					'harga_vip' => $post['harga_vip'],
					'promo_coin' => $post['promo_coin'],
					'bayar_saldo' => $post['bayar_saldo'],
					'bayar_coin' => $post['bayar_coin'], 
					'status' => 0
				);

				$this->M_admin->insert_data('transaksi', $data_db_database);

				
				print_r($data_db_database);
				
				$message = $data_callback->message;
				$this->session->set_flashdata('msg', $message);

				redirect(base_url('dashboard'));
			}
			else {
				$message = $data_callback->message;
				$this->session->set_flashdata('msg', $message);

				redirect(base_url('dashboard'));
			}
		}
		else {
			$message = "Saldo Tidak Mencukupi, Silahkan Isi Ulang Saldo";
			$this->session->set_flashdata('msg', $message);

			redirect(base_url('dashboard'));
		}

		redirect(base_url('user_panel/dashboard?msg='.$data_callback->message));
	}
	public function checkout_produk_spesial()
	{
		$header = array(
			'page' => 'user-bantuan-detail', 
		);

		$id_pengguna = $this->session->userdata('pulsavip_user_id');
		$where_pengguna = array(
			'id' => $id_pengguna, 
		);
		$data['type'] = 'produk_spesial';
		$data['pengguna'] = $this->M_admin->select_where('pengguna', $where_pengguna)->row_array();
		
		$post = $this->input->post();
		$saldo_min = $this->M_admin->select_where('konfigurasi', array('id' => 4))->row_array();
		$where_jumlah_saldo = array('id_pengguna' => $id_pengguna, 'status' => 'PAID');
		$jumlah_saldo = $this->M_admin->select_select_where('sum(nominal) as nominal', 'topup', $where_jumlah_saldo)->row_array();
		
		if($jumlah_saldo['nominal'] >= $saldo_min['value'])
		{
			if($post['pin'] == $data['pengguna']['pin'])
			{
				$where_produk = array('id' => $post['id_produk'], );
				$data_detail_produk = $this->M_admin->select_where('produk', $where_produk)->row();
				$data['transaksi'] = $post;
				$data['detail_produk'] = $data_detail_produk;

				$where_vip = array(
					'start <=' => $data_detail_produk->harga,
					'end >=' => $data_detail_produk->harga
				);
				$data['harga'] = $this->M_admin->select_where('harga_api', $where_vip)->row_array();

				//cek promo
				$where_cek_promo = "type=1 OR type=2 AND status=1";
				$data['promo'] = $this->M_admin->select_where('promo', $where_cek_promo)->result_array();

				$this->load->view('user_panel/layout/header', $header);
				$this->load->view('user_panel/transaksi_checkout', $data);
				$this->load->view('user_panel/layout/footer');
			}
			else {
				$this->session->set_flashdata('msg', 'Checkout dibatalkan, PIN Salah');
				redirect(base_url('user_panel/dashboard'));
			}
		}
		else {
			$this->session->set_flashdata('msg', 'Top Up min Rp '.number_format($saldo_min['value'],0,',','.').' sebelum bisa bertransaksi, saldo anda baru terisi '.number_format($jumlah_saldo['nominal'],0,',','.'));
			redirect(base_url('user_panel/dashboard'));
		}
	}
	function transaksi_produk_spesial()
	{
		$post = $this->input->post();

		$id_pengguna = $this->session->userdata('pulsavip_user_id');
		$where_pengguna = array('id' => $id_pengguna, );
		$pengguna = $this->M_admin->select_where('pengguna', $where_pengguna)->row_array();

		if($post['bayar_saldo'] <= $pengguna['saldo'])
		{
			$url = 'https://tripay.co.id/api/v2/transaksi/pembelian';

			$max_id = $this->M_admin->select_select('max(id) as max_id', 'transaksi')->row_array();

			if($max_id != null)
			{
				$id = $max_id['max_id']+1;
			}
			else {
				$id = 1;
			}


			$data_db_database = array(
				'id' => $id,
				'trxid' => "0",
				'inquiry' => "0",
				'type' => '3',
				'produk' => $post['produk'],
				'phone' => $post['nomor'],
				'no_pengguna' => $post['nomor'],
				'pengguna_id' => $pengguna['id'],
				'pengguna_nama' => $pengguna['nama_depan'].' '.$pengguna['nama_belakang'],
				'harga_api' => "0",
				'harga_vip' => $post['harga_vip'],
				'promo_coin' => $post['promo_coin'],
				'bayar_saldo' => $post['bayar_saldo'],
				'bayar_coin' => $post['bayar_coin'], 
				'status' => '0'
			);
			
			$this->M_admin->insert_data('transaksi', $data_db_database);
			
			$message = "Transaksi Diantrekan";
			$this->session->set_flashdata('msg', $message);

			redirect(base_url('user_panel/dashboard'));
		}
		else {
			echo $post['bayar_saldo'].'-'.$pengguna['saldo'];
			$message = "Saldo Tidak Mencukupi, Silahkan Isi Ulang Saldo";
			$this->session->set_flashdata('msg', $message);

			redirect(base_url('user_panel/dashboard'));
		}
	}
}
