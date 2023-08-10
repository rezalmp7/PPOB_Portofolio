<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
            'page' => 'admin-blog', 
        );

		$max_id = $this->M_admin->select_select('max(id) as max_id', 'blog')->row_array();

		if($max_id == null)
		{
			$data['id'] = 1;
		}
		else {
			$data['id'] = $max_id['max_id']+1;
		}

		$data['blog'] = $this->M_admin->select_all('blog')->result_array();

		$this->load->view('admin_panel/layout/header', $header);
        $this->load->view('admin_panel/blog', $data);
        $this->load->view('admin_panel/layout/footer');
	}
	function upload_thumbnail($namafile){
		$config['upload_path']          = './assets/img/website/blog/';
		$config['allowed_types']        = 'jpg|jpeg|png|jfif';
		$config['file_name']            = $namafile;
	    $config['overwrite']			= true;
		$config['max_size']             = 100000;
 
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('thumbnail')){ 
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

		$nama_thumbnail = 'blog_ppob-'.$post['id'];

		$thumbnail = $this->upload_thumbnail($nama_thumbnail);

		if($thumbnail != false)
		{
			$data = array(
				'id' => $post['id'],
				'penulis' => $post['penulis'],
				'judul' => $post['judul'],
				'thumbnail' => $thumbnail,
				'kategori' => $post['kategori'],
				'content' => $post['content']
			);

			$this->M_admin->insert_data('blog', $data);

			
		}
		else {
			echo 'salah';
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
            'page' => 'admin-blog', 
        );
		$get = $this->input->get();

		$where = array('id' => $get['id'], );

		$data['blog'] = $this->M_admin->select_where('blog', $where)->row_array();

		$this->load->view('admin_panel/layout/header', $header);
		$this->load->view('admin_panel/blog_edit', $data);
		$this->load->view('admin_panel/layout/footer');
	}
	function edit_aksi()
	{
		$post = $this->input->post();

		$where = array('id' => $post['id'], );

		$nama_thumbnail = 'blog_ppob-'.$post['id'];

		if(!empty($_FILES['thumbnail']['tmp_name'])) 
		{
			$thumbnail = $this->upload_thumbnail($nama_thumbnail);
		}
		else {
			$thumbnail = $post['thumbnail_lama'];
		}

		if($thumbnail != false)
		{
			$set = array(
				'penulis' => $post['penulis'],
				'judul' => $post['judul'],
				'thumbnail' => $thumbnail,
				'kategori' => $post['kategori'],
				'content' => $post['content']
			);

			$this->M_admin->update_data('blog', $set, $where);

			redirect(base_url('admin_panel/blog'));
		}
		else {
			redirect(base_url('admin_panel/blog/edit?id='.$post['id']));
		}
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
            'page' => 'admin-blog', 
        );

		$get = $this->input->get();

		$where = array('id' => $get['id'], );

		$data['blog'] = $this->M_admin->select_where('blog', $where)->row_array();

		$this->load->view('admin_panel/layout/header', $header);
		$this->load->view('admin_panel/blog_detail', $data);
		$this->load->view('admin_panel/layout/footer');
	}
	function hapus()
	{
		$get = $this->input->get();

		$where = array('id' => $get['id'], );

		$blog = $this->M_admin->select_where('blog', $where)->row_array();

		if($blog != null)
		{
			unlink('./assets/img/website/blog/'.$blog['thumbnail']);

			$this->M_admin->delete_data('blog', $where);

			redirect(base_url('admin_panel/blog'));
		}
		else {
			redirect(base_url('admin_panel/blog'));
		}
	}
}
