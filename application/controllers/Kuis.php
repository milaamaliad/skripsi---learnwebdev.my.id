<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuis extends CI_Controller
{
   public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
        redirect('auth');}
    }

   public function kuis_tabel_1()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['fullname' => $this->session->userdata('fullname')], ['class' => $this->session->userdata('class')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kuis/sidemenu_kuis', $data);
        $this->load->view('user/kuis/kuis', $data);
        $this->load->view('templates/footer');
    }

    public function panduan_kuis()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['fullname' => $this->session->userdata('fullname')], ['class' => $this->session->userdata('class')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kuis/sidemenu_kuis', $data);
        $this->load->view('user/kuis/panduan_kuis', $data);
        $this->load->view('templates/footer');
    }

    public function kuis_tabel_2()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['fullname' => $this->session->userdata('fullname')], ['class' => $this->session->userdata('class')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kuis/sidemenu_kuis', $data);
        $this->load->view('user/kuis/kuis_tabel_2', $data);
        $this->load->view('templates/footer');
    }

    public function kuis_tabel_3()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['fullname' => $this->session->userdata('fullname')], ['class' => $this->session->userdata('class')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kuis/sidemenu_kuis', $data);
        $this->load->view('user/kuis/kuis_tabel_3', $data);
        $this->load->view('templates/footer');
    }

    public function kuis_multimedia_1()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['fullname' => $this->session->userdata('fullname')], ['class' => $this->session->userdata('class')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kuis/sidemenu_kuis', $data);
        $this->load->view('user/kuis/kuis_multimedia_1', $data);
        $this->load->view('templates/footer');
    }

    public function kuis_multimedia_2()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['fullname' => $this->session->userdata('fullname')], ['class' => $this->session->userdata('class')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kuis/sidemenu_kuis', $data);
        $this->load->view('user/kuis/kuis_multimedia_2', $data);
        $this->load->view('templates/footer');
    }

    public function kuis_multimedia_3()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['fullname' => $this->session->userdata('fullname')], ['class' => $this->session->userdata('class')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kuis/sidemenu_kuis', $data);
        $this->load->view('user/kuis/kuis_multimedia_3', $data);
        $this->load->view('templates/footer');
    }

    public function kuis_form_1()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['fullname' => $this->session->userdata('fullname')], ['class' => $this->session->userdata('class')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kuis/sidemenu_kuis', $data);
        $this->load->view('user/kuis/kuis_form_1', $data);
        $this->load->view('templates/footer');
    }

    public function kuis_form_2()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['fullname' => $this->session->userdata('fullname')], ['class' => $this->session->userdata('class')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kuis/sidemenu_kuis', $data);
        $this->load->view('user/kuis/kuis_form_2', $data);
        $this->load->view('templates/footer');
    }

    public function kuis_form_3()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['fullname' => $this->session->userdata('fullname')], ['class' => $this->session->userdata('class')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kuis/sidemenu_kuis', $data);
        $this->load->view('user/kuis/kuis_form_3', $data);
        $this->load->view('templates/footer');
    }
    
}
