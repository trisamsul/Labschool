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
		$this->load->view('layouts/header.php');
		$this->load->view('index');
		$this->load->view('layouts/footer.php');
	}

	//halaman sejarah
	public function sejarah()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('sejarah');
		$this->load->view('layouts/footer.php');
	}
	
	//halaman visimisi
	public function visimisi()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('visimisi');
		$this->load->view('layouts/footer.php');
	}

	//halaman kontak
	public function kontak()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('kontak');
		$this->load->view('layouts/footer.php');
	}
}
