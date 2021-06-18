<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller 
{

	// public function __construct()
  //   {
  //       parent::__construct();
  //       $session = $this->session->userdata('logged_in');
  //       if (!isset($session)) {
  //           redirect(base_url());
  //       } else {
  //           $this->load->model('M_model');
  //       }
  //   }

    public function index()
    {
		$data['judul'] = 'Admin Panel';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
    $this->load->view('cpanel');
		$this->load->view('admin/footer');
    }
}
