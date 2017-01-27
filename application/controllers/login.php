<?php 
class Login extends CI_Controller {
    public function __construct(){
		parent::__construct();
		session_start();
		$this->load->model('model_user');
	}
	public function index()
	{
		$this->session->userdata('good') == false;
		$array=array(
			'id_user' => '',	
			'username'=>'',
			'password'=>'',
		);
		$this->session->sess_destroy();
		$this->load->view('login');
	}
    public function process()
	{
		$user=$this->input->post('username');
		$pass=$this->input->post('password');
		$cek3 = $this->model_user->getLogin($user,$pass)->result_array();
		if($cek3){
				$array=array(
					'id_petugas' => $cek3[0]['id_petugas'],
					'username' => $cek3[0]['username'],
					'password' => $cek3[0]['password']
				);
			$this->session->set_userdata('good', true);
			//echo "uab"; exit; 
			redirect('utama');
		}else{
			echo "<script> alert ('Gagal Login: cek username, password'); history.go(-1); </script>";
		}

	}
    
    public function logout(){
		$array=array(
			'id_user' => '',	
			'username'=>'',
			'password'=>'',
			);
		$this->session->sess_destroy();
		redirect('login');
	}
}
?>
