<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{
   public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
        redirect('auth');}
    }

    public function materi_tabel_1()
    {
        $data['title'] = 'Materi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/materi/sidemenu_materi', $data);
        $this->load->view('user/materi/materi', $data);
        $this->load->view('templates/footer');
    }

    public function materi_tabel_2()
    {
        $data['title'] = 'Materi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/materi/sidemenu_materi', $data);
        $this->load->view('user/materi/materi_tabel_2', $data);
        $this->load->view('templates/footer');
    }

    public function materi_tabel_3()
    {
        $data['title'] = 'Materi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/materi/sidemenu_materi', $data);
        $this->load->view('user/materi/materi_tabel_3', $data);
        $this->load->view('templates/footer');
    }

    public function materi_multimedia_1()
    {
        $data['title'] = 'Materi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/materi/sidemenu_materi', $data);
        $this->load->view('user/materi/materi_multimedia_1', $data);
        $this->load->view('templates/footer');
    }

    public function materi_multimedia_2()
    {
        $data['title'] = 'Materi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/materi/sidemenu_materi', $data);
        $this->load->view('user/materi/materi_multimedia_2', $data);
        $this->load->view('templates/footer');
    }

    public function materi_multimedia_3()
    {
        $data['title'] = 'Materi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/materi/sidemenu_materi', $data);
        $this->load->view('user/materi/materi_multimedia_3', $data);
        $this->load->view('templates/footer');
    }

    public function materi_form_1()
    {
        $data['title'] = 'Materi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/materi/sidemenu_materi', $data);
        $this->load->view('user/materi/materi_form_1', $data);
        $this->load->view('templates/footer');
    }

    public function materi_form_2()
    {
        $data['title'] = 'Materi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/materi/sidemenu_materi', $data);
        $this->load->view('user/materi/materi_form_2', $data);
        $this->load->view('templates/footer');
    }

    public function materi_form_3()
    {
        $data['title'] = 'Materi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/materi/sidemenu_materi', $data);
        $this->load->view('user/materi/materi_form_3', $data);
        $this->load->view('templates/footer');
    }
    
}
