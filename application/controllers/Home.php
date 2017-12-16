<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	//halaman utama
	 public function index()
	{
		$data['berita'] = $this->ModelNews->selectAll(4)->result_array();
		$data['agenda'] = $this->ModelAgenda->selectAll(3)->result_array();
		$data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$this->load->view('index',$data);
		$this->load->view('layouts/footer');
	}

	//halaman sejarah
	public function sejarah()
	{
		$data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$this->load->view('sejarah');
		$this->load->view('layouts/footer');
	}
	
	//halaman visimisi
	public function visimisi()
	{
		$data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$this->load->view('visimisi');
		$this->load->view('layouts/footer');
	}

	//halaman kontak
	public function kontak()
	{
		$data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$this->load->view('kontak');
		$this->load->view('layouts/footer');
	}

	public function addPesan(){
		$data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$insert['kontak_tanggal'] = date('Y-m-d');
		// var_dump($insert);
		$this->ModelKontak->insert($insert);
		redirect('kontak/Success');
	}
	
	//halaman galeri
	public function galeriFoto()
	{
		$data['galeri'] = $this->ModelGaleri->selectImages()->result_array();
		$data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$this->load->view('galeriFoto',$data);
		$this->load->view('layouts/footer');
	}

	public function galeriFotoCaption($id){
		$temp = $this->ModelGaleri->selectById($id)->row_array();

		$data['galeri'] = $this->ModelGaleri->selectByCaption($temp['galeri_caption'])->result_array();
		$data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$this->load->view('galeriFotoCaption',$data);
		$this->load->view('layouts/footer');		
	}
	
	public function galeriVideo()
	{
		$data['galeri'] = $this->ModelGaleri->selectVideos()->result_array();
		$data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$this->load->view('galeriVideo',$data);
		$this->load->view('layouts/footer');
	}

	//halaman pengelola
	public function pengelola()
	{
		$data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$this->load->view('pengelola');
		$this->load->view('layouts/footer');
	}

	//halaman pimpinan
	public function pimpinan()
	{
		$data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$this->load->view('pimpinan');
		$this->load->view('layouts/footer');
	}

	//halaman riset
	public function riset()
	{
		$data['riset'] = $this->ModelRiset->selectAll()->result_array();
		$data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$this->load->view('riset',$data);
		$this->load->view('layouts/footer');
	}
}
