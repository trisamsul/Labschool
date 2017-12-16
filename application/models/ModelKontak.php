<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKontak extends CI_Model {

	public $tableName;
    
    public function __construct(){
        parent::__construct();
        $this->tableName = "tb_kontak";
    }

    public function selectAll($from=0,$offset=0){
        $this->db->select('*');
        $this->db->from($this->tableName);
        $this->db->order_by('kontak_tanggal','DESC');
        $this->db->limit($from,$offset);

        return $this->db->get();
    }    

    public function selectById($id){
        $this->db->select('*');
        $this->db->from($this->tableName);
        $this->db->where('kontak_id',$id);

        return $this->db->get();
    }
    
    public function insert($data){
        $this->db->insert($this->tableName,$data);
    }

    public function update($id,$data){
        $this->db->set($data);
        $this->db->where('id',$id);
        return $this->db->update($this->tableName);
    }

    public function delete($id){
		$this->db->where('kontak_id',$id);
		$this->db->delete($this->tableName);
	}

}
