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
		$this->load->view('layouts/header');
		$this->load->view('index');
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
	
	//halaman galeri
	public function galeri()
	{
		$this->load->view('layouts/header');
		$this->load->view('galeri');
		$this->load->view('layouts/footer');
	}

	//halaman pimpinan
	public function pengelola()
	{
		$this->load->view('layouts/header');
		$this->load->view('pengelola');
		$this->load->view('layouts/footer');
	}

	//halaman riset
	public function riset()
	{
		$this->load->view('layouts/header');
		$this->load->view('riset');
		$this->load->view('layouts/footer');
	}
}
