<?php

class Portal extends CI_Controller
{
    public function index()
    {
        $this->load->view('ad/d.php');
    }

    public function post()
    {
        $this->load->view('ad/post_list.php');
    }

    public function feed()
    {
        $this->load->view('ad/feedback.php');
    }

    public function setting()
    {
        $this->load->view('ad/setting.php');
    }

    public function profil()
    {
        $this->load->view('ad/profil.php');
    }
}