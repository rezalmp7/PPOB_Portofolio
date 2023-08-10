<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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

		if($this->session->userdata('pulsavip_user_status') != 'pulsavip_user_login')
        {
            redirect(base_url('login'));
        }

		$this->load->model('M_admin');
    }
	public function index()
	{
        $header = array(
            'page' => 'user-bantuan-detail', 
        );

		$idpengguna = $this->session->userdata('pulsavip_user_id');

		$where = array(
			'id' => $idpengguna, 
		);
		$data['pengguna'] = $this->M_admin->select_where('pengguna', $where)->row_array();

		$this->load->view('user_panel/layout/header', $header);
        $this->load->view('user_panel/profil', $data);
        $this->load->view('user_panel/layout/footer');
	}
	function update_profil()
	{
		$post = $this->input->post();

		$idpengguna = $this->session->userdata('pulsavip_user_id');

		$where_select = array(
			'id' => $idpengguna, 
		);
		
		$password = md5($post['password']);

		$select_pengguna = $this->M_admin->select_where('pengguna', $where_select)->row_array();

		if($password == $select_pengguna['password'] && $post['pin'] == $select_pengguna['pin'])
		{
			$set = array(
				'username' => $post['username'],
				'nama_depan' => $post['nama_depan'],
				'nama_belakang' => $post['nama_belakang'],
				'no_telp' => $post['no_telp'],
				'email' => $post['email'] 
			);
			$this->M_admin->update_data('pengguna', $set, $where_select);

			redirect(base_url('user_panel/profil?success=profil berhasil diupdate'));
		}
		else {
			redirect(base_url('user_panel/profil?error=password atau pin salah'));
		}
	}
	function change_password()
	{
		$post = $this->input->post();

		$idpengguna = $this->session->userdata('pulsavip_user_id');

		$where_select = array('id' => $idpengguna, );

		$select_pengguna = $this->M_admin->select_where('pengguna', $where_select)->row_array();

		if($post['password_baru'] == $post['konfirmasi_baru'])
		{
			$password_lama = md5($post['password_lama']);
			if($password_lama == $select_pengguna['password'])
			{
				$password = md5($post['password_baru']);
				$set = array(
					'password' => $password, 
				);
				$this->M_admin->update_data('pengguna', $set, $where_select);
				redirect(base_url('login/logout'));
			}
			else {
				redirect(base_url('user_panel/profil?error=password lama salah'));
			}
		}
		else {
			redirect(base_url('user_panel/profil?error=password password baru berbeda'));
		}
	}
	function change_pin()
	{
		$post = $this->input->post();

		$idpengguna = $this->session->userdata('pulsavip_user_id');

		$where_select = array('id' => $idpengguna, );

		$select_pengguna = $this->M_admin->select_where('pengguna', $where_select)->row_array();

		if($post['pin_baru'] == $post['konfirmasi_pin'])
		{
			if($post['pin_lama'] == $select_pengguna['pin'])
			{
				$set = array(
					'pin' => $post['pin_baru'], 
				);
				$this->M_admin->update_data('pengguna', $set, $where_select);
				redirect(base_url('user_panel/profil?success="pin berhasil diubah'));
			}
			else {
				redirect(base_url('user_panel/profil?error=pin lama salah'));
			}
		}
		else {
			redirect(base_url('user_panel/profil?error=pin password baru berbeda'));
		}
	}
}
