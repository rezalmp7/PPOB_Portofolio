<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_topup extends CI_Controller {

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
            'page' => 'admin-laporan-topup', 
        );

		$data['laporan'] = $this->M_admin->select_select_join_2table_type_orderBy('topup.create_at, pengguna.nama_depan, pengguna.nama_belakang, topup.metode, topup.nominal, topup.coin', 'topup', 'pengguna', 'topup.id_pengguna = pengguna.id', 'left', 'topup.create_at DESC')->result_array();

		$this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/laporan_topup', $data);
        $this->load->view('admin_panel/layout/footer');
	}
	public function cetak()
	{
		$data['cetak'] = $this->M_admin->select_select_join_2table_type_orderBy('topup.create_at, pengguna.nama_depan, pengguna.nama_belakang, topup.metode, topup.nominal, topup.fee_tripay', 'topup', 'pengguna', 'topup.id_pengguna = pengguna.id', 'left', 'topup.create_at DESC')->result_array();

		$this->load->view('admin_panel/laporan_topup_cetak', $data);
	}
}
