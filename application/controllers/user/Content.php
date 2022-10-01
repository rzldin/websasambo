<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Content extends CI_Controller
{
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
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/nav', $data);
		$this->load->view('user/content/pariwisata/list', $data, FALSE);
		$this->load->view('user/layout/footer', $data);
	}

	public function ekonomi()
	{
		$data = array(
			'berita' => $this->berita_model->home(2),
			'title'  => 'Sasambo - Ekonomi'
		);
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/nav', $data);
		$this->load->view('user/content/ekonomi/list', $data, FALSE);
		$this->load->view('user/layout/footer', $data);
	}

	public function teknologi()
	{
		$data = array(
			'berita' => $this->berita_model->home(3),
			'title'  => 'Sasambo - Teknologi'
		);
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/nav', $data);
		$this->load->view('user/content/teknologi/list', $data, FALSE);
		$this->load->view('user/layout/footer', $data);
	}

	public function olahraga()
	{
		$data = array(
			'berita' => $this->berita_model->home(4),
			'title'  => 'Sasambo - Olahraga'
		);
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/nav', $data);
		$this->load->view('user/content/olahraga/list', $data, FALSE);
		$this->load->view('user/layout/footer', $data);
	}

	public function pendidikan()
	{
		$data = array(
			'berita' => $this->berita_model->home(5),
			'title'  => 'Sasambo - Pendidikan'
		);
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/nav', $data);
		$this->load->view('user/content/pendidikan/list', $data, FALSE);
		$this->load->view('user/layout/footer', $data);
	}

	public function politik()
	{
		$data = array(
			'berita' => $this->berita_model->home(6),
			'title'  => 'Sasambo - Politik'
		);
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/nav', $data);
		$this->load->view('user/content/politik/list', $data, FALSE);
		$this->load->view('user/layout/footer', $data);
	}

	public function sosbud()
	{
		$data = array(
			'berita' => $this->berita_model->home(7),
			'title'  => 'Sasambo - Sosbud'
		);
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/nav', $data);
		$this->load->view('user/content/sosbud/list', $data, FALSE);
		$this->load->view('user/layout/footer', $data);
	}

	public function hukum()
	{
		$data = array(
			'berita' => $this->berita_model->home(8),
			'title'  => 'Sasambo - Hukum'
		);
		$this->load->view('user/layout/head', $data);
		$this->load->view('user/layout/nav', $data);
		$this->load->view('user/content/hukum/list', $data, FALSE);
		$this->load->view('user/layout/footer', $data);
	}
}
