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

		$this->load->model("M_admin");
    }
	public function index()
	{
		$header = array(
			'page' => 'blog', 
		);

		$data['terbaru'] = $this->M_admin->select_select_limit_orderBy('id, create_at, judul, content, thumbnail', 'blog', 6, 'create_at DESC')->result_array();
		$data['slideshow'] = $this->M_admin->select_select_limit_orderBy('id, create_at, judul, content, thumbnail', 'blog', 3, 'create_at DESC')->result_array();
		$data['populer'] = $this->M_admin->select_select_orderBy('id, create_at, judul, content, thumbnail', 'blog', 'view DESC')->result_array();

		$footer['kontak_wa_comp'] = $this->M_admin->select_where('kontak', array('id' => 1, ))->row_array();
		$footer['kontak_wa_web'] = $this->M_admin->select_where('kontak', array('id' => 2, ))->row_array();
		$footer['alamat'] = $this->M_admin->select_where('kontak', array('id' => 3, ))->row_array();
		$footer['email'] = $this->M_admin->select_where('kontak', array('id' => 4, ))->row_array();
		$footer['hotline'] = $this->M_admin->select_where('kontak', array('id' => 5, ))->row_array();

        $this->load->view('layout/header', $header);
		$this->load->view('blog', $data);
        $this->load->view('layout/footer', $footer);
	}
	public function detail()
	{
		$get = $this->input->get();
		$header = array(
			'page' => 'blog', 
		);

		$where = array('id' => $get['id'], );
		$data['blog'] = $this->M_admin->select_where('blog', $where)->row_array();
		$data['populer'] = $this->M_admin->select_select_orderBy('id, create_at, view, judul, content, thumbnail', 'blog', 'view DESC')->result_array();

		$footer['kontak_wa_comp'] = $this->M_admin->select_where('kontak', array('id' => 1, ))->row_array();
		$footer['kontak_wa_web'] = $this->M_admin->select_where('kontak', array('id' => 2, ))->row_array();
		$footer['alamat'] = $this->M_admin->select_where('kontak', array('id' => 3, ))->row_array();
		$footer['email'] = $this->M_admin->select_where('kontak', array('id' => 4, ))->row_array();
		$footer['hotline'] = $this->M_admin->select_where('kontak', array('id' => 5, ))->row_array();

        $this->load->view('layout/header', $header);
		$this->load->view('blog_detail', $data);
        $this->load->view('layout/footer', $footer);
	}
}
