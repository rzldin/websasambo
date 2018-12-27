<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('id_kategori');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori',$id_kategori);
		$this->db->order_by('id_kategori');
		$query = $this->db->get();
		return $query->row();
	}


	public function tambah($data)
	{
		$this->db->insert('kategori',$data);
	}

	public function edit($data)
	{
		$this->db->where('id_kategori', $data['id_kategori']);
		$this->db->update('kategori', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kategori', $data['id_kategori']);
		$this->db->delete('kategori', $data);
	}
}