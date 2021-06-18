<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Home';
		$data['sosmed'] = $this->M_model->get_sosmed();
		$data['servicepage'] = $this->M_model->get_servicepage();
		$data['project'] = $this->M_model->get_project();
		$data['testimonial'] = $this->M_model->get_testimonial();
		$data['service'] = $this->M_model->get_service();
		$data['slide'] = $this->M_model->fn_slide();
		$this->load->view('include/header', $data);
		$this->load->view('include/topbar');
		$this->load->view('home', $data);
		$this->load->view('include/footer', $data);
	}

	public function Contact()
	{
		$data['judul'] = 'Contact Us';
		$data['bg'] = $this->M_model->get_bg();
		$data['sosmed'] = $this->M_model->get_sosmed();
		$data['cabang'] = $this->M_model->get_branch();
		$data['service'] = $this->M_model->get_service();
		$this->load->view('include/header', $data);
		$this->load->view('include/topbar');
		$this->load->view('contact', $data);
		$this->load->view('include/footer', $data);
	}
}
