<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAuth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'Model_User'=> 'user'
        ));
    }

    public function index()
    {
		$data['title']="Login";
		$this->load->view('user/auth/login',$data);

    }

	public function register()
    {
    	$config = array(
			array(
    			'field'	=> 'nama',
    			'label'	=> 'Nama',
    			'rules'	=> 'trim|required',
    			'errors' => array(
    				'required'		=> '%s harus diisi'
    			)
    		),
    		array(
    			'field'	=> 'username',
    			'label'	=> 'Username',
    			'rules'	=> 'trim|required|is_unique[user.username]',
    			'errors' => array(
    				'required'		=> '%s harus diisi',
    				'min_length[5]'	=> 'Panjang %s harus lebih dari 5'
    			)
    		),
    		array(
    			'field'	=> 'password',
    			'label'	=> 'Password',
    			'rules'	=> 'required',
                'errors' => array(
                    'required'      => '%s harus diisi',
                    'min_length[5]' => 'Panjang %s harus lebih dari 5'
                )
    		),
    		array(
    			'field'	=> 'repassword',
    			'label'	=> 'Re-Password',
    			'rules'	=> 'required|matches[password]'
			),
			array(
    			'field'	=> 'nama_tim',
    			'label'	=> 'Nama team',
    			'rules'	=> 'trim|required|is_unique[user.nama_tim]',
    			'errors' => array(
    				'required'		=> '%s harus diisi',
                    'min_length[5]'	=> 'Panjang %s harus lebih dari 3 huruf',
                    'is_unique'     => '%s nama team sudah digunakan'
                )
            ),
            array(
    			'field'	=> 'alamat',
    			'label'	=> 'Alamat',
    			'rules'	=> 'trim|required',
    			'errors' => array(
    				'required'		=> '%s harus diisi',
    				'min_length[5]'	=> 'Panjang %s harus lebih dari 5 huruf'
                )
            ),
            array(
    			'field'	=> 'no_hp',
    			'label'	=> 'No hp',
    			'rules'	=> 'trim|required|numeric',
    			'errors' => array(
    				'required'		=> '%s harus diisi',
    				'numeric'	    => 'Data %s harus angka'
                )
            ),
    	);
    	$this->form_validation->set_rules($config);

    	if($this->form_validation->run() == false){
            $data['title']="Registerasi";
            $this->load->view('user/auth/register',$data);
    	}else{
			$nama   	= $this->input->post('nama');
			$username   = $this->input->post('username');
            $password   = $this->input->post('password');
            $nama_tim   = $this->input->post('nama_tim');
            $alamat     = $this->input->post('alamat');
            $no_hp      = $this->input->post('no_hp');
            $level      = "user";
    		$data = array(
				'nama' 		=> $nama,
    			'username' 	=> $username,
    			'password' 	=> md5($password),
                'nama_tim' 	=> $nama_tim,
                'alamat' 	=> $alamat,
                'no_hp' 	=> $no_hp,
                'level'     => $level,
    		);
    		$user_id = $this->user->addUser($data);
    		if($user_id > 0){
    			$sessionData = array(
    				'username' 	=> $this->input->post('username'),
    				'id'		=> $user_id,
					'isLogin'	=> true,
					'level'     => $level
    			);
    			$this->session->set_userdata($sessionData);
                 echo "<script>alert('Registerasi berhasil.. Selamat Datang $username');location='".site_url('UserHome/index')."'</script>";
    		}
    	}

    }

    public function login()
    {
    	$this->form_validation->set_rules('username', 'Username', 'required');
    	$this->form_validation->set_rules('password', 'Password', 'required');
    	if($this->form_validation->run() == false){

    		$data['title']="Login";
            $this->load->view('user/auth/login',$data);

    	}else{
    		$username = $this->input->post('username');
    		$password = $this->input->post('password');
    		$data = array(
	    		'username'	=> $username,
	    		'password'	=> md5($password)
	    	);
			$user = $this->user->getUser($data);
	    	if($user == true){
	    		$sessionData = array(
						'username' 	=> $username,
						'id_user'	=> $user->id_user,
						'isLogin'	=> true,
						'level'     => $user->level
	    			);
	    		$this->session->set_userdata($sessionData);
                echo "<script>alert('selamat datang $username');location='".site_url('UserHome/index')."'</script>";
	    	}else{
	    		$this->session->set_flashdata('failLogin', 'Username atau Password salah');
	    		redirect('UserAuth/login');
	    	}
    	}
    }

}
