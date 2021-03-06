<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelGaleri extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "tb_galeri";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('galeri_id','DESC');
		$this->db->limit($from,$offset);

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('galeri_id',$id);

		return $this->db->get();
    }
    
    public function selectImages(){
		$this->db->select('galeri_caption, ANY_VALUE(galeri_id) as galeri_id, ANY_VALUE(galeri_kategori) as galeri_kategori, ANY_VALUE(galeri_file) as galeri_file');
		$this->db->group_by('galeri_caption');
		$this->db->from($this->tableName);
		
		$this->db->where('galeri_kategori',0);
		$this->db->order_by('galeri_id','DESC');

		return $this->db->get();
	}
	
    public function selectByCaption($capt){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('galeri_caption',$capt);
		$this->db->order_by('galeri_id','DESC');

		return $this->db->get();    
	}
    
    public function selectVideos(){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('galeri_kategori',1);
		$this->db->order_by('galeri_id','DESC');

		return $this->db->get();
	}

	public function insert($data){
		$this->db->insert($this->tableName,$data);
	}

	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('galeri_id',$id);
		return $this->db->update($this->tableName);
	}

	public function delete($id){
		$this->db->where('galeri_id',$id);
		$this->db->delete($this->tableName);
	}

}
