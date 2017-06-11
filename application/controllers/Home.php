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
        $data['hakkimda'] = $this->DBModel->hakkimda();
        $data['yetenekler'] = $this->DBModel->yeteneklerim();
        $data['egitim'] = $this->DBModel->mezuniyet();
        $data['proje'] = $this->DBModel->Projelerim();
        $data['blog'] = $this->DBModel->Bloglist();

        $this->load->view('home/sabit/header', $data);
        $this->load->view('home/home', $data); //Ana Menu
        $this->load->view('home/section1', $data); //aNA mENU DEVAMI
        $this->load->view('home/portoflio', $data); //Projelerim
        $this->load->view('home/blog',$data); //Blog
        $this->load->view('home/contact'); //İletişim
        $this->load->view('home/index');
        $this->load->view('home/sabit/footer');
    }

    /**
     * @return projelerim
     */
    public function proje()
    {
        $this->load->view('home/project');
    }
}
