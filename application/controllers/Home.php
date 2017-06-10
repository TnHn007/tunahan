<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {


        $this->load->view('home/sabit/header');
        $this->load->view('home/home'); //Ana Menu
        $this->load->view('home/section1'); //aNA mENU DEVAMI
        $this->load->view('home/portoflio'); //Projelerim
        $this->load->view('home/blog'); //Blog
        $this->load->view('home/contact'); //İletişim
        $this->load->view('home/index');
        $this->load->view('home/sabit/footer');
    }
}
