<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

    function construct()
    {
        parent::construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['judul'] = "Halaman depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }

    public function about()
    {
        $data['judul'] = "Halaman about";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }

    public function restaurant()
    {
        $data['judul'] = "Halaman restaurant";
        $this->load->view('v_header', $data);
        $this->load->view('v_restaurant', $data);
        $this->load->view('v_footer', $data);
    }

}

/* End of file  Web.php */