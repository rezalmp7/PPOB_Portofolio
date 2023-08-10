<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

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

        $where = array('pengguna_id' => $id_pengguna);

        $data['transaksi'] = $this->M_admin->select_select_where_orderBy('*', 'transaksi', $where, 'tgl_transaksi DESC')->result_array();
		
		$this->load->view('user_panel/layout/header', $header);
        $this->load->view('user_panel/riwayat', $data);
        $this->load->view('user_panel/layout/footer');
	}
}