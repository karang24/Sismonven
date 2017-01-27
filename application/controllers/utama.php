<?php 
class Utama extends CI_Controller {

    function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('model_user');
	}
    
	function index()
	{
		$this->load->view('utama/home');
	}
    
    function viewuser()
    {
        $id_petugas=$this->session->userdata('id_petugas');
        $data['result']=$this->model_user->display_dtUser();
        $data['menu_user']=' active';
    	$this->load->view('utama/petugas/listpetugas',$data);

    }
    function adduser()
    { 
        $this->load->view('utama/petugas/addpetugas');
       
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */