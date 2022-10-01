<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Iklan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('iklan_model');
	}

	public function index()
	{
		$iklan = $this->iklan_model->listing();
		$data = array(
			'title'   => 'Data Iklan (' . count($iklan) . ')',
			'iklan'	=> $iklan,
			'isi'		=> 'admin/iklan/list'

		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	public function tambah()
	{

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules(
			'isi_iklan',
			'Isi Iklan',
			'required',
			array('required' => '%s harus diisi')
		);


		if ($valid->run()) {
			$config['upload_path']          = './assets/upload/image/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 5000; // Dalam Kilobyte
			$config['max_width']            = 5000; // Dalam Pixel
			$config['max_height']           = 5000; // Dalam Pixel
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				// End Validasi

				$data = array(
					'title'  			=> 'Tambah Iklan ',
					'error_upload'	=> $this->upload->display_errors(),
					'isi'				=> 'admin/iklan/tambah'
				);
				$this->load->view('admin/layout/wrapper', $data, FALSE);
			} else {
				// Proses manipulasi gambar
				$upload_data					= array('uploads'	=> $this->upload->data());
				// Gambar asli disimpan di folder assets/upload/image
				// Kemudian gambar asli di copy untuk versi mini size ke folder assets/upload/image/thumbs

				$config['image_library'] 	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/' . $upload_data['uploads']['file_name'];
				// Gambar ver kecil di pindahkan
				$config['new_image']		= './assets/upload/image/thumbs/' . $upload_data['uploads']['file_name'];
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width']         	= 200;
				$config['height']       	= 200;
				$config['thumb_marker']     = '';

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();

				$i = $this->input;

				$data = array(
					'id_user' 			=> $this->session->userdata('id_user'),
					'isi_iklan' 		=> $i->post('isi_iklan'),
					'gambar'			=> $upload_data['uploads']['file_name'],
					'link_iklan'		=> $i->post('link_iklan'),
					'posisi_iklan'		=> $i->post('posisi_iklan'),
					'tanggal_post'		=> date('Y-m-d H:i:s')
				);
				$this->iklan_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Iklan telah ditambahkan');
				redirect(base_url('admin/iklan'), 'refresh');
			}
		}
		// End Masuk Database
		$data = array(
			'title'  		=> 'Tambah Iklan ',
			'isi'			=> 'admin/iklan/tambah'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function edit($id_iklan)
	{
		$iklan  	= $this->iklan_model->detail($id_iklan);

		// Validasi
		$valid = $this->form_validation;


		$valid->set_rules(
			'isi_iklan',
			'Isi Iklan',
			'required',
			array('required' => '%s harus diisi')
		);


		if ($valid->run()) {
			// kalau gak ganti gambar
			if (!empty($_FILES['gambar']['name'])) {

				$config['upload_path']          = './assets/upload/image/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 5000; // Dalam Kilobyte
				$config['max_width']            = 5000; // Dalam Pixel
				$config['max_height']           = 5000; // Dalam Pixel
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					// End Validasi

					$data = array(
						'title'  			=> 'Edit Iklan ',
						'iklan'			=> $iklan,
						'error_upload'	=> $this->upload->display_errors(),
						'isi'				=> 'admin/iklan/edit'
					);
					$this->load->view('admin/layout/wrapper', $data, FALSE);
				} else {
					// Proses manipulasi gambar
					$upload_data					= array('uploads'	=> $this->upload->data());
					// Gambar asli disimpan di folder assets/upload/image
					// Kemudian gambar asli di copy untuk versi mini size ke folder assets/upload/image/thumbs

					$config['image_library'] 	= 'gd2';
					$config['source_image'] 	= './assets/upload/image/' . $upload_data['uploads']['file_name'];
					// Gambar ver kecil di pindahkan
					$config['new_image']		= './assets/upload/image/thumbs/' . $upload_data['uploads']['file_name'];
					$config['create_thumb'] 	= TRUE;
					$config['maintain_ratio'] 	= TRUE;
					$config['width']         	= 200;
					$config['height']       	= 200;
					$config['thumb_marker']     = '';

					$this->load->library('image_lib', $config);

					$this->image_lib->resize();

					$i = $this->input;

					//Hapus gambar lama jika ada upload gambar baru
					if ($iklan->gambar != "") {
						unlink('.assets/upload/image/' . $iklan->gambar);
						unlink('.assets/upload/image/thumbs/' . $iklan->gambar);
					}

					$data = array(
						'id_user' 			=> $this->session->userdata('id_user'),
						'isi_iklan' 		=> $i->post('isi_iklan'),
						'gambar'			=> $upload_data['uploads']['file_name'],
						'link_iklan'		=> $i->post('link_iklan'),
						'posisi_iklan'		=> $i->post('posisi_iklan')
					);
					$this->iklan_model->edit($data);
					$this->session->set_flashdata('sukses', 'Iklan telah diedit');
					redirect(base_url('admin/iklan'), 'refresh');
				}
			} else {
				//Update iklan tanpa gambar baru
				$i = $this->input;
				$data = array(
					'id_user' 			=> $this->session->userdata('id_user'),
					'isi_iklan' 		=> $i->post('isi_iklan'),
					'gambar'			=> $upload_data['uploads']['file_name'],
					'posisi_iklan'		=> $i->post('posisi_iklan')
				);
				$this->iklan_model->edit($data);
				$this->session->set_flashdata('sukses', 'Iklan telah diedit');
				redirect(base_url('admin/iklan'), 'refresh');
			}
		}
		// End Masuk Database
		$data = array(
			'title'  		=> 'Edit Iklan ',
			'iklan'		=> $iklan,
			'isi'			=> 'admin/iklan/edit'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function delete($id_iklan)
	{
		// proteksi delete
		$this->check_login->check();

		$iklan = $this->iklan_model->detail($id_iklan);

		//hapus gambar
		if ($iklan->gambar != "") {
			unlink('.assets/upload/image/' . $iklan->gambar);
			unlink('.assets/upload/image/thumbs/' . $iklan->gambar);
		}
		//End hapus gambar
		$data = array('id_iklan' => $iklan->id_iklan);
		$this->iklan_model->delete($data);
		$this->session->set_flashdata('sukses', 'Iklan telah dihapus');
		redirect(base_url('admin/iklan'), 'refresh');
	}
}
