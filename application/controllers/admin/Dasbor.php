<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasbor extends CI_Controller
{

	public function index()
	{
		$data = array(
			'title'  => 'Halaman Dasbor Administrator',
			'isi'    => 'admin/dasbor/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
}
