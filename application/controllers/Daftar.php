<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

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
		$max_id = $this->M_admin->select_select('max(id) as max_id', 'pengguna')->row_array();

		if($max_id['max_id'] != null)
		{
			$data['id'] = $max_id['max_id']+1;
		}
		else {
			$data['id'] = 1;
		}
		

		$this->load->view('daftar', $data);
	}
	function daftar_aksi()
	{
		$post = $this->input->post();
		
		if($post['g-recaptcha-response'] != null)
		{
			if($post['password'] == $post['konfirmasi'])
			{
				$where_cek_username = array(
					'username' => $post['nama'], 
				);
				$cek_username = $this->M_admin->select_where('pengguna', $where_cek_username)->num_rows();

				if($cek_username > 0)
				{
					redirect(base_url('daftar?alert=username sudah terpakai'));
				}
				else
				{
					$password = md5($post['password']);

					$data = array(
						'id' => $post['id'],
						'nama_depan' => $post['first_name'],
						'nama_belakang' => $post['last_name'],
						'email' => $post['email'],
						'no_telp' => $post['no_telp'],
						'username' => $post['username'],
						'password' => $password,
						'photo' => null,
						'pin' => null, 
						'status' => '1'
					);


					$this->M_admin->insert_data('pengguna', $data);

					$data_session = array(
						'pulsavip_user_status' => "pulsavip_user_register_pin",
						'pulsavip_user_id' => $post['id'],
						'pulsavip_user_username' => $post['username'],
					);
					$this->session->set_userdata($data_session);
					

					redirect(base_url('daftar?daftar=1108812123123'));
				}
			}
			else {
				redirect(base_url('daftar?alert=password berbeda dengan konfirmasi'));
			}
		}
		else {
			redirect(base_url('daftar?alert=Captcha belum terisi'));
		}
	}
	function tambah_pin()
	{
		$post = $this->input->post();

		$id_pengguna = $this->session->userdata('pulsavip_user_id');

		$pin = $post['pin1'].$post['pin2'].$post['pin3'].$post['pin4'].$post['pin5'].$post['pin6'];
		$kpin = $post['kpin1'].$post['kpin2'].$post['kpin3'].$post['kpin4'].$post['kpin5'].$post['kpin6'];

		if($pin == $kpin)
		{
			$where = array(
				'id' => $id_pengguna, 
			);
			$set = array(
				'pin' => $pin, 
				'status' => '2'
			);
			$this->M_admin->update_data('pengguna', $set, $where);

			redirect(base_url('login'));
		}
		else {
			redirect(base_url('daftar?alert=pin berbeda'));
		}
	}
}
