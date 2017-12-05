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
		$this->load->view('layouts/header');
		$this->load->view('index',$data);
		$this->load->view('layouts/footer');
	}

	//halaman sejarah
	public function sejarah()
	{
		$this->load->view('layouts/header');
		$this->load->view('sejarah');
		$this->load->view('layouts/footer');
	}
	
	//halaman visimisi
	public function visimisi()
	{
		$this->load->view('layouts/header');
		$this->load->view('visimisi');
		$this->load->view('layouts/footer');
	}

	//halaman kontak
	public function kontak()
	{
		$this->load->view('layouts/header');
		$this->load->view('kontak');
		$this->load->view('layouts/footer');
	}

	public function addPesan(){
		$insert = $this->input->post();
		$insert['kontak_tanggal'] = date('Y-m-d');
		// var_dump($insert);
		$this->ModelKontak->insert($insert);
		redirect('kontak/Success');
	}
	
	//halaman galeri
	public function galeri()
	{
		$data['galeri'] = $this->ModelGaleri->selectAll()->result_array();
		$this->load->view('layouts/header');
		$this->load->view('galeri',$data);
		$this->load->view('layouts/footer');
	}

	//halaman pengelola
	public function pengelola()
	{
		$this->load->view('layouts/header');
		$this->load->view('pengelola');
		$this->load->view('layouts/footer');
	}

	//halaman pimpinan
	public function pimpinan()
	{
		$this->load->view('layouts/header');
		$this->load->view('pimpinan');
		$this->load->view('layouts/footer');
	}

	//halaman riset
	public function riset()
	{
		$data['riset'] = $this->ModelRiset->selectAll()->result_array();
		$this->load->view('layouts/header');
		$this->load->view('riset',$data);
		$this->load->view('layouts/footer');
	}
}
