<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_spesial extends CI_Controller {

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
        
		$where_transaksi = array('type' => '2', );
        $data['transaksi'] = $this->M_admin->select_where('transaksi', $where_transaksi)->result_array();

		$this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/spesial_transaksi', $data);
        $this->load->view('admin_panel/layout/footer');
	}
    function update_status()
	{
		$get = $this->input->get();

		$where = array('id' => $get['id'], );
		$set = array('status' => $get['status'], );

		$transaksi = $this->M_admin->select_where('transaksi', $where)->row_array();

		$this->M_admin->update_data('transaksi', $set, $where);

		if($get['status'] == '1')
		{
			$where_pengguna = array('id' => $transaksi['pengguna_id'], );
			$data_pengguna = $this->M_admin->select_where('pengguna', $where_pengguna)->row_array();

			if($data_pengguna != null)
			{
				$saldo = $data_pengguna['saldo']-$transaksi['bayar_saldo'];
				$coin = ($data_pengguna['coin']-$transaksi['bayar_coin'])+$transaksi['promo_coin'];

				echo $saldo;
				echo $coin; 
				$set_pengguna = array(
					'saldo' => $saldo, 
					'coin' => $coin, 
				);
				$this->M_admin->update_data('pengguna', $set_pengguna, $where_pengguna);
			}
		}
		if($get['status'] == '2' && $transaksi['status'] == 1)
		{
			$where_pengguna = array('id' => $transaksi['pengguna_id'], );
			$data_pengguna = $this->M_admin->select_where('pengguna', $where_pengguna)->row_array();

			if($data_pengguna != null)
			{
				$saldo = $data_pengguna['saldo']+$transaksi['bayar_saldo'];
				$coin = ($data_pengguna['coin']+$transaksi['bayar_coin'])-$transaksi['promo_coin'];

				$set_pengguna = array(
					'saldo' => $saldo, 
					'coin' => $coin, 
				);
				$this->M_admin->update_data('pengguna', $set_pengguna, $where_pengguna);
			}
		}
		if($get['status'] == '3' && $transaksi['status'] == 1)
		{
			$where_pengguna = array('id' => $transaksi['pengguna_id'], );
			$data_pengguna = $this->M_admin->select_where('pengguna', $where_pengguna)->row_array();

			if($data_pengguna != null)
			{
				$saldo = $data_pengguna['saldo']+$transaksi['bayar_saldo'];
				$coin = ($data_pengguna['coin']+$transaksi['bayar_coin'])-$transaksi['promo_coin'];

				$set_pengguna = array(
					'saldo' => $saldo, 
					'coin' => $coin, 
				);
				$this->M_admin->update_data('pengguna', $set_pengguna, $where_pengguna);
			}
		}
		redirect(base_url('admin_panel/transaksi_spesial'));
	}
}
