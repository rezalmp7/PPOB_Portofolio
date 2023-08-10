<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spesial extends CI_Controller {

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
            'page' => 'admin-spesial', 
        );

		$data['produk'] = $this->M_admin->select_all('produk')->result_array();

		$this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/spesial', $data);
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
            'page' => 'admin-promo', 
        );

		$max_id = $this->M_admin->select_select('max(id) as max_id', 'produk')->row_array();
		
		if($max_id['max_id'] != null)
		{
			$data['id'] = $max_id['max_id']+1;
		}
		else {
			$data['id'] = 1;
		}

        $this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/spesial_tambah', $data);
        $this->load->view('admin_panel/layout/footer');
    }
	function upload_photo($namafile){
		$config['upload_path']          = './assets/img/icon/produk/';
		$config['allowed_types']        = 'jpg|jpeg|png|jfif';
		$config['file_name']            = $namafile;
	    $config['overwrite']			= true;
		$config['max_size']             = 100000;
 
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('icon')){ 
			$error = $this->upload->display_errors();
			echo $error;
			return false;
		}else{
			$data = $this->upload->data('file_name');
			return $data;
		}
	}
	function tambah_aksi()
	{
		$post = $this->input->post();

		$namaicon = 'produk-'.$post['id'];

		$icon = $this->upload_photo($namaicon);

		$data = array(
			'id' => $post['id'],
			'nama' => $post['nama'],
			'icon' => $icon,
			'harga' => $post['harga'],
			'diskon' => $post['diskon'],
			'data' => $post['data']
		);

		$this->M_admin->insert_data('produk', $data);

		redirect(base_url('admin_panel/spesial'));
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
            'page' => 'admin-spesial', 
        );

		$get = $this->input->get();

		$where = array(
			'id' => $get['id'],
		);

		$data['produk'] = $this->M_admin->select_where('produk', $where)->row_array();

		$this->load->view('admin_panel/layout/header', $header);
		$this->load->view('admin_panel/spesial_edit', $data);
		$this->load->view('admin_panel/layout/footer');
	}
	function edit_aksi()
	{
		$post = $this->input->post();

		$namaicon = 'produk-'.$post['id'];

		if(!empty($_FILES['icon']['tmp_name'])) 
		{
			$icon = $this->upload_photo($namaicon);
		}
		else {
			$icon = $post['icon_lama'];
			echo 'kosong goblok';
		}

		if($icon == 'false')
		{
			redirect(base_url('admin_panel/spesial/edit'));
		}
		else {
			$where = array('id' => $post['id'] );
			
			$set = array(
				'nama' => $post['nama'], 
				'icon' => $icon,
				'harga' => $post['harga'],
				'diskon' => $post['diskon'],
				'data' => $post['data']
			);
			
			$this->M_admin->update_data('produk', $set, $where);

			redirect(base_url('admin_panel/spesial'));
		}
	}
	public function hapus()
	{
		$get = $this->input->get();

		$where = array(
			'id' => $get['id'], 
		);

		unlink('./assets/img/icon/produk/'.$get['gmb']);
		$this->M_admin->delete_data('produk', $where);

		redirect(base_url('admin_panel/spesial'));
	}
}
