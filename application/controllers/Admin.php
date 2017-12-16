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
		$this->head['prestasi'] = $this->ModelPrestasi->selectAll()->num_rows();
		$this->head['riset'] = $this->ModelRiset->selectAll()->num_rows();
		$this->head['galeri'] = $this->ModelGaleri->selectAll()->num_rows();
		$this->head['pesan'] = $this->ModelKontak->selectAll()->num_rows();
		$this->head['agenda'] = $this->ModelAgenda->selectAll()->num_rows();
	}
    
     //halaman utama
	public function index()
	{
        if(isset($_SESSION['logged_in'])){
			$count['berita'] = $this->ModelNews->selectAll()->num_rows();
			$count['riset'] = $this->ModelRiset->selectAll()->num_rows();
			$count['galeri_image'] = $this->ModelGaleri->selectImages()->num_rows();
			$count['galeri_video'] = $this->ModelGaleri->selectVideos()->num_rows();
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/index',$count);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
		
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
				'logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);
			redirect('admin/');			
		}
	}

	public function logOut(){
		$this->session->sess_destroy();
		redirect('');
	}

	public function gantiPassword(){
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/gantiPassword');
		$this->load->view('admin/layouts/footer');		
	}

	public function updatePass(){
		$form = $this->input->post();
		$data = $this->ModelAkun->check($this->session->userdata('username'),md5($form['old']))->row_array();

		if(isset($data)){
			// var_dump);
			$update['password'] = md5($form['new']);
			$this->ModelAkun->update($data['id'],$update);
			redirect('admin/login/change');
		}else{
			redirect('admin/gantiPassword/failed');
		}
		
	}

    public function newsAll()
	{
        if(isset($_SESSION['logged_in'])){
			$data['all'] = $this->ModelNews->selectAll()->result_array();		
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/newsAll',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
    }

    public function newsPost()
	{
		if(isset($_SESSION['logged_in'])){
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/newsPost');
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
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

	public function deleteNews($id){
		$this->ModelNews->delete($id);
		redirect('admin/newsAll');
	}

	public function galeriAll()
	{
        if(isset($_SESSION['logged_in'])){
			$data['all'] = $this->ModelGaleri->selectAll()->result_array();		
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/galeriAll',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
	}
	
	public function galeriPostImg()
	{
		if(isset($_SESSION['logged_in'])){
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/galeriPostImg');
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
	}

	public function galeriPostVid()
	{
		if(isset($_SESSION['logged_in'])){
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/galeriPostVid');
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
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
		// $config['file_name']		= "IMG_".time();
		$this->load->library('upload', $config);

		foreach($_FILES['photo'] as $key=>$val){
			$i = 1;
			foreach($val as $v)
			{
				$field_name = "IMG_".$i;
				$_FILES[$field_name][$key] = $v;
				$i++;
			}
		}

		unset($_FILES['foto']);

		// variabel error diubah, dari string menjadi array
		$error = array();
		$success = array();
		$i = 0;
		$t = (int) time();
		foreach($_FILES as $field_name => $file){
			$config['file_name']		= "IMG_".($t + $i );
			$this->upload->initialize($config);
		if ( ! $this->upload->do_upload($field_name)){
			$error[] = $this->upload->display_errors();
		}else{
			$success[] = $this->upload->data();
			$data['galeri_file'] = $config['file_name'].$this->upload->data('file_ext');
			$data['galeri_kategori'] = 0;
						$this->ModelGaleri->insert($data);
		}
		$i++;
		}
		redirect('admin/galeriAll/Success');
		
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

	public function deleteGaleri($id){
		$this->ModelGaleri->delete($id);
		redirect('admin/galeriAll');
	}

	public function risetAll()
	{
        if(isset($_SESSION['logged_in'])){
			$data['all'] = $this->ModelRiset->selectAll()->result_array();		
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/risetAll',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
	}

	public function risetPost()
	{
		if(isset($_SESSION['logged_in'])){
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/risetPost');
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
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

	public function deleteRiset($id){
		$this->ModelRiset->delete($id);
		redirect('admin/risetAll');
	}

	public function pesanAll()
	{
        if(isset($_SESSION['logged_in'])){
			$data['all'] = $this->ModelKontak->selectAll()->result_array();		
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/pesanAll',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
	}

	public function deletePesan($id){
		$this->ModelKontak->delete($id);
		redirect('admin/pesanAll');
	}

	public function agendaAll()
	{
        if(isset($_SESSION['logged_in'])){
			$data['all'] = $this->ModelAgenda->selectAll()->result_array();		
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/agendaAll',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
	}

	public function agendaPost()
	{
		if(isset($_SESSION['logged_in'])){
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/agendaPost');
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
	}

	public function addAgenda(){
		$insert = $this->input->post();
		$insert['agenda_tanggal'] = date("Y-m-d",strtotime($this->input->post('agenda_tanggal')));
		// var_dump($insert);
		$this->ModelAgenda->insert($insert);
		redirect('admin/agendaAll/Success');
	}

	public function deleteAgenda($id){
		$this->ModelAgenda->delete($id);
		redirect('admin/agendaAll');
	}

	public function prestasiAll()
	{
        if(isset($_SESSION['logged_in'])){
			$data['all'] = $this->ModelPrestasi->selectAll()->result_array();		
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/prestasiAll',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
	}

	public function prestasiPost()
	{
		if(isset($_SESSION['logged_in'])){
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/prestasiPost');
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/unauth');
		}
	}

	public function addPrestasi(){
		// var_dump($this->input->post());
		$data = $this->input->post();
		// print_r(nl2br($data['teks']))
		unset($data['_wysihtml5_mode']);
		// var_dump($data);

		$config['upload_path']		= './uploads/prestasi/';
		$config['allowed_types']	= '*';
		$config['max_size']			= 0;				
		date_default_timezone_set("Asia/Bangkok");
		$config['file_name']		= "PRESTASI_".time();
		$this->load->library('upload', $config);
		var_dump($_FILES);

		if(!$this->upload->do_upload('file')){
			//gagal
			//$error = array('error' => $this->upload->display_errors());
			$data['prestasi_foto'] = "default.jpg";
			// var_dump($error);
		} else{
			$data['prestasi_foto'] = $config['file_name'].$this->upload->data('file_ext');
		}

		$this->ModelPrestasi->insert($data);
		redirect('admin/prestasiAll/Success');
	}

	public function deletePrestasi($id){
		$this->ModelPrestasi->delete($id);
		redirect('admin/prestasiAll');
	}
}
