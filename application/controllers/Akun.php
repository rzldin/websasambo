<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {



//Load Model
public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}


public function profile()
{
	$data = array(
					'user' => $this->user_model->listing(),
					'title'  => 'Sasambo - User Profile'
				);
	$this->load->view('user/layout/head', $data);
	$this->load->view('user/layout/nav', $data);
	$this->load->view('user/profile/list', $data, FALSE);
	$this->load->view('user/layout/footer', $data);
}



}