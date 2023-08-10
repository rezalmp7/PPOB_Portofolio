<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

		$promo_where_1 = array('type' => 1, 'status' => 1 );
		$promo_where_2 = array('type' => 2, 'status' => 1 );
		$promo_where_3 = array('type' => 3, 'status' => 1 );

		$data['pembayaran'] = $this->all_chenel();

		$data['promo_1'] = $this->M_admin->select_select_where_limit('syarat, coin', 'promo', $promo_where_1, 1)->row_array();
		$data['promo_2'] = $this->M_admin->select_select_where_limit('syarat, coin', 'promo', $promo_where_2, 1)->row_array();
		$data['promo_3'] = $this->M_admin->select_select_where_limit('syarat, coin', 'promo', $promo_where_3, 1)->row_array();

		$footer['kontak_wa_comp'] = $this->M_admin->select_where('kontak', array('id' => 1, ))->row_array();
		$footer['kontak_wa_web'] = $this->M_admin->select_where('kontak', array('id' => 2, ))->row_array();
		$footer['alamat'] = $this->M_admin->select_where('kontak', array('id' => 3, ))->row_array();
		$footer['email'] = $this->M_admin->select_where('kontak', array('id' => 4, ))->row_array();
		$footer['hotline'] = $this->M_admin->select_where('kontak', array('id' => 5, ))->row_array();

		$this->load->view('home', $data);
        $this->load->view('layout/footer', $footer);
	}
	public function all_chenel()
	{
		$apiKey = 'DEV-elvmT8Xgzrnp7uJbVOJuG7MpvFUuWBS25bWXsxsg';

		$payload = [
		'code'	=> ''
		];

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_FRESH_CONNECT     => true,
		CURLOPT_URL               => "https://tripay.co.id/api-sandbox/merchant/payment-channel?".http_build_query($payload),
		CURLOPT_RETURNTRANSFER    => true,
		CURLOPT_HEADER            => false,
		CURLOPT_HTTPHEADER        => array(
			"Authorization: Bearer ".$apiKey
		),
		CURLOPT_FAILONERROR       => false
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$array_response = json_decode($response, true);
		return $array_response;
	}
	function pesan()
	{
		$post = $this->input->post();


		$data = array(
			'nama' => $post['nama'], 
			'no_telp' => $post['no_telp'], 
			'subjek' => $post['subject'], 
			'email' => $post['email'], 
			'pesan' => $post['pesan'], 
		);

		$this->M_admin->insert_data('pesan', $data);

		redirect(base_url($post['url']));
	}
}
