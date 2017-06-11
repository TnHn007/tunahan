<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        $this->load->model('DBModel');
        $this->load->library('user_agent');
    }


    public function index()
    {
        $data['resim'] = $this->DBModel->profil_resim();
        $data['profil'] = $this->DBModel->adsoyad();
        $data['hakkimda']=$this->DBModel->hakkimda();
        $data['yetenekler']=$this->DBModel->yeteneklerim();
        $data['egitim']=$this->DBModel->mezuniyet();

        $this->load->view('home/sabit/header', $data);
        $this->load->view('home/home', $data); //Ana Menu
        $this->load->view('home/section1',$data); //aNA mENU DEVAMI
        $this->load->view('home/portoflio'); //Projelerim
        $this->load->view('home/blog'); //Blog
        $this->load->view('home/contact'); //İletişim
        $this->load->view('home/index');
        $this->load->view('home/sabit/footer');
    }
}
