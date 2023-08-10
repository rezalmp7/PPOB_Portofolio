<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan_detail extends CI_Controller {

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

		$this->load->model('M_admin');
    }
	public function index()
	{
        $header = array(
            'page' => 'user-bantuan-detail', 
        );

		$get = $this->input->get();

		$where = array('id' => $get['id'], );

		$bantuan = $this->M_admin->select_where('bantuan', $where)->row_array();

		$data['bantuan'] = $bantuan;

		// $where_kategori = array('kategori' => $bantuan['kategori'], );
		$kategori_bantuan = $bantuan['kategori'];


		$data['kategori'] = $this->M_admin->select_select_like('*', 'bantuan', 'kategori', $kategori_bantuan, 'both')->result_array();

		

		$this->load->view('user_panel/layout/header', $header);
        $this->load->view('user_panel/bantuan_detail', $data);
        $this->load->view('user_panel/layout/footer');
	}
}
