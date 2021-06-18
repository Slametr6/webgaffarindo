<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'About Us';
		$data['bg'] = $this->M_model->get_bg();
		$data['sosmed'] = $this->M_model->get_sosmed();
		$data['aboutpage'] = $this->M_model->get_aboutpage();
		$data['visimisi'] = $this->M_model->get_visimisi();
		$data['reason'] = $this->M_model->get_reason();
		$data['client'] = $this->M_model->get_client();
		$data['service'] = $this->M_model->get_service();
		$this->load->view('include/header', $data);
		$this->load->view('include/topbar');
		$this->load->view('company/about', $data);
		$this->load->view('include/footer', $data);
	}

	public function Gallery()
	{
		$data['judul'] = 'Gallery';
		$data['bg'] = $this->M_model->get_bg();
		$data['sosmed'] = $this->M_model->get_sosmed();
		$data['gallery'] = $this->M_model->get_gallery();
		$data['service'] = $this->M_model->get_service();
		$this->load->view('include/header', $data);
		$this->load->view('include/topbar');
		$this->load->view('company/gallery', $data);
		$this->load->view('include/footer', $data);
	}
}

/* End of file Company.php */
