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
		$this->head['riset'] = $this->ModelRiset->selectAll()->num_rows();
		$this->head['galeri'] = $this->ModelGaleri->selectAll()->num_rows();
		$this->head['pesan'] = $this->ModelKontak->selectAll()->num_rows();
		$this->head['agenda'] = $this->ModelAgenda->selectAll()->num_rows();
	}
    
     //halaman utama
	public function index()
	{
        $count['berita'] = $this->ModelNews->selectAll()->num_rows();
        $count['riset'] = $this->ModelRiset->selectAll()->num_rows();
        $count['galeri_image'] = $this->ModelGaleri->selectImages()->num_rows();
        $count['galeri_video'] = $this->ModelGaleri->selectVideos()->num_rows();
        $this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/index',$count);
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

	public function galeriAll()
	{
        $data['all'] = $this->ModelGaleri->selectAll()->result_array();		
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/galeriAll',$data);
		$this->load->view('admin/layouts/footer');
	}
	
	public function galeriPostImg()
	{
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/galeriPostImg');
		$this->load->view('admin/layouts/footer');
	}

	public function galeriPostVid()
	{
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/galeriPostVid');
		$this->load->view('admin/layouts/footer');
	}
	
	public function addImage(){
		// var_dump($this->input->post());
		$data = $this->input->post();
		// print_r(nl2br($data['teks']))
		unset($data['_wysihtml5_mode']);
		// var_dump($data);

		$config['upload_path']		= './uploads/galeri/images/';
		$config['allowed_types']	= '*';
		$config['max_size']			= 0;				
		date_default_timezone_set("Asia/Bangkok");
		$config['file_name']		= "IMG_".time();
		$this->load->library('upload', $config);
		var_dump($_FILES);
		if(!$this->upload->do_upload('photo')){
			//gagal
			$error = array('error' => $this->upload->display_errors());
			// var_dump($error);
		} else{
			$data['galeri_file'] = $config['file_name'].$this->upload->data('file_ext');
			$data['galeri_kategori'] = 0;
			$this->ModelGaleri->insert($data);
			redirect('admin/galeriAll/Success');
		}
	}

	public function addVideo(){
		// var_dump($this->input->post());
		$data = $this->input->post();
		// print_r(nl2br($data['teks']))
		unset($data['_wysihtml5_mode']);
		// var_dump($data);

		$config['upload_path']		= './uploads/galeri/videos/';
		$config['allowed_types']	= '*';
		$config['max_size']			= 0;				
		date_default_timezone_set("Asia/Bangkok");
		$config['file_name']		= "VID_".time();
		$this->load->library('upload', $config);
		var_dump($_FILES);
		if(!$this->upload->do_upload('video')){
			//gagal
			$error = array('error' => $this->upload->display_errors());
			// var_dump($error);
		} else{
			$data['galeri_file'] = $config['file_name'].$this->upload->data('file_ext');
			$data['galeri_kategori'] = 1;
			$this->ModelGaleri->insert($data);
			redirect('admin/galeriAll/Success');
		}
	}

	public function risetAll()
	{
        $data['all'] = $this->ModelRiset->selectAll()->result_array();		
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/risetAll',$data);
		$this->load->view('admin/layouts/footer');
	}

	public function risetPost()
	{
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/risetPost');
		$this->load->view('admin/layouts/footer');
	}

	public function addRiset(){
		// var_dump($this->input->post());
		$data = $this->input->post();
		// print_r(nl2br($data['teks']))
		unset($data['_wysihtml5_mode']);
		// var_dump($data);

		$config['upload_path']		= './uploads/riset/files/';
		$config['allowed_types']	= '*';
		$config['max_size']			= 0;				
		date_default_timezone_set("Asia/Bangkok");
		$config['file_name']		= "RISET_".time();
		$this->load->library('upload', $config);
		var_dump($_FILES);
		if(!$this->upload->do_upload('file')){
			//gagal
			$error = array('error' => $this->upload->display_errors());
			// var_dump($error);
		} else{
			$data['riset_file'] = $config['file_name'].$this->upload->data('file_ext');
			$this->ModelRiset->insert($data);
			redirect('admin/risetAll/Success');
		}
	}

	public function pesanAll()
	{
        $data['all'] = $this->ModelKontak->selectAll()->result_array();		
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/pesanAll',$data);
		$this->load->view('admin/layouts/footer');
	}

	public function agendaAll()
	{
        $data['all'] = $this->ModelAgenda->selectAll()->result_array();		
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/agendaAll',$data);
		$this->load->view('admin/layouts/footer');
	}

	public function agendaPost()
	{
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/agendaPost');
		$this->load->view('admin/layouts/footer');
	}

	public function addAgenda(){
		$insert = $this->input->post();
		$insert['agenda_tanggal'] = date("Y-m-d",strtotime($this->input->post('agenda_tanggal')));
		// var_dump($insert);
		$this->ModelAgenda->insert($insert);
		redirect('admin/agendaAll/Success');
	}
}
