<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPrestasi extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "tb_prestasi";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('prestasi_id','DESC');
		$this->db->limit($from,$offset);

		return $this->db->get();
	}

    public function selectYear(){
        $this->db->select('prestasi_tahun');
        $this->db->group_by('prestasi_tahun');
        $this->db->from($this->tableName);

		return $this->db->get();
    }

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('prestasi_id',$id);

		return $this->db->get();
    }
    
    public function selectByYear($year,$sekolah){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('prestasi_tahun',$year);
		$this->db->where('prestasi_sekolah',$sekolah);		
		if($sekolah!=NULL){

		}
		$this->db->order_by('prestasi_id','DESC');

		return $this->db->get();
	}

	public function insert($data){
		$this->db->insert($this->tableName,$data);
	}

	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('prestasi_id',$id);
		return $this->db->update($this->tableName);
	}

	public function delete($id){
		$this->db->where('prestasi_id',$id);
		$this->db->delete($this->tableName);
	}

}
