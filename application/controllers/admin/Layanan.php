<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('layanan_model');
	}

	public function index()
	{
		$layanan = $this->layanan_model->listing();
		$data = array(
			'title'   => 'Data Layanan (' . count($layanan) . ')',
			'layanan'	=> $layanan,
			'isi'		=> 'admin/layanan/list'

		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	public function tambah()
	{

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules(
			'judul_layanan',
			'Judul Layanan',
			'required',
			array('required' => '%s harus diisi')
		);

		$valid->set_rules(
			'isi_layanan',
			'Isi Layanan',
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
					'title'  			=> 'Tambah Layanan ',
					'error_upload'	=> $this->upload->display_errors(),
					'isi'				=> 'admin/layanan/tambah'
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
					'slug_layanan' 		=> url_title($this->input->post('judul_layanan'), 					'dash', TRUE),
					'judul_layanan' 	=> $i->post('judul_layanan'),
					'isi_layanan' 		=> $i->post('isi_layanan'),
					'gambar'			=> $upload_data['uploads']['file_name'],
					'status_layanan'	=> $i->post('status_layanan'),
					'keywords'			=> $i->post('keywords'),
					'tanggal_post'		=> date('Y-m-d H:i:s')
				);
				$this->layanan_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Layanan telah ditambahkan');
				redirect(base_url('admin/layanan'), 'refresh');
			}
		}
		// End Masuk Database
		$data = array(
			'title'  		=> 'Tambah Layanan ',
			'isi'			=> 'admin/layanan/tambah'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function edit($id_layanan)
	{
		$layanan  	= $this->layanan_model->detail($id_layanan);

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules(
			'judul_layanan',
			'Judul Layanan',
			'required',
			array('required' => '%s harus diisi')
		);

		$valid->set_rules(
			'isi_layanan',
			'Isi Layanan',
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
						'title'  			=> 'Edit Layanan ',
						'layanan'			=> $layanan,
						'error_upload'	=> $this->upload->display_errors(),
						'isi'				=> 'admin/layanan/edit'
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
					if ($layanan->gambar != "") {
						unlink('.assets/upload/image/' . $layanan->gambar);
						unlink('.assets/upload/image/thumbs/' . $layanan->gambar);
					}

					$data = array(
						'id_user' 			=> $this->session->userdata('id_user'),
						'slug_layanan' 		=> url_title($this->input->post('judul_layanan'), 					'dash', TRUE),
						'judul_layanan' 	=> $i->post('judul_layanan'),
						'isi_layanan' 		=> $i->post('isi_layanan'),
						'gambar'			=> $upload_data['uploads']['file_name'],
						'status_layanan'	=> $i->post('status_layanan'),
						'keywords'			=> $i->post('keywords')
					);
					$this->layanan_model->edit($data);
					$this->session->set_flashdata('sukses', 'Layanan telah diedit');
					redirect(base_url('admin/layanan'), 'refresh');
				}
			} else {
				//Update layanan tanpa gambar baru
				$i = $this->input;
				$data = array(
					'id_user' 			=> $this->session->userdata('id_user'),
					'slug_layanan' 		=> url_title($this->input->post('judul_layanan'), 					'dash', TRUE),
					'judul_layanan' 	=> $i->post('judul_layanan'),
					'isi_layanan' 		=> $i->post('isi_layanan'),
					'gambar'			=> $upload_data['uploads']['file_name'],
					'status_layanan'	=> $i->post('status_layanan'),
					'keywords'			=> $i->post('keywords')
				);
				$this->layanan_model->edit($data);
				$this->session->set_flashdata('sukses', 'Layanan telah diedit');
				redirect(base_url('admin/layanan'), 'refresh');
			}
		}
		// End Masuk Database
		$data = array(
			'title'  		=> 'Edit Layanan ',
			'layanan'		=> $layanan,
			'isi'			=> 'admin/layanan/edit'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function delete($id_layanan)
	{
		// proteksi delete
		$this->check_login->check();

		$layanan = $this->layanan_model->detail($id_layanan);

		//hapus gambar
		if ($layanan->gambar != "") {
			unlink('.assets/upload/image/' . $layanan->gambar);
			unlink('.assets/upload/image/thumbs/' . $layanan->gambar);
		}
		//End hapus gambar
		$data = array('id_layanan' => $layanan->id_layanan);
		$this->layanan_model->delete($data);
		$this->session->set_flashdata('sukses', 'Layanan telah dihapus');
		redirect(base_url('admin/layanan'), 'refresh');
	}
}
