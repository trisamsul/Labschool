<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAkun extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "tb_akun";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->limit($from,$offset);
		$this->db->order_by('id','DESC');

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id',$id);

		return $this->db->get();
	}

	public function check($us,$ps){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('username',$us);
		$this->db->where('password',$ps);

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

}
