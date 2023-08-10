<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
			'page' => 'login', 
		);
		$cookie = get_cookie('ppobvip');

		if($cookie != null)
		{
			$where = array('cookie' => $cookie, );

			$pengguna = $this->M_admin->select_where('pengguna', $where)->row_array();

			if($pengguna['status'] == '0')
			{
					
				$data_session = array(
					'pulsavip_user_status' => "pulsavip_user_pin",
					'pulsavip_user_id' => $pengguna['id'],
					'pulsavip_user_username' => $pengguna['username'],
				);
				$this->session->set_userdata($data_session);

				redirect(base_url('login/pin'));
			}
			else {
				$where_pengguna = array('id' => $pengguna['id'], );
				$set_pengguna = array('cookie' => null, );
				$this->M_admin->update_data('pengguna', $set_pengguna, $where_pengguna);

				redirect(base_url('login'));
			}
		}
		else {
			$this->load->view('login');
		}
	}
	function aksi_login()
	{
		$post = $this->input->post();

        $password = md5($post['password']);

        $where_cek = array
        (
            'username' => $post['username'],
            'password' => $password
        );
        $cek_login = $this->M_admin->select_where('pengguna', $where_cek)->num_rows();
		$data_pengguna = $this->M_admin->select_where('pengguna', $where_cek)->row_array();
		
        if($cek_login > 0)
        {
			if($data_pengguna['status'] != '0')
			{
				if($post['remember'] == '1')
				{
					$str=rand();
					$result = md5($str);
					
					$set_update_cookie = array(
						'cookie' => $result, 
					);
					set_cookie('ppobvip', $result, 3600*24*30); // set expired 30 hari kedepan

					$this->M_admin->update_data('pengguna', $set_update_cookie, $where_cek);
				}
				$data_user = $this->M_admin->select_where('pengguna', $where_cek)->row_array();

				$data_session = array(
					'pulsavip_user_status' => "pulsavip_user_pin",
					'pulsavip_user_id' => $data_user['id'],
					'pulsavip_user_username' => $data_user['username'],
				);
				$this->session->set_userdata($data_session);
				redirect(base_url('login/pin'));
			}
			else {
				$this->session->set_flashdata('error', 'Akun Anda Di Blokir');
				redirect(base_url('login'));
			}
        }
        else {
			$this->session->set_flashdata('error', 'username/password tidak ditemukan');
            redirect(base_url('login'));
        }
	}
	public function pin()
	{
		$header = array(
			'page' => 'login', 
		);
		$this->load->view('pin');
	}
	function pin_aksi()
	{
		$post = $this->input->post();
		$idpengguna = $this->session->userdata('pulsavip_user_id');

		$where = array(
			'id' => $idpengguna,
			'pin' => $post['pin']
		);

		$pengguna = $this->M_admin->select_where('pengguna', $where);
		$cek_pengguna = $pengguna->num_rows();
		$data_pengguna = $pengguna->row_array();

		if($cek_pengguna > 0)
		{
			$data_session = array(
				'pulsavip_user_status' => "pulsavip_user_login",
			);
			$this->session->set_userdata($data_session);

			redirect(base_url('user_panel/dashboard'));
		}
		else {
			// redirect(base_url('login/pin?error=pin salah!'));
		}

	}
	public function lupa_password()
	{
		$header = array(
			'page' => 'login', 
		);
		$this->load->view('lupa_password');
	}
	function kirim_kode()
	{
		$post = $this->input->post();

		$where = array(
			'email' => $post['email'], 
			'username' => $post['username']
		);
		$set = array(
			'status' => 4, 
		);

		$pengguna = $this->M_admin->select_select_where('id, email', 'pengguna', $where)->row_array();

		$i = md5($pengguna['id']);
		$e = md5($pengguna['email']);
		$link = base_url()."login/ganti_password/".$pengguna['id']."?i=".$i."&e=".$e;

		if($pengguna == null)
		{
			redirect(base_url('login/lupa_password?error=username atau email tidak terdaftar'));
		}
		else {
			$this->M_admin->update_data('pengguna', $set, $where);
			$this->load->library('email');//panggil library email codeigniter
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'tuan.ppob@gmail.com',//alamat email gmail
				'smtp_pass' => 'tuanppob123',//password email 
				'mailtype' => 'html',
				'charset' => 'iso-8859-1',
				'wordwrap' => TRUE
			);
			$message = "Akun dengan Username: <b>".$post['username']."</b> telah di nonaktifkan<br>Untuk ganti password silahkan klik link dibawah ini <br> <i href='".$link."'>".$link."</i>";//ini adalah isi/body email

			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
			$this->email->from($config['smtp_user']);
			$this->email->to($post['email']);
			$this->email->subject('Link Ganti Password');//subjek email
			
			$this->email->message($message);
			
			//proses kirim email
			if($this->email->send()){
				redirect(base_url('login/lupa_password?msg=email berhasil dikirim'));
			}
			else{
				print_r($this->email->print_debugger());
				redirect(base_url('login/lupa_password?msg=email Gagal dikirim'));
			}
		}
	}
	public function ganti_password($id_user)
	{
		$header = array(
			'page' => 'login', 
		);

		$get = $this->input->get();

		$id_md5 = md5($id_user);

		if($get['i'] == $id_md5)
		{
			$where = array('id' => $id_user, );
			$select_user = $this->M_admin->select_where('pengguna', $where)->row_array();

			$email_md5 = md5($select_user['email']);

			if($select_user['status'] == 3)
			{
				if($email_md5 == $get['e'])
				{
					$data = array(
						'id' => $select_user['id'], 
						'username' => $select_user['username'], 
						'email' => $select_user['email']
					);
					$this->load->view('ganti_password', $data);
				}
				else {
					redirect(base_url('login?error=email berbeda'));
				}
			}
			else {
				redirect(base_url('login?error=status salah'));
			}
		}
		else {
			redirect(base_url('login?error=id salah'));
		}
		
	}
	function aksi_ganti_password()
	{
		$post = $this->input->post();

		if($post['password'] == $post['konfirmasi'])
		{
			$passmd = md5($post['password']);

			$where = array('id' => $post['id']);

			$set = array(
				'password' => $passmd,
				'status' => '2'
			);

			$this->M_admin->update_data('pengguna', $set, $where);

			redirect(base_url('login'));
		}
		else {
			$i = md5($post['id']);
			$e = md5($post['email']);

			redirect(base_url("login/ganti_password/".$post['id']."?i=".$i."&e=".$e."&error=password berbeda"));
		}
	}
	function logout()
	{
		$idpengguna = $this->session->userdata('pulsavip_user_id');

		$where = array('id' => $idpengguna, );

		$set = array('cookie' => null, );

		$logout = $this->M_admin->update_data('pengguna', $set, $where);
		set_cookie('ppobvip', $result, 3600*24*30);

		if($logout)
		{
			$this->session->sess_destroy();
			redirect(base_url());
		}
		else {
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}
	}
}
