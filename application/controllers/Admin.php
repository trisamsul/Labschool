<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
    private $head;
	public function __construct(){
		parent::__construct();
		$this->head['berita'] = $this->ModelNews->selectAll()->num_rows();
	}
    
     //halaman utama
	public function index()
	{
        $count['berita'] = $this->ModelNews->selectAll()->num_rows();
        $this->load->view('admin/layouts/header');
		$this->load->view('admin/index');
		$this->load->view('admin/layouts/footer');
    }
    
    public function login()
	{
		$this->load->view('admin/login');
    }
	
	public function auth(){
		$post = $this->input->post();
		$data = $this->ModelAkun->check($post['uname'],md5($post['pass']))->row_array();
		if(!isset($data)){
			redirect('admin/login/failed');			
		}else{
			$userdata = array(
				'username'  => $data['username'],
				'fullname'  => $data['password'],
				'log'  => $data['ll'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);
			redirect('Admin/');			
		}
	}

	public function logOut(){
		$this->session->sess_destroy();
		redirect('');
	}

    public function newsAll()
	{
        $data['all'] = $this->ModelNews->selectAll()->result_array();		
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/newsAll',$data);
		$this->load->view('admin/layouts/footer');
    }

    public function newsPost()
	{
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/newsPost');
		$this->load->view('admin/layouts/footer');
    }

    public function addNews(){
		// var_dump($this->input->post());
		$data = $this->input->post();
		// print_r(nl2br($data['teks']))
		$data['berita_tanggal'] = date('Y-m-d');
		unset($data['_wysihtml5_mode']);
		// var_dump($data);

		$config['upload_path']		= './uploads/berita/';
		$config['allowed_types']	= '*';
		$config['max_size']			= 0;				
		date_default_timezone_set("Asia/Bangkok");
		$config['file_name']		= "Berita_".time();
		$this->load->library('upload', $config);
		var_dump($_FILES);
		if(!$this->upload->do_upload('photo')){
			//gagal
			$error = array('error' => $this->upload->display_errors());
			// var_dump($error);
		} else{
			$data['berita_foto'] = $config['file_name'].$this->upload->data('file_ext');
			$this->ModelNews->insert($data);
			redirect('admin/newsAll/Success');
		}
	}
}
