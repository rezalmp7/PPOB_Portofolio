<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

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

		$this->load->model("M_admin");
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
            'page' => 'admin-kontak', 
        );

        $data['harga'] = $this->M_admin->select_all('harga_api')->result_array();

		$this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/harga', $data);
        $this->load->view('admin_panel/layout/footer');
	}
	public function tambah()
	{
		$where_notif = array(
			'type' => '2',
			'status' => '0', 
		);
		$select_notif = $this->M_admin->select_where('transaksi', $where_notif)->num_rows();
		$header = array(
			'select_notif' => $select_notif,
            'page' => 'admin-kontak', 
        );

		$this->load->view('admin_panel/layout/header', $header);
		$this->load->view('admin_panel/harga_tambah');
		$this->load->view('admin_panel/layout/footer');
	}
	function tambah_aksi()
	{
		$post = $this->input->post();

		$data = array(
			'start' => $post['harga_awal'], 
			'end' => $post['harga_akhir'],
			'keuntungan' => $post['keuntungan']
		);

		$this->M_admin->insert_data('harga_api', $data);

		redirect(base_url('admin_panel/harga'));
	}
	public function edit()
	{
		$where_notif = array(
			'type' => '2',
			'status' => '0', 
		);
		$select_notif = $this->M_admin->select_where('transaksi', $where_notif)->num_rows();
		$header = array(
			'select_notif' => $select_notif,
            'page' => 'admin-kontak', 
        );

		$get = $this->input->get();
		
		$where = array(
			'id' => $get['id'], 
		);
		
		$data['harga'] = $this->M_admin->select_where('harga_api', $where)->row_array();

		$this->load->view('admin_panel/layout/header', $header);
		$this->load->view('admin_panel/harga_edit', $data);
		$this->load->view('admin_panel/layout/footer');
	}
	function edit_aksi()
	{
		$post = $this->input->post();

		$where = array('id' => $post['id'], );
		$set = array(
			'start' => $post['harga_awal'], 
			'end' => $post['harga_akhir'], 
			'keuntungan' => $post['keuntungan'], 
		);
		$this->M_admin->update_data('harga_api', $set, $where);

		redirect(base_url('admin_panel/harga'));
	}
	function hapus()
	{
		$get = $this->input->get();

		$where = array('id' => $get['id'], );

		$this->M_admin->delete_data('harga_api', $where);

		redirect(base_url('admin_panel/harga'));
	}
}
