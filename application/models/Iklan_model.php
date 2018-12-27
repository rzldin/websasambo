<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iklan_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function listing()
	{
		$this->db->select('iklan.*,
						   user.nama');
		$this->db->from('iklan');
		//join
		$this->db->join('user','user.id_user = iklan.id_user','LEFT');
		//end join
		$this->db->order_by('id_iklan', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function home()
	{
		$this->db->select('iklan.*,
						   user.nama');
		$this->db->from('iklan');
		//join
		$this->db->join('user','user.id_user = iklan.id_user','LEFT');
		//end join
		$this->db->order_by('id_iklan', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_iklan)
	{
		$this->db->select('*');
		$this->db->from('iklan');
		$this->db->where('id_iklan',$id_iklan);
		$this->db->order_by('id_iklan');
		$query = $this->db->get();
		return $query->row();
	}

	public function login($iklan, $password)
	{
		$this->db->select('*');
		$this->db->from('iklan');
		$this->db->where(array('iklan'   => $iklan,
							   'password'  	=> sha1($password)));
		$this->db->order_by('id_iklan');
		$query = $this->db->get();
		return $query->row();
	}

	public function tambah($data)
	{
		$this->db->insert('iklan',$data);
	}

	public function edit($data)
	{
		$this->db->where('id_iklan', $data['id_iklan']);
		$this->db->update('iklan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_iklan', $data['id_iklan']);
		$this->db->delete('iklan', $data);
	}
}