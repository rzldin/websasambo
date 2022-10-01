<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	// Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
	}

	// Main page Kategori
	public function index()
	{
		$kategori = $this->kategori_model->listing();

		//Validasi
		$this->form_validation->set_rules(
			'nama_kategori',
			'Nama Kategori',
			'required|is_unique[kategori.nama_kategori]',
			array(
				'required'				=> '%s harus diisi',
				'is_unique'				=> '%s <strong>' . $this->input->post('nama_kategori') . '</strong> sudah ada. Buat Kategori baru!'
			)
		);
		if ($this->form_validation->run() == FALSE) {
			// End validasi


			$data 	  = array(
				'title'			=> 'Data Kategori Berita (' . count($kategori) . ')',
				'kategori'		=> $kategori,
				'isi'			=> 'admin/kategori/list'

			);
			$this->load->view('admin/layout/wrapper', $data, FALSE);

			// Masuk Database
		} else {

			$i = $this->input;

			$slug_kategori = url_title($this->input->post('nama_kategori'), 'dash', TRUE);

			$data = array(
				'slug_kategori'				=> $slug_kategori,
				'nama_kategori' 			=> $i->post('nama_kategori'),
				'urutan' 					=> $i->post('urutan')
			);
			$this->kategori_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambahkan');
			redirect(base_url('admin/kategori'), 'refresh');
		}
		// End Masuk Database
	}
	// Edit kategori
	public function edit($id_kategori)
	{
		$kategori = $this->kategori_model->detail($id_kategori);

		//Validasi
		$this->form_validation->set_rules(
			'nama_kategori',
			'Nama Kategori',
			'required',
			array('required'				=> '%s harus diisi')
		);

		if ($this->form_validation->run() == FALSE) {
			// End validasi


			$data 	  = array(
				'title'			=> 'Data Kategori Berita (' . count($kategori) . ')',
				'kategori'		=> $kategori,
				'isi'			=> 'admin/kategori/edit'

			);
			$this->load->view('admin/layout/wrapper', $data, FALSE);

			// Masuk Database
		} else {

			$i = $this->input;

			$slug_kategori = url_title($this->input->post('nama_kategori'), 'dash', TRUE);

			$data = array(
				'id_kategori'				=> $id_kategori,
				'slug_kategori'				=> $slug_kategori,
				'nama_kategori' 			=> $i->post('nama_kategori'),
				'urutan' 					=> $i->post('urutan')
			);
			$this->kategori_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diupdate');
			redirect(base_url('admin/kategori'), 'refresh');
		}
		// End Masuk Database
	}

	//Delete
	public function delete($id_kategori)
	{
		// proteksi delete
		$this->check_login->check();

		$user = $this->kategori_model->detail($id_kategori);
		$data = array('id_kategori' => $user->id_kategori);
		$this->kategori_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/kategori'), 'refresh');
	}
}
