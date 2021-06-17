<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	public function index()
	{
		$data['judul']= 'About Us';
		$data['sosmed']= $this->M_model->get_sosmed();
		$data['aboutpage']= $this->M_model->get_aboutpage();
		$data['visimisi']= $this->M_model->get_visimisi ();
		$data['reason']= $this->M_model->get_reason();
		$data['client']= $this->M_model->get_client();
        $data['bg'] = $this->M_model->get_bg();
		$this->load->view('include/header', $data);
		$this->load->view('include/topbar');
		$this->load->view('company/about', $data);
		$this->load->view('include/footer', $data);
	}

	public function Gallery()
	{
		$data['judul']= 'Gallery';
		$data['sosmed']= $this->M_model->get_sosmed();
        $data['bg'] = $this->M_model->get_bg();
		$data['gallery']= $this->M_model->get_gallery();
		$this->load->view('include/header', $data);
		$this->load->view('include/topbar');
		$this->load->view('company/gallery', $data);
		$this->load->view('include/footer', $data);
	}

}

/* End of file Company.php */
