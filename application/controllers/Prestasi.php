<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

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
	public function index()
	{
        $data['all'] = $this->ModelNews->selectAll(5)->result_array();
        $data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$this->load->view('berita',$data);
		$this->load->view('layouts/footer');
    }
    
    public function tahun($year,$sekolah){
		if($sekolah == 'TKBS'){
			$skl = "TK Bumi Siliwangi";
		}else if($sekolah == 'TKKC'){
			$skl = "TK Kampus Cibiru";
		}else if($sekolah == 'SDBS'){
			$skl = "SD Bumi Siliwangi";
		}else if($sekolah == 'SDKC'){
			$skl = "SD Kampus Cibiru";
		}else if($sekolah == 'SDKT'){
			$skl = "SD Kampus Tasikmalaya";
		}else if($sekolah == 'SDKS'){
			$skl = "SD Kampus Serang";
		}else if($sekolah == 'SMPBS'){
			$skl = "SMP Bumi Siliwangi";
		}else if($sekolah == 'SMPKC'){
			$skl = "SMP Kampus Cibiru";
		}else if($sekolah == 'SMABS'){
			$skl = "SMA Bumi Siliwangi";
		}

		$data['all'] = $this->ModelPrestasi->selectByYear($year,$skl)->result_array();
        $data['prestasi'] = $this->ModelPrestasi->selectYear()->result_array();
		$this->load->view('layouts/header',$data);
		$this->load->view('prestasi',$data);
		$this->load->view('layouts/footer');		
	}
}
