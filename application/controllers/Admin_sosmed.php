<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_sosmed extends CI_Controller 
{

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
		$data['judul'] = 'Edit Sosmed';
        $data['data'] = $this->M_model->get_sosmed();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bcompany/v_editsosmed', $data);
		$this->load->view('admin/footer');
    }

    public function update($i)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($id) {
            $Youtube       =   $this->input->post('Youtube');
            $Instagram  =   $this->input->post('Instagram');

            $data = array(
                'Youtube'          => $Youtube,
                'Instagram'     => $Instagram,
            );
            $this->M_model->update('sosmed', ['IdSosmed' => $id], $data);
            $this->session->set_flashdata('success', 'Data updated successfully!');
            redirect('Admin_sosmed');   
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('Admin_sosmed');
        }
    }
}
