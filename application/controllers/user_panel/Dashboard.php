<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
            'page' => 'user-dashboard', 
        );

		$id_pengguna = $this->session->userdata('pulsavip_user_id');

		$where = array('id' => $id_pengguna, );

		$pembelian = $this->kategori_pembelian_ppob();
		$data['pembelian'] = $pembelian['data'];
		$pembayaran = $this->kategori_pembayaran_ppob();
		$spesial_produk = $this->M_admin->select_all('produk')->result_array();
		
		$data['pembayaran'] = $pembayaran['data'];
		$data['spesial_produk'] = $spesial_produk;

		$where_grafik_pembelian = array('type' => '0', );
		$where_grafik_pembayaran = array('type' => '1', );

		$data['jumlah_pembelian'] = $this->M_admin->select_where('transaksi', $where_grafik_pembelian)->num_rows();
		$data['jumlah_pembayaran'] = $this->M_admin->select_where('transaksi', $where_grafik_pembayaran)->num_rows();

		$data['persen_pembelian'] = ($data['jumlah_pembelian']/($data['jumlah_pembelian']+$data['jumlah_pembayaran']))*100;
		$data['persen_pembayaran'] = ($data['jumlah_pembayaran']/($data['jumlah_pembelian']+$data['jumlah_pembayaran']))*100;

		$data['pengguna'] = $this->M_admin->select_where('pengguna', $where)->row_array();
		
		$this->load->view('user_panel/layout/header', $header);
        $this->load->view('user_panel/dashboard', $data);
        $this->load->view('user_panel/layout/footer');
	}

	// API PEMBELIAN
	function kategori_pembelian_ppob()
	{
		$url = 'https://tripay.id/api/v2/pembelian/category/';

		$header = array(
			'Accept: application/json',
			'Authorization: Bearer 21Xgw1mvNCKutM7pjQvf2mXdQwxKN7V0', // Ganti [apikey] dengan API KEY Anda
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_POST, 1);
		$result = curl_exec($ch);

		if(curl_errno($ch)){
			return 'Request Error:' . curl_error($ch);
		}

		$array_result = json_decode($result, true);
		return $array_result;
	}
	
	public function operator_pembelian_ppob()
	{

		$url = 'https://tripay.id/api/v2/pembelian/operator/';

		$header = array(
			'Accept: application/json',
			'Authorization: Bearer 21Xgw1mvNCKutM7pjQvf2mXdQwxKN7V0', // Ganti [apikey] dengan API KEY Anda
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		$result = curl_exec($ch);

		if(curl_errno($ch)){
			return 'Request Error:' . curl_error($ch);
		}
		$array_result = json_decode($result, true);
		$data_result = $array_result['data'];
		
		echo $result;
	}
	public function produk_pembelian_ppob()
	{
		$url = 'https://tripay.id/api/v2/pembelian/produk/';

		$header = array(
			'Accept: application/json',
			'Authorization: Bearer 21Xgw1mvNCKutM7pjQvf2mXdQwxKN7V0', // Ganti [apikey] dengan API KEY Anda
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		$result = curl_exec($ch);

		if(curl_errno($ch)){
			return 'Request Error:' . curl_error($ch);
		}
		echo $result;
	}
	public function detail_pembelian_ppob()
	{
		$post = $this->input->post();
		$produk = $post['produk'];

		$url = 'https://tripay.id/api/v2/pembelian/produk/cek';

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
		echo $result;
	}

	// API Pembayaran
	function kategori_pembayaran_ppob()
	{
		$url_pembayaran = 'https://tripay.id/api/v2/pembayaran/category/';

		$header_pembayaran = array(
			'Accept: application/json',
			'Authorization: Bearer 21Xgw1mvNCKutM7pjQvf2mXdQwxKN7V0', // Ganti [apikey] dengan API KEY Anda
		);

		$ch_pembayaran = curl_init();
		curl_setopt($ch_pembayaran, CURLOPT_URL, $url_pembayaran);
		curl_setopt($ch_pembayaran, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch_pembayaran, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch_pembayaran, CURLOPT_HTTPHEADER, $header_pembayaran);
		curl_setopt($ch_pembayaran, CURLOPT_POST, 1);
		$result_pembayaran = curl_exec($ch_pembayaran);

		if(curl_errno($ch_pembayaran)){
			return 'Request Error:' . curl_error($ch_pembayaran);
		}

		$array_result_pembayaran = json_decode($result_pembayaran, true);
		return $array_result_pembayaran;
	}
	function operator_pembayaran_ppob()
	{
		$url = 'https://tripay.id/api/v2/pembayaran/operator/';

		$header = array(
			'Accept: application/json',
			'Authorization: Bearer 21Xgw1mvNCKutM7pjQvf2mXdQwxKN7V0', // Ganti [apikey] dengan API KEY Anda
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_POST, 1);
		$result = curl_exec($ch);

		if(curl_errno($ch)){
			return 'Request Error:' . curl_error($ch);
		}
		echo $result;
	}
	function produk_pembayaran_ppob()
	{	
		$url = 'https://tripay.id/api/v2/pembayaran/produk/';

		$header = array(
			'Accept: application/json',
			'Authorization: Bearer 21Xgw1mvNCKutM7pjQvf2mXdQwxKN7V0', // Ganti [apikey] dengan API KEY Anda
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_POST, 1);
		$result = curl_exec($ch);

		if(curl_errno($ch)){
			return 'Request Error:' . curl_error($ch);
		}
		echo $result;                            
						
	}
	function detail_pembayaran_ppob()
	{
		$post = $this->input->post();

		$url = 'https://tripay.id/api/v2/pembayaran/produk/cek';

		$header = array(
			'Accept: application/json',
			'Authorization: Bearer 21Xgw1mvNCKutM7pjQvf2mXdQwxKN7V0', // Ganti [apikey] dengan API KEY Anda
		);

		$data = array(
			'code' => $post['produk'], // Kode Operator
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
	// API Produk Spesial
	function produk_spesial()
	{
		$post = $this->input->post();
		$where_produk = array('id' => $post['id'], );

		$produk_spesial = $this->M_admin->select_where('produk', $where_produk)->row_array();
		$result = json_encode($produk_spesial);

		echo $result;
	}
	
	//get semua channel pembayaran
	function all_channel()
	{
		$apiKey = 'DEV-elvmT8Xgzrnp7uJbVOJuG7MpvFUuWBS25bWXsxsg';

		$payload = [
		'code'	=> ''
		];

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_FRESH_CONNECT     => true,
		CURLOPT_URL               => "https://tripay.co.id/api-sandbox/merchant/payment-channel?".http_build_query($payload),
		CURLOPT_RETURNTRANSFER    => true,
		CURLOPT_HEADER            => false,
		CURLOPT_HTTPHEADER        => array(
			"Authorization: Bearer ".$apiKey
		),
		CURLOPT_FAILONERROR       => false
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$array_response = json_decode($response, true);
		return $array_response;
	}
	function channel($code)
	{
		$apiKey = 'DEV-elvmT8Xgzrnp7uJbVOJuG7MpvFUuWBS25bWXsxsg';

		$payload = [
		'code'	=> $code
		];

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_FRESH_CONNECT     => true,
		CURLOPT_URL               => "https://tripay.co.id/api-sandbox/merchant/payment-channel?".http_build_query($payload),
		CURLOPT_RETURNTRANSFER    => true,
		CURLOPT_HEADER            => false,
		CURLOPT_HTTPHEADER        => array(
			"Authorization: Bearer ".$apiKey
		),
		CURLOPT_FAILONERROR       => false
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$array_response = json_decode($response, true);
		return $array_response;
	}
	public function isi_saldo()
	{
		$header = array(
            'page' => 'user-dashboard', 
        );

		$data['channel'] = $this->all_channel();

		$maxid = $this->M_admin->select_select('max(id) as max_id', 'topup')->row_array();

		if($maxid == null)
		{
			$data['id'] = 1;
		}
		else {
			$data['id'] = $maxid['max_id']+1;
		}

		$this->load->view('user_panel/layout/header', $header);
        $this->load->view('user_panel/saldo', $data);
        $this->load->view('user_panel/layout/footer');
	}
	public function checkout_isi_saldo()
	{
		$header = array(
			'page' => 'user-dashboard', 
		);
		
		$id_user = $this->session->userdata('pulsavip_user_id');

		$where = array('id' => $id_user, );
		$pengguna = $this->M_admin->select_where('pengguna', $where)->row_array();

		$post = $this->input->post();

		$biaya_tripay = $this->channel($post['metode']);

		$jumlah_bayar = $post['nominal_topup']+$biaya_tripay['data'][0]['total_fee']['flat'];

		$data = array(
			'id' => $post['id'],
			'metode' => $post['metode'],
			'nama_metode' => $biaya_tripay['data'][0]['name'],
			'nominal_topup' => $post['nominal_topup'],
			'admin' => $biaya_tripay['data'][0]['total_fee']['flat'],
			'total' => $jumlah_bayar,
			'ref' => $pengguna['id'].$post['id'],
			'pengguna' => $pengguna
		);

		$this->load->view('user_panel/layout/header', $header);
		$this->load->view('user_panel/checkout_isi_saldo', $data);
		$this->load->view('user_panel/layout/footer');
				
	}
	//membuat signature tripay
	function create_signature($merchantRef, $amount)
	{
		$privateKey = 'TCSSB-24QY8-vA0lU-OXVrq-UiKFN';
		$merchantCode = 'T4799';
		$merchantRef = $merchantRef;
		$amount = $amount;

		$signature = hash_hmac('sha256', $merchantCode.$merchantRef.$amount, $privateKey);

		return $signature;
	}
	public function isi_aksi()
	{
		$post = $this->input->post();
		$id_pengguna = $this->session->userdata('pulsavip_user_id');

		$apiKey = 'DEV-elvmT8Xgzrnp7uJbVOJuG7MpvFUuWBS25bWXsxsg';
		$privateKey = 'oaopg-KPnof-aq5q6-xWtVo-9iGRx';
		$merchantCode = 'T4799';
		$merchantRef = $post['merchantRef'];
		$amount = $post['amount'];

		$data = [
		'method'            => $post['metode'],
		'merchant_ref'      => $merchantRef,
		'amount'            => $amount,
		'customer_name'     => $post['customer_name'],
		'customer_email'    => $post['customer_email'],
		'customer_phone'    => $post['customer_phone'],
		'order_items'       => [
			[
			'sku'       => 'TOPUP',
			'name'      => 'Top Up Saldo '.$amount,
			'price'     => $amount,
			'quantity'  => 1
			]
		],
		'callback_url'      => base_url('user_panel/dashboard/callback'),
		'return_url'        => base_url('user_panel/dashboard/detail_riwayat_saldo'),
		'expired_time'      => (time()+(24*60*60)), // 24 jam
		'signature'         => $this->create_signature($merchantRef, $amount)
		];
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_FRESH_CONNECT     => true,
		CURLOPT_URL               => "https://tripay.co.id/api-sandbox/transaction/create",
		CURLOPT_RETURNTRANSFER    => true,
		CURLOPT_HEADER            => false,
		CURLOPT_HTTPHEADER        => array(
			"Authorization: Bearer ".$apiKey
		),
		CURLOPT_FAILONERROR       => false,
		CURLOPT_POST              => true,
		CURLOPT_POSTFIELDS        => http_build_query($data)
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		echo $response;

		$array_response = json_decode($response);
		$data_response = $array_response->data;

		$data_insert = array(
			'id' => $post['id'], 
			'ref' => $data_response->reference, 
			'id_pengguna' => $id_pengguna, 
			'metode' => $post['metode'], 
			'fee_tripay' => $post['fee_tripay'], 
			'nominal' => $amount, 
			'status' => 'UNPAID', 
			'expired_time' => $stop_date = date('Y-m-d H:i:s', strtotime('+1 day')), 
			'create_at' => date('Y-m-d H:i:s'), 
			'pay_at' => null, 
		);
		$this->M_admin->insert_data('topup', $data_insert);

		redirect(base_url('detail_riwayat_saldo?ref='.$data_response->reference));

	}
	function riwayat_saldo()
	{
		$header = array('page' => 'user-dashboard', );

		$id_pengguna = $this->session->userdata('pulsavip_user_id');

		$where_unpaid = array('id_pengguna' => $id_pengguna, 'status' => 'UNPAID');
		$data['topup_unpaid'] = $this->M_admin->select_select_where_orderBy('*', 'topup', $where_unpaid, 'status ASC')->result_array();
		$where_xunpaid = array('id_pengguna' => $id_pengguna, 'status !=' => 'UNPAID');
		$data['topup_xunpaid'] = $this->M_admin->select_select_where_orderBy('*', 'topup', $where_xunpaid, 'status ASC')->result_array();

		//Riwayat Saldo
		$where_topup_paid = array(
			'id_pengguna' => $id_pengguna, 
			'status' => 'PAID'
		);
		$where_transaksi = array(
			'pengguna_id' => $id_pengguna,
			'status' => '1' 
		);

		$data_topup_paid = $this->M_admin->select_where('topup', $where_topup_paid)->result_array();
		$data_transaksi = $this->M_admin->select_where('transaksi', $where_transaksi)->result_array();

		$data_riwayat = array();
		$i = 0;
		
		foreach ($data_transaksi as $a) {
			$data_riwayat[$i] = array(
				'judul' => $a['produk'],
				'tanggal' => $a['tgl_transaksi'],
				'nominal' => $a['harga_vip'],
				'type' => 'transaksi'
			);
			$i++;
		}
		foreach ($data_topup_paid as $a) {
			$data_riwayat[$i] = array(
				'judul' => $a['metode'],
				'tanggal' => $a['create_at'],
				'nominal' => $a['nominal'] ,
				'type' => 'topup'
			);
			$i++;
		}
		usort($data_riwayat, function($a, $b) {
			return new DateTime($a['tanggal']) <=> new DateTime($b['tanggal']);
		});

		$data['transaksi'] = array_reverse($data_riwayat);

		$this->load->view('user_panel/layout/header', $header);
		$this->load->view('user_panel/riwayat_saldo', $data);
		$this->load->view('user_panel/layout/footer');
	}
	function detail_riwayat_saldo()
	{
		$header = array('page' => 'user-dashboard', );

		$get = $this->input->get();
		
		$apiKey = 'DEV-elvmT8Xgzrnp7uJbVOJuG7MpvFUuWBS25bWXsxsg';

		$payload = [
			'reference'	=> $get['ref']
		];

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_FRESH_CONNECT     => true,
		CURLOPT_URL               => "https://tripay.co.id/api-sandbox/transaction/detail?".http_build_query($payload),
		CURLOPT_RETURNTRANSFER    => true,
		CURLOPT_HEADER            => false,
		CURLOPT_HTTPHEADER        => array(
			"Authorization: Bearer ".$apiKey
		),
		CURLOPT_FAILONERROR       => false,
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$array_response = json_decode($response);
		$data_response = $array_response->data;
		$data['topup'] = $data_response;

		$this->load->view('user_panel/layout/header', $header);
		$this->load->view('user_panel/detail_riwayat_saldo', $data);
		$this->load->view('user_panel/layout/footer');

	}
}
