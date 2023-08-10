<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan_kategori extends CI_Controller {

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
            'page' => 'user-bantuan-kategori', 
        );

		$get = $this->input->get();

		if($get == null)
		{
			redirect(base_url('user_panel/bantuan'));
		}
		else {
			$where = array('kategori' => $get['kat'], );

			$data['bantuan'] = $this->M_admin->select_where('bantuan', $where)->result_array();

			$data['kategori'] = $get['kat'];
		}

		$this->load->view('user_panel/layout/header', $header);
        $this->load->view('user_panel/bantuan_kategori', $data);
        $this->load->view('user_panel/layout/footer');
	}
}
