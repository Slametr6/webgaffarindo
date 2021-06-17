<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_testimoni extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $session = $this->session->userdata('logged_in');
        if (!isset($session)) {
            redirect(base_url());
        } else {
            $this->load->model('M_model');
        }
    }

    public function index()
    {
		$data['judul'] = 'Manage Testimonial';
        $data['data'] = $this->M_model->get_testimonial();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('btestimoni/v_testimoni', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
		$data['judul'] = 'Add Testimonial';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('btestimoni/v_addtestimoni');
		$this->load->view('admin/footer');
    }

	public function action_add()
    {
        $CustomerName      =   $this->input->post('CustomerName');
        $Company     =   $this->input->post('Company');
        $Review    	 =   $this->input->post('Review');

        $data = array(
            'CustomerName'     => $CustomerName,
            'Company'    => $Company,
            'Review'       => $Review
        );
        $this->M_model->insert('testimonials', $data);
        $this->session->set_flashdata('success', 'Data added successfully!');
        redirect('admin_testimoni');
    }

	public function edit($i)
    {    
		$Id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
		if ($Id) {
			$data['judul'] = 'Edit Testimonial';
			$data['data'] = $this->M_model->get_testimonial ($Id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/navbar');
			$this->load->view('btestimoni/v_edittestimoni', $data);
			$this->load->view('admin/footer');
		}
    }

    public function update($i)
    {
        $Id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Id) {
            $CustomerName      =   $this->input->post('CustomerName');
			$Company     =   $this->input->post('Company');
			$Review    	 =   $this->input->post('Review');

			$data = array(
				'CustomerName'     => $CustomerName,
				'Company'    => $Company,
				'Review'    => $Review
			);
            $this->M_model->update('testimonials', ['IdTestimonial' => $Id], $data);
            $this->session->set_flashdata('success', 'Data updated successfully!');
            redirect('admin_testimoni');   
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_testimoni');
        }
    }

	public function delete($i)
    {
    $Id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Id) {
            $data['data'] = $this->M_model->get_testimonial();
            $this->M_model->delete('testimonials', ['IdTestimonial' => $Id], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_testimoni');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_testimoni');
        }
    }

}

/* End of file admin_testimoni.php */
