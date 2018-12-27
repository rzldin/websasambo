<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('iklan_model');
	}


	public function pariwisata()
		{
			$data = array(
				'berita' => $this->berita_model->home(1),
				'title'  => 'Sasambo - Pariwisata'
			);
			$this->load->view('content/pariwisata/list', $data, FALSE);
		}
	
	public function ekonomi()
		{
			$data = array(
				'berita' => $this->berita_model->home(2),
				'title'  => 'Sasambo - Ekonomi'
			);
			$this->load->view('content/ekonomi/list', $data, FALSE);
		}

	public function teknologi()
		{
			$data = array(
				'berita' => $this->berita_model->home(3),
				'title'  => 'Sasambo - Teknologi'
			);
			$this->load->view('content/teknologi/list', $data, FALSE);
		}

	public function olahraga()
		{
			$data = array(
				'berita' => $this->berita_model->home(4),
				'title'  => 'Sasambo - Olahraga'
			);
			$this->load->view('content/olahraga/list', $data, FALSE);
		}

	public function pendidikan()
		{
			$data = array(
				'berita' => $this->berita_model->home(5),
				'title'  => 'Sasambo - Pendidikan'
			);
			$this->load->view('content/pendidikan/list', $data, FALSE);
		}

	public function politik()
		{
			$data = array(
				'berita' => $this->berita_model->home(6),
				'title'  => 'Sasambo - Politik'
			);
			$this->load->view('content/politik/list', $data, FALSE);
		}

	public function sosbud()
		{
			$data = array(
				'berita' => $this->berita_model->home(7),
				'title'  => 'Sasambo - Sosbud'
			);
			$this->load->view('content/sosbud/list', $data, FALSE);
		}

	public function hukum()
		{
			$data = array(
				'berita' => $this->berita_model->home(8),
				'title'  => 'Sasambo - Hukum'
			);
			$this->load->view('content/hukum/list', $data, FALSE);
		}


}
