<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Projects extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'Our Projects';
		$data['sosmed'] = $this->M_model->get_sosmed();
		$data['project'] = $this->M_model->get_project();
		$data['data'] = $this->M_model->fn_project();
		$data['service'] = $this->M_model->get_service();
		$this->load->view('include/header', $data);
		$this->load->view('include/topbar');
		$this->load->view('projects/project', $data);
		$this->load->view('include/footer', $data);
	}

	public function Detail()
	{
		$slug = $this->uri->segment(2);
		$data['svc'] = $this->M_model->fn_project($slug);
		if (!$data['svc']) {
			redirect('projects');
		}
		$data['menu'] = '';
		$data['judul'] = 'Our Projects | ' . $data['svc']->ProjectTitle;
		$data['sosmed'] = $this->M_model->get_sosmed();
		$data['project'] = $this->M_model->get_project();
		$data['data'] = $this->M_model->fn_project();
		$data['service'] = $this->M_model->get_service();
		$this->load->view('include/header', $data);
		$this->load->view('include/topbar');
		$this->load->view('projects/projectdetail', $data);
		$this->load->view('include/footer', $data);
	}
}

/* End of file Controllername.php */
