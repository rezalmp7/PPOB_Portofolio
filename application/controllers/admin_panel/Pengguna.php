<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

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
            'page' => 'admin-pengguna', 
        );

		$data['pengguna'] = $this->M_admin->select_all('pengguna')->result_array();

		$this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/pengguna',$data);
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
            'page' => 'admin-pengguna', 
        );

		$get = $this->input->get();

		$where = array('id' => $get['id'], );

		$data['pengguna'] = $this->M_admin->select_where('pengguna', $where)->row_array();

		$this->load->view('admin_panel/layout/header', $header);
		$this->load->view('admin_panel/pengguna_detail', $data);
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
            'page' => 'admin-pengguna', 
        );

		$cek_max_id = $this->M_admin->select_select_limit('max(id) as max_id', 'pengguna', '1')->row_array();

		if($cek_max_id != null)
		{
			$data['id'] = $cek_max_id['max_id']+1;
		}
		else {
			$data['id'] = 1;
		}

        $this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/pengguna_tambah', $data);
        $this->load->view('admin_panel/layout/footer');
    }
	function tambah_aksi()
	{
		$post = $this->input->post();

		$password = md5($post['password']);

		$data = array(
			'id' => $post['id'], 
			'nama_depan' => $post['nama_depan'], 
			'nama_belakang' => $post['nama_belakang'], 
			'email' => $post['email'], 
			'no_telp' => $post['no_telp'], 
			'username' => $post['username'], 
			'pin' => $post['pin'], 
			'status' => $post['status'], 
			'password' => $password, 
		);

		$this->M_admin->insert_data('pengguna', $data);

		redirect(base_url('admin_panel/pengguna'));
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
            'page' => 'admin-pengguna', 
        );
		$get = $this->input->get();

		$where = array(
			'id' => $get['id'], 
		);
		$data['pengguna'] = $this->M_admin->select_where('pengguna', $where)->row_array();

		$this->load->view('admin_panel/layout/header', $header);
		$this->load->view('admin_panel/pengguna_edit', $data);
		$this->load->view('admin_panel/layout/footer');
	}
	function edit_aksi()
	{
		$post = $this->input->post();

		if($post['password'] != null)
		{
			$password = md5($post['password']);
		}
		else {
			$password = $post['password_lama'];
		}
		
		$where = array(
			'id' => $post['id'], 
		);
		$set = array(
			'id' => $post['id'], 
			'nama_depan' => $post['nama_depan'], 
			'nama_belakang' => $post['nama_belakang'], 
			'email' => $post['email'], 
			'no_telp' => $post['no_telp'], 
			'username' => $post['username'], 
			'pin' => $post['pin'], 
			'status' => $post['status'], 
			'password' => $password, 
		);

		$this->M_admin->update_data('pengguna', $set, $where);

		redirect(base_url('admin_panel/pengguna'));
	}
	function hapus()
	{
		$get = $this->input->get();

		$where = array(
			'id' => $get['id'], 
		);

		$this->M_admin->delete_data('pengguna', $where);
		
		redirect(base_url('admin_panel/pengguna'));
	}
}
