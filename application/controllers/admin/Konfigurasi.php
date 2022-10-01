<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{

	//Load data Konfigurasi
	public function __construct()
	{
		parent::__construct();
		//proteksi
		if ($this->session->userdata('akses_level') != "Admin") {
			$this->session->set_flashdata('sukses', 'Anda Tidak Memilik Hak Akses');
			redirect(base_url('admin/dasbor'), 'refresh');
		}
		//end proteksi
		$this->load->model('konfigurasi_model');
	}

	// Konfigurasi Umum
	public function index()
	{
		$konfigurasi  				= $this->konfigurasi_model->listing();

		$this->form_validation->set_rules(
			'namaweb',
			'Nama perusahaan',
			'required',
			array('required'				=> '%s harus diisi')
		);

		if ($this->form_validation->run() == FALSE) {
			// End validasi

			$data   					= array(
				'title'		=> 'Konfigurasi Website',
				'konfigurasi'	=> $konfigurasi,
				'isi'			=> 'admin/konfigurasi/list'
			);

			$this->load->view('admin/layout/wrapper', $data, FALSE);
			// Masuk Database
		} else {
			$i = $this->input;

			$data = array(
				'id_konfigurasi'		=> $konfigurasi->id_konfigurasi,
				'id_user'				=> $this->session->userdata('id_user'),
				'namaweb' 				=> $i->post('namaweb'),
				'tagline' 				=> $i->post('tagline'),
				'email' 				=> $i->post('email'),
				'telepon' 				=> $i->post('telepon'),
				'website' 				=> $i->post('website'),
				'deskripsi' 			=> $i->post('deskripsi'),
				'keyword' 				=> $i->post('keyword'),
				'metatext' 				=> $i->post('metatext'),
				'map' 					=> $i->post('map'),
				'facebook' 				=> $i->post('facebook'),
				'instagram' 			=> $i->post('instagram')
			);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diupdate');
			redirect(base_url('admin/konfigurasi'), 'refresh');
		}
		// End Masuk Database
	}


	// Konfigurasi Logo
	public function logo()
	{
		$konfigurasi  				= $this->konfigurasi_model->listing();

		$this->form_validation->set_rules(
			'id_konfigurasi',
			'Nama perusahaan',
			'required',
			array('required'				=> '%s harus diisi')
		);

		if ($this->form_validation->run()) {
			$config['upload_path']          = './assets/upload/image/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 5000; // Dalam Kilobyte
			$config['max_width']            = 5000; // Dalam Pixel
			$config['max_height']           = 5000; // Dalam Pixel
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('logo')) {
				// End validasi

				$data   					= array(
					'title'		=> 'Konfigurasi Website',
					'konfigurasi'	=> $konfigurasi,
					'error'		=> $this->upload->display_errors(),
					'isi'			=> 'admin/konfigurasi/logo'
				);

				$this->load->view('admin/layout/wrapper', $data, FALSE);
				// Masuk Database
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

				$i = $this->input;

				$data = array(
					'id_konfigurasi'		=> $konfigurasi->id_konfigurasi,
					'id_user'				=> $this->session->userdata('id_user'),
					'logo'					=> $upload_data['uploads']['file_name']
				);
				$this->konfigurasi_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data telah diupdate');
				redirect(base_url('admin/konfigurasi/logo'), 'refresh');
			}
		}
		// End Masuk Database
		$data   					= array(
			'title'		=> 'Konfigurasi Website',
			'konfigurasi'	=> $konfigurasi,
			'isi'			=> 'admin/konfigurasi/logo'
		);

		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
}
