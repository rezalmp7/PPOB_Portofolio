<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

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
            'page' => 'admin-pesan', 
        );

		$data['pesan'] = $this->M_admin->select_all('pesan')->result_array();

		$this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/pesan', $data);
        $this->load->view('admin_panel/layout/footer');
	}
	public function detail()
	{
		$where_notif = array(
			'type' => '2',
			'status' => '0', 
		);
		$select_notif = $this->M_admin->select_where('transaksi', $where_notif)->num_rows();
		$header = array(
			'select_notif' => $select_notif,
            'page' => 'admin-pesan', 
        );
		
		$get = $this->input->get();

		$where = array(
			'id' => $get['id'], 
		);

		$data['pesan'] = $this->M_admin->select_where('pesan', $where)->row_array();

		$this->load->view('admin_panel/layout/header', $header);
		$this->load->view('admin_panel/pesan_detail', $data);
		$this->load->view('admin_panel/layout/footer');
	}
	function hapus()
	{
		$get = $this->input->get();
		
		$where = array('id' => $get['id'], );

		$this->M_admin->delete_data('pesan', $where);

		redirect(base_url('admin_panel/pesan'));
	}
}
