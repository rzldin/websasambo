<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('iklan_model');
	}

	// Main page - Homepage
	public function index()
	{
		$berita_pariwisata 				= $this->berita_model->home(1);
		$berita_ekonomi 				= $this->berita_model->home(2);
		$berita_teknologi 				= $this->berita_model->home(3);
		$berita_olahraga 				= $this->berita_model->home(4);
		$berita_pendidikan				= $this->berita_model->home(5);
		$berita_politik					= $this->berita_model->home(6);
		$berita_sosbud 					= $this->berita_model->home(7);
		$berita_hukum 					= $this->berita_model->home(8);
		$berita_hangat 					= $this->berita_model->berita_hangat();
		$iklan 							= $this->iklan_model->home();

		$data = array( 'title'  			=> 'Sasambo - Berita Online Sumbawa',
			 		   'berita_pariwisata' 	=> $berita_pariwisata,
			 		   'berita_ekonomi' 	=> $berita_ekonomi,
			 		   'berita_teknologi'	=> $berita_teknologi,
			 		   'berita_olahraga'	=> $berita_olahraga,
			 		   'berita_pendidikan'	=> $berita_pendidikan,
			 		   'berita_politik'		=> $berita_politik,
			 		   'berita_sosbud'		=> $berita_sosbud,
			 		   'berita_hukum'		=> $berita_hukum,
			 		   'berita_hangat'		=> $berita_hangat,
			 		   'iklan'				=> $iklan,
					   'isi'    			=> 'home/list'
					 );
		$this->load->view('layout/wrapper', $data, FALSE);
	}



	//Menampilkan Berita
	public function read($slug_berita)
	{
		$berita 		= $this->berita_model->read($slug_berita);
					  
		$data = array(	'title'				=> 'Sasambo',
						'berita'			=> $berita,
						'isi'				=> 'home/read_view'
						);
									  
		$this->load->view('layout/wrapper', $data, FALSE);
	}


}
