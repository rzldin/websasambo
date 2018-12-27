<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	//Listing Berita
	public function listing()
	{
		$this->db->select('berita.*,
						   kategori.nama_kategori, kategori.slug_kategori,
						   user.nama');
		$this->db->from('berita');
		//join
		$this->db->join('kategori','kategori.id_kategori = berita.id_kategori','LEFT');
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		//end join
		$this->db->where(array( 'status_berita'			=> 'Publish',
								'jenis_berita'			=> 'Berita'));
		$this->db->order_by('id_berita', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}


	//Listing Berita Home
	public function home($id)
	{
		$this->db->select('berita.*,
						   kategori.nama_kategori, kategori.slug_kategori,
						   user.nama');
		$this->db->from('berita');
		//join
		$this->db->join('kategori','kategori.id_kategori = berita.id_kategori','LEFT');
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		$this->db->where('berita.id_kategori',$id);
		//end join
		$this->db->order_by('id_berita', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function berita_hangat()
	{
		$this->db->select('berita.*,
						   kategori.nama_kategori, kategori.slug_kategori,
						   user.nama');
		$this->db->from('berita');
		//join
		$this->db->join('kategori','kategori.id_kategori = berita.id_kategori','LEFT');
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		//end join
		$this->db->limit(1, 0);
		$this->db->order_by('berita.tanggal_post', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	
	//Detail Berita
	public function detail($id_berita)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->where('id_berita',$id_berita);
		$this->db->order_by('id_berita');
		$query = $this->db->get();
		return $query->row();
	}

	public function login($berita, $password)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->where(array('berita'   => $berita,
							   'password'  	=> sha1($password)));
		$this->db->order_by('id_berita');
		$query = $this->db->get();
		return $query->row();
	}

	public function tambah($data)
	{
		$this->db->insert('berita',$data);
	}

	public function edit($data)
	{
		$this->db->where('id_berita', $data['id_berita']);
		$this->db->update('berita', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_berita', $data['id_berita']);
		$this->db->delete('berita', $data);
	}
}