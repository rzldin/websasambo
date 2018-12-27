<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
    }


    public function register()
    {
        $this->load->view('user/register/list');
       
    }


    public function proses_register()
    {
        $valid = $this->form_validation;

        $valid->set_rules('nama', 'Nama', 'required',
            array( 'required' => '%s harus diisi'));

        $valid->set_rules('username', 'Username', 'required|trim|min_length[6]|max_length[24]|is_unique[user.username]',
            array( 'required'       => '%s harus diisi',
                   'min_length'     => '%s minimal 6 Karakter',
                   'max_length'     => '%s maksimal 24 Karakter',
                   'is_unique'      => '%s <strong>'.$this->input->post('username').'</strong> Sudah Di Gunakan. Buat username Baru!'));

        $valid->set_rules('email', 'Email', 'required|valid_email',
            array( 'required'       => '%s harus diisi',
                   'valid_email'    => 'Format %s Tidak Valid'));


        $valid->set_rules('password', 'Password', 'required|trim|min_length[6]',
            array( 'required'       => '%s harus diisi',
                   'min_length'     => '%s minimal 6 karakter'));

        if($valid->run() === FALSE) {

    }else{
        $i = $this->input;
        $data = array ( 'nama'          =>$i->post('nama'),
                        'username'      =>$i->post('username'),
                        'email'         =>$i->post('email'),
                        'password'      => sha1($i->post('password'))
                      );
        $this->register_model->register($data);
        $this->session->set_flashdata('sukses', 'Berhasil Registrasi');
        redirect(base_url('userlogin'),'refresh');
    }
}
    }


