<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		$data['judul']= 'Our Services';
		$data['sosmed']= $this->M_model->get_sosmed();
		$data['servicepage']= $this->M_model->get_servicepage();
		$data['service']= $this->M_model->get_service();
		$data['data'] = $this->M_model->fn_service();
        $data['bg'] = $this->M_model->get_bg();
		$this->load->view('include/header', $data);
		$this->load->view('include/topbar');
		$this->load->view('services/services', $data);
		$this->load->view('include/footer', $data);
	}

	public function Detail()
	{
		$slug = $this->uri->segment(2);
		$data['svc']=$this->M_model->fn_service($slug);
		if (!$data['svc']) {
			redirect('services');
		}
		$data['menu'] = '';
		$data['judul'] = 'Our Services | '.$data['svc']->ServiceName;
		$data['sosmed']= $this->M_model->get_sosmed();
		$data['service']= $this->M_model->get_service();
		$data['data']= $this->M_model->fn_service();
		$this->load->view('include/header', $data);
		$this->load->view('include/topbar');
		$this->load->view('services/servicedetail', $data);
		$this->load->view('include/footer', $data);
	}

}

/* End of file Services.php */
