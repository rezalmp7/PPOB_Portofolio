<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

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

		$where_kontak_complaint = array('id' => 1, );
		$where_kontak_web = array('id' => 2, );
		$where_alamat = array('id' => 3, );
		$where_email = array('id' => 4, );
		$where_hotline = array('id' => 5, );
		$where_logo_1 = array('id' => 1, );
		$where_logo_2 = array('id' => 2, );
		$where_logo_3 = array('id' => 3, );
		$where_min_saldo = array('id' => 4, );

		$data['kontak_complaint'] = $this->M_admin->select_where('kontak', $where_kontak_complaint)->row_array();
		$data['kontak_web'] = $this->M_admin->select_where('kontak', $where_kontak_web)->row_array();
		$data['alamat'] = $this->M_admin->select_where('kontak', $where_alamat)->row_array();
		$data['email'] = $this->M_admin->select_where('kontak', $where_email)->row_array();
		$data['hotline'] = $this->M_admin->select_where('kontak', $where_hotline)->row_array();
		$data['logo'] = $this->M_admin->select_where('konfigurasi', $where_logo_1)->row_array();
		$data['logo_1'] = $this->M_admin->select_where('konfigurasi', $where_logo_2)->row_array();
		$data['logo_2'] = $this->M_admin->select_where('konfigurasi', $where_logo_3)->row_array();
		$data['min_saldo'] = $this->M_admin->select_where('konfigurasi', $where_min_saldo)->row_array();


		$this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/kontak', $data);
        $this->load->view('admin_panel/layout/footer');
	}
	function update()
	{
		$post = $this->input->post();

		if($post['type'] == 0)
		{
			$id = array(1, 2);
		}
		elseif ($post['type'] == 1) {
			$id = array(3, 4, 5);
		}

		$set = array();

		$i = 0;
		foreach ($post['value'] as $a) {
			$set[] = array(
				'id' => $id[$i],
				'value' => $a
			);
			$i++;
		};

		$this->M_admin->updateBatch('kontak', $set, 'id');

		redirect(base_url('admin_panel/kontak'));
	}
	function upload_logo()
	{
		$config['upload_path']          = './assets/img/website/';
		$config['allowed_types']        = 'png';
		$config['file_name']            = 'logo';
		$config['overwrite']			= true;
		$config['max_size']             = 100024; // 100MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('logo')) {
			return $this->upload->data("file_name");
		}
		else {
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			return false;
		}
	}
	function upload_logo_1()
	{
		$config['upload_path']          = './assets/img/website/';
		$config['allowed_types']        = 'png';
		$config['file_name']            = 'logo_1';
		$config['overwrite']			= true;
		$config['max_size']             = 100024; // 100MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('logo_1')) {
			return $this->upload->data("file_name");
		}
		else {
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			return false;
		}
	}
	function upload_logo_2()
	{
		$config['upload_path']          = './assets/img/website/';
		$config['allowed_types']        = 'png';
		$config['file_name']            = 'logo_2';
		$config['overwrite']			= true;
		$config['max_size']             = 100024; // 100MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('logo_2')) {
			return $this->upload->data("file_name");
		}
		else {
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			return false;
		}
	}
	function logo()
	{
		$post = $this->input->post();
		
		$logo = true;
		$logo_1 = true;
		$logo_2 = true;

		if(!empty($_FILES['logo']['tmp_name'])) 
		{
		$logo = $this->upload_logo();
		}
		if(!empty($_FILES['logo_1']['tmp_name'])) 
		{
		$logo_1 = $this->upload_logo_1();
		}
		if(!empty($_FILES['logo_2']['tmp_name'])) 
		{
		$logo_2 = $this->upload_logo_2();
		}

		if($logo == false || $logo_1 == false || $logo_2 == false)
		{
			$message = "Ada logo yang gagal di upload";
		}
		else {
			$message = "Semua logo berhasil di upload";
		}

		$this->session->set_flashdata('msg', $message);

		redirect(base_url('admin_panel/kontak'));

	}
	function update_saldo()
	{
		$post = $this->input->post();
		
		$where = array('id' => 4, );
		$set = array('value' => $post['saldo'], );

		$this->M_admin->update_data('konfigurasi', $set, $where);

		
		$message = "Minimal saldo berhasil di update";
		$this->session->set_flashdata('msg', $message);

		redirect(base_url('admin_panel/kontak'));

	}
}
