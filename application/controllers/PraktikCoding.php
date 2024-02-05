<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PraktikCoding extends CI_Controller
{
   public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
        redirect('auth');}
    }

    public function PraktikCoding_1()
    {
        $data['title'] = 'PraktikCoding';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/PraktikCoding/sidemenu_praktikcoding', $data);
        $this->load->view('user/PraktikCoding/praktikcoding', $data);
        $this->load->view('templates/footer');
    }

    public function PraktikCoding_2()
    {
        $data['title'] = 'PraktikCoding';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/PraktikCoding/sidemenu_praktikcoding', $data);
        $this->load->view('user/PraktikCoding/praktikcoding_2', $data);
        $this->load->view('templates/footer');
    }

    public function PraktikCoding_3()
    {
        $data['title'] = 'PraktikCoding';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/PraktikCoding/sidemenu_praktikcoding', $data);
        $this->load->view('user/PraktikCoding/praktikcoding_3', $data);
        $this->load->view('templates/footer');
    }

   
    
}
