<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leaderboard extends CI_Controller {

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
            'page' => 'user-leaderboard', 
        );

		$where_pengguna = array('status' => '2', );
		$pengguna = $this->M_admin->select_where('pengguna', $where_pengguna)->result_array();
		$data_pesanan = array();
		$data_deposit = array();

		foreach ($pengguna as $a) {
			$where_transaksi = array('pengguna_id' => $a['id'], 'status' => '1' );
			$select_transaksi = $this->M_admin->select_select_where('sum(harga_vip) as nominal_transaksi', 'transaksi', $where_transaksi)->row_array();
			if($select_transaksi['nominal_transaksi'] != null)
			{
				$nominal_transaksi = $select_transaksi['nominal_transaksi'];
			}
			else {
				$nominal_transaksi = 0;
			}
			$data_pesanan[] = array(
				'id' => $a['id'],
				'nama' => $a['nama_depan'].' '.$a['nama_belakang'],
				'nominal' => $nominal_transaksi 
			);
		}
		foreach ($pengguna as $b) {
			$where_topup = array('id_pengguna' => $b['id'], 'status' => 'PAID' );
			$select_topup = $this->M_admin->select_select_where('sum(nominal) as nominal_topup', 'topup', $where_topup)->row_array();
			if($select_topup['nominal_topup'] != null)
			{
				$nominal_topup = $select_topup['nominal_topup'];
			}
			else {
				$nominal_topup = 0;
			}
			$data_deposit[] = array(
				'id' => $b['id'],
				'nama' => $b['nama_depan'].' '.$b['nama_belakang'],
				'nominal' => $nominal_topup 
			);
		}
		arsort($data_pesanan);
		$data['pesanan'] = $data_pesanan;
		ksort($data_deposit);
		$data['deposit'] = $data_deposit;

		$this->load->view('user_panel/layout/header', $header);
        $this->load->view('user_panel/leaderboard', $data);
        $this->load->view('user_panel/layout/footer');
	}
}
