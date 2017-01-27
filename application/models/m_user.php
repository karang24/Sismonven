<?php
class M_user extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	
	function insert() {
        $insert_petugas = array(
            'id_petugas' => $this->input->post('id_petugas'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
			'nama_petugas' => $this->input->post('nama_petugas'),
			'jabatan' => $this->input->post('jabatan'),
			'hak_akses' => $this->input->post('hak_akses'),
			'no_hp' => $this->input->post('no_hp'),
        );

        $insert = $this->db->insert('petugas', $insert_petugas);
        return $insert;
    }

    function updatedata(){
        $id_petugas = $this->input->post('id_petugas');
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_petugas = $this->input->post('nama_petugas');		
		$jabatan = $this->input->post('jabatan');
		$hak_akses = $this->input->post('hak_akses');
		$no_hp = $this->input->post('no_hp');
		;
		$data = array(
                'id_petugas'=>$id_petugas,
				'username'=>$username,
                'password'=>$password,
				'nama_petugas'=>$nama_petugas,
				'jabatan'=>$jabatan,
				'hak_akses'=>$hak_akses,
				'no_hp'=>$no_hp,
				
				);
        $this->db->where(array('id_petugas'=>$id_petugas));
        $this->db->update('petugas',$data);
    }

    function deletedata($id_petugas){
        
        $this->db->where('id_petugas', $id_petugas);
        $this->db->delete('petugas'); 
    }

    public function cariPetugas($cari){
        $cari=$this->db->query("select * from petugas where id_petugas LIKE '%$cari%'  ");
        return $cari->result();
    }
    function filterdata($id_petugas){
        return $this->db->get_where('petugas',
                          array('id_petugas'=>$id_petugas))->row();
    }
	
	function bacadata(){
        $baca = $this->db->get('petugas');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function display_dtUser(){
        return $this->db->select('*')->from('petugas')->group_by('id_petugas')->where('id_petugas IS NOT NULL')->get()->result_array();
    }


}

?>