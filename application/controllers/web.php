<?php

class Web extends CI_Controller
{

    function __construct()
    {
        //code...
        parent::__construct();
        
    }

    public function index(){
        $data['judul']="Halaman Depan"; 
        $this->load->view('v_header.php',$data);
        $this->load->view('v_index.php',$data);     
        $this->load->view('v_footer.php',$data); 
    }
    public function about(){
        $data['judul']="Halaman About"; 
        $this->load->view('v_header.php',$data);
        $this->load->view('v_about.php',$data);     
        $this->load->view('v_footer.php',$data); 
    }
}        