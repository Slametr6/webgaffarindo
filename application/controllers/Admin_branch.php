<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_branch extends CI_Controller {

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
		$data['judul'] = 'Manage Branch';
        $data['data'] = $this->M_model->get_branch();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bbranch/v_branch', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
		$data['judul'] = 'Add Branch';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bbranch/v_addbranch');
		$this->load->view('admin/footer');
    }

	public function action_add()
    {
        $Branch      =   $this->input->post('Branch');
        $Phone     =   $this->input->post('Phone');
        $Phone     =   $this->input->post('Phone');
        $Mail    	 =   $this->input->post('Mail');
        $Address    	 =   $this->input->post('Address');
        $Location    	 =   $this->input->post('Location');
        $Hours    	 =   $this->input->post('Hours');

        $data = array(
            'Branch'     => $Branch,
            'Phone'    => $Phone,
            'Mail'       => $Mail,
            'Address'       => $Address,
            'Location'       => $Location,
            'Hours'       => $Hours
        );
        $this->M_model->insert('branchs', $data);
        $this->session->set_flashdata('success', 'Data added successfully!');
        redirect('admin_branch');
    }

	public function edit($i)
    {    
		$Idbranch = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
		if ($Idbranch) {
			$data['judul'] = 'Edit Branch';
			$data['data'] = $this->M_model->get_branch($Idbranch);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/navbar');
			$this->load->view('bbranch/v_editbranch', $data);
			$this->load->view('admin/footer');
		}
    }

    public function update($i)
    {
        $Idbranch = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Idbranch) {
            $Branch      =   $this->input->post('Branch');
			$Phone     =   $this->input->post('Phone');
			$Mail    	 =   $this->input->post('Mail');
			$Address    	 =   $this->input->post('Address');
			$Location    	 =   $this->input->post('Location');
			$Hours    	 =   $this->input->post('Hours');

			$data = array(
				'Branch'     => $Branch,
				'Phone'    => $Phone,
				'Mail'       => $Mail,
				'Address'       => $Address,
				'Location'       => $Location,
				'Hours'       => $Hours
			);
            $this->M_model->update('branchs', ['IdBranch' => $Idbranch], $data);
            $this->session->set_flashdata('success', 'Data updated successfully!');
            redirect('Admin_branch');   
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('Admin_branch');
        }
    }

	public function delete($i)
    {
    $Idbranch = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Idbranch) {
            $data['data'] = $this->M_model->get_branch ($Idbranch);
            $this->M_model->delete('branchs', ['IdBranch' => $Idbranch], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_branch');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_branch');
        }
    }

}

/* End of file Admin_branch.php */
