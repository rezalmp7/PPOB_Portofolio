<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
            'page' => 'admin-user', 
        );
		
		$data['user'] = $this->M_admin->select_all('user')->result();

		$this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/user', $data);
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
            'page' => 'admin-user', 
        );
        $this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/user_tambah');
        $this->load->view('admin_panel/layout/footer');
    }
	public function tambah_aksi()
	{
		$post = $this->input->post();
		
		$password = md5($post['password']);

		$data = array(
			'nama' => $post['nama'],
			'email' => $post['email'],
			'username' => $post['username'],
			'password' => $password 
		);

		$this->M_admin->insert_data('user', $data);

		redirect(base_url('admin_panel/user'));
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
            'page' => 'admin-user', 
        );

		$get = $this->input->get();

		$where = array(
			'id' => $get['id'], 
		);
		$data['user'] = $this->M_admin->select_where('user', $where)->row_array();

        $this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/user_edit', $data);
        $this->load->view('admin_panel/layout/footer');
    }
	function edit_aksi()
	{
		$post = $this->input->post();

		if(isset($post['password']))
		{
			$password = md5($post['password']);
		}
		else {
			$password = $post['password_lama'];
		}

		$set = array(
			'nama' => $post['nama'],
			'email' => $post['email'],
			'username' => $post['username'],
			'password' => $password
		);
		$where = array(
			'id' => $post['id'], 
		);

		$this->M_admin->update_data('user', $set, $where);

		redirect(base_url('admin_panel/user?success=User Berhasil di Edit'));
	}
	function hapus()
	{
		$get = $this->input->get();

		$where = array(
			'id' => $get['id'], 
		);

		$this->M_admin->delete_data('user', $where);

		redirect(base_url('admin_panel/user?success=User Berhasil di Hapus'));
	}
}
