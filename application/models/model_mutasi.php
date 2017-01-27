<?php
class Model_mutasi extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	
    var $table = "mutasi_brg";
	
	function add_dtMutasi($arrayData){
        $this->db->insert($this->table, $arrayData);
        return mysql_insert_id();
    }
	function display_dtMutasi(){
		return $this->db->select('a.*,b.*,c.*,d.*')->from('mutasi_brg a')->join('ruangan b','a.kd_ruangan=b.kd_ruangan')->join('petugas c','a.id_petugas=c.id_petugas')->join('barang d','a.kd_barang=d.kd_barang')->group_by('a.no_mutasi')->where('a.no_mutasi IS NOT NULL')->get()->result_array();
    }
	function delete_dtMutasi($id){
		$this->db->where('no_mutasi', $id);
		return $this->db->delete($this->table);
    }
	function detail_dtMutasi($id){
		return $this->db->where('no_mutasi',$id)->get('no_mutasi')->result_array();
	}
	
	function edit_dtMutasi($id,$arrayData){
        $this->db->where('no_mutasi', $id);
        return $this->db->update($this->table, $arrayData); 
    }
}
?>