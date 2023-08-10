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

		if($this->session->userdata('pulsavip_admin_status') != 'pulsavip_admin_login')
        {
            redirect(base_url('admin_panel/login'));
        }

		$this->load->model('M_admin');
    }
	public function index()
	{
		$where_notif = array(
			'type' => '2',
			'status' => '0', 
		);
		$select_notif = $this->M_admin->select_where('transaksi', $where_notif)->num_rows();
		$header = array(
			'select_notif' => $select_notif,
            'page' => 'admin-dashboard', 
        );

		$data['saldo'] = $this->cek_saldo();
		$data['jumlah_pengguna'] = $this->M_admin->select_all('pengguna')->num_rows();
		$data['jumlah_transaksi'] = $this->M_admin->select_all('transaksi')->num_rows();

		$tgl_ini = date('Ymd');
		$bulan_ini = date('m');
		$bulan_1 = date('m', strtotime('-1 month', strtotime($tgl_ini)));
		$bulan_2 = date('m', strtotime('-2 month', strtotime($tgl_ini)));
		$bulan_3 = date('m', strtotime('-3 month', strtotime($tgl_ini)));

		$data['nama_bulan_ini'] = date('M');
		$data['nama_bulan_1'] = date('M', strtotime('-1 month', strtotime($tgl_ini)));
		$data['nama_bulan_2'] = date('M', strtotime('-2 month', strtotime($tgl_ini)));
		$data['nama_bulan_3'] = date('M', strtotime('-3 month', strtotime($tgl_ini)));

		$data['jumlah_transaksi_bulan'] = $this->M_admin->select_query("SELECT * FROM transaksi WHERE MONTH(tgl_transaksi) = $bulan_ini AND status = '1'")->num_rows();
		$data['jumlah_transaksi_bulan_1'] = $this->M_admin->select_query("SELECT * FROM transaksi WHERE MONTH(tgl_transaksi) = $bulan_1 AND status = '1'")->num_rows();
		$data['jumlah_transaksi_bulan_2'] = $this->M_admin->select_query("SELECT * FROM transaksi WHERE MONTH(tgl_transaksi) = $bulan_2 AND status = '1'")->num_rows();
		$data['jumlah_transaksi_bulan_3'] = $this->M_admin->select_query("SELECT * FROM transaksi WHERE MONTH(tgl_transaksi) = $bulan_3 AND status = '1'")->num_rows();

		$tgl_ini = date('Ymd');
		$where_log_topup = array('topup.notif' => '0', 'topup.create_at' => $tgl_ini);
		$where_log_transaksi = array('transaksi.notif' => '0', 'transaksi.tgl_transaksi' => $tgl_ini);
		$log_topup = $this->M_admin->select_select_where_join_2table_type('topup.id, pengguna.id, pengguna.nama_depan, pengguna.nama_belakang, pengguna.photo, topup.create_at, topup.nominal','topup','pengguna','topup.id_pengguna = pengguna.id', $where_log_topup, 'left')->result_array();
		$log_transaksi = $this->M_admin->select_select_where_join_2table_type('transaksi.id, pengguna.id, pengguna.nama_depan, pengguna.nama_belakang, pengguna.photo, transaksi.tgl_transaksi, transaksi.produk', 'transaksi', 'pengguna', 'transaksi.pengguna_id = pengguna.id', $where_log_transaksi, 'left')->result_array();

		$log = array();
		foreach ($log_topup as $a) {
			if($a['photo'] == null)
			{
				$photo = 'default.png';
			}
			else {
				$photo = $a['photo'];
			}
			$log[] = array(
				'nama' => $a['nama_depan'].' '.$a['nama_belakang'], 
				'tgl' => $a['create_at'],
				'photo' => $photo,
				'pesan' => "Top Up Senilai ".$a['nominal']
			);
		}
		foreach ($log_transaksi as $b) {
			if($b['photo'] == null)
			{
				$photo = 'default.png';
			}
			else {
				$photo = $b['photo'];
			}
			$log[] = array(
				'nama' => $a['nama_depan'].' '.$a['nama_belakang'], 
				'tgl' => $b['tgl_transaksi'],
				'photo' => $photo,
				'pesan' => "Melakukan Transaksi Dengan Produk".b['produk']
			);
		}
		$data['log_hari_ini'] = $log;

		$this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/dashboard',$data);
	}
	function cek_saldo()
	{
		$url = 'https://tripay.co.id/api/v2/ceksaldo/';

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
		return 0;
	}
}
