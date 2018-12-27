<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	// Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
	}


	// Main Page Kontak
	public function index()
	{
		$data 		= array('title'   => 'Kontak Sasambo - Portal Berita',
					  'isi'		=> 'kontak/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}











}