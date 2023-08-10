<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_ppob extends CI_Controller {

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
            'page' => 'admin-laporan-ppob', 
        );

		$data['laporan'] = $this->M_admin->select_select_join_2table_type_orderBy('transaksi.tgl_transaksi, pengguna.nama_depan, pengguna.nama_belakang, transaksi.type, transaksi.status, transaksi.produk, transaksi.harga_vip', 'transaksi', 'pengguna', 'transaksi.pengguna_id = pengguna.id', 'left', 'transaksi.tgl_transaksi DESC')->result_array();

		$transaksi_ppob = $this->transaksi_ppob();
		$data['transaksi_ppob'] = $transaksi_ppob['data'];


		$this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/laporan_ppob', $data);
        $this->load->view('admin_panel/layout/footer');
	}
	function transaksi_ppob()
	{
		$url = 'https://tripay.co.id/api/v2/histori/transaksi/all/';

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
	public function cetak()
	{
		$data['cetak'] = $this->M_admin->select_select_orderBy('*', 'transaksi', 'tgl_transaksi DESC')->result_array();

		$this->load->view('admin_panel/laporan_ppob_cetak', $data);
	}
}
