<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {

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
            'page' => 'admin-promo', 
        );
		
		$data['promo'] = $this->M_admin->select_all('promo')->result_array();

		$this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/promo', $data);
        $this->load->view('admin_panel/layout/footer');
	}
	function upload_photo($namafile){
		$config['upload_path']          = './assets/img/website/promo';
		$config['allowed_types']        = 'jpg|jpeg|png|jfif';
		$config['file_name']            = $namafile;
	    $config['overwrite']			= true;
		$config['max_size']             = 100000;
		$config['max_width']			= 1501;
		$config['min_width']			= 1499;
		$config['max_height']			= 401;
		$config['min_height']			= 399;
 
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto')){ 
			$error = $this->upload->display_errors();
			echo $error;
			return false;
		}else{
			$data = $this->upload->data('file_name');
			return $data;
		}
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

		$max_id = $this->M_admin->select_select('max(id) as max_id', 'promo')->row_array();

		if($max_id['max_id'] != null)
		{
			$data['id'] = $max_id['max_id']+1;
		}
		else {
			$data['id'] = 1;
		}

        $this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/promo_tambah', $data);
        $this->load->view('admin_panel/layout/footer');
    }
	function tambah_aksi()
	{
		$post = $this->input->post();

		$nama_photo = 'promo'.$post['id'];

		$photo = $this->upload_photo($nama_photo);

		if($photo != false)
		{
			$type = $post['type'];
			switch ($type) {
				case 1:
					$syarat = null;
					break;
				case 2:
					$syarat = $post['syarat'];
					break;
				case 3:
					$syarat = $post['syarat'];
					break;
				default:
					$syarat = null;
					break;
			}

			$data = array(
				'id' => $post['id'],
				'nama' => $post['nama'],
				'type' => $post['type'],
				'gambar' => $photo,
				'syarat' => $syarat,
				'coin' => $post['coin'],
				'status' => 2, 
			);
			$this->M_admin->insert_data('promo', $data);
			
			redirect(base_url('admin_panel/promo'));
		}
		else {
			redirect(base_url('admin_panel/promo/tambah'));	
		}
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
            'page' => 'admin-promo', 
        );

		$get = $this->input->get();

		$where = array('id' => $get['id']);

		$data['promo'] = $this->M_admin->select_where('promo', $where)->row_array();

		$this->load->view('admin_panel/layout/header', $header);
		$this->load->view('admin_panel/promo_edit', $data);
		$this->load->view('admin_panel/layout/footer');
	}
	function edit_aksi()
	{
		$post = $this->input->post();

		$where = array('id' => $post['id'], );
		
		$nama_photo = 'promo'.$post['id'];

		if(!empty($_FILES['foto']['tmp_name'])) 
		{
			$photo = $this->upload_photo($nama_photo);
		}
		else {
			$photo = $post['foto_lama'];
		}

		if($photo != false)
		{
			$type = $post['type'];
			switch ($type) {
				case 1:
					$syarat = null;
					break;
				case 2:
					$syarat = $post['syarat'];
					break;
				case 3:
					$syarat = $post['syarat'];
					break;
				default:
					$syarat = null;
					break;
			}

			$set = array(
				'nama' => $post['nama'],
				'type' => $post['type'],
				'gambar' => $photo,
				'syarat' => $syarat,
				'coin' => $post['coin'],
				'status' => $post['status'], 
			);

			$this->M_admin->update_data('promo', $set, $where);

			redirect(base_url('admin_panel/promo'));
		}
		else {
			redirect(base_url('admin_panel/promo/edit?id='.$post['id']));
		}

	}
	function switch()
	{
		$get = $this->input->get();

		$where = array('id' => $get['id'], );

		if($get['status'] == '1')
		{
			$status = '2';
		}
		else {
			$status = '1';
		}

		$set = array('status' => $status, );

		$this->M_admin->update_data('promo', $set, $where);

		redirect(base_url('admin_panel/promo'));
	}
}
