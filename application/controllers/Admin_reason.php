<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_reason extends CI_Controller 
{

    // public function __construct()
    // {
    //     parent::__construct();
    //     $session = $this->session->userdata('logged_in');
    //     if (!isset($session)) {
    //         redirect(base_url());
    //     } else {
    //         $this->load->model('M_model');
    //     }
    // }

    public function index()
    {    
		$data['judul'] = 'Manage Reason';
        $data['data'] = $this->M_model->get_reason();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('breason/v_reason', $data);
		$this->load->view('admin/footer');
    }

	public function add()
    {
		$data['judul'] = 'Add Reason';
        $data['data'] = $this->M_model->get_reason ();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('breason/v_addreason');
		$this->load->view('admin/footer');
    }

    public function action_add()
    {
        $Reason      =   $this->input->post('Reason');
        $Content     =   $this->input->post('Content');
        $Icon    	 =   $this->input->post('Icon');
        $CreatedAt   =   date('Y-m-d H:i:s');

        $data = array(
            'Reason'     => $Reason,
            'Content'    => $Content,
            'Icon'       => $Icon,
            'CreatedAt'  => $CreatedAt,
        );
        $this->M_model->insert('reasons', $data);
        $this->session->set_flashdata('success', 'Data added successfully!');
        redirect('admin_reason');
    }

	public function edit($i)
    {    
		$IdReason = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
		if ($IdReason) {
			$data['judul'] = 'Manage Reason';
			$data['data'] = $this->M_model->get_reason($IdReason);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/navbar');
			$this->load->view('breason/v_editreason', $data);
			$this->load->view('admin/footer');
		}
    }

    public function update($i)
    {
        $IdReason = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($IdReason) {
            $Reason     =   $this->input->post('Reason');
            $Content   =   $this->input->post('Content');
            $Icon           =   $this->input->post('Icon');
            $UpdatedAt                  = date('Y-m-d H:i:s');

            $data = array(
                'Reason'   		=> $Reason,
                'Content' 		=> $Content,
                'Icon'      	=> $Icon,
                'UpdatedAt'     => $UpdatedAt,
                'UpdatedBy'      => $this->session->userdata('Nip'),
            );
            $this->M_model->update('reasons', ['IdReason' => $IdReason], $data);
            $this->session->set_flashdata('success', 'Data updated successfully!');
            redirect('Admin_reason');   
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('Admin_reason');
        }
    }

	public function delete($i)
    {
    $IdReason = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($IdReason) {
            $data['data'] = $this->M_model->get_reason ($IdReason);
            $this->M_model->delete('reasons', ['IdReason' => $IdReason], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_reason');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_reason');
        }
    }
}
