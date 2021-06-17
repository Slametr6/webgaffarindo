<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_user extends CI_Controller 
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
		$data['judul'] = 'Manage Users';
        $data['data'] = $this->M_model->get_users();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('busers/v_users', $data);
		$this->load->view('admin/footer');

    }

    public function add()
    {
		$data['judul'] = 'Add Users';
        $data['data'] = $this->M_model->get_users();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('busers/v_addusers');
		$this->load->view('admin/footer');
    }

    public function action_add()
    {
        $IdUser       =   $this->input->post('IdUser');
        $UserName     =   $this->input->post('UserName');
        $NickName     =   $this->input->post('NickName');
        $Password     =   password_hash($this->input->post('Password'), PASSWORD_DEFAULT);
        $Email        =   $this->input->post('Email');
        $CreatedAt    =   date('Y-m-d H:i:s');

        $data = array(
            'IdUser'        	=> $IdUser,
            'UserName'      => $UserName,
            'NickName'      => $NickName,
            'Password'      => $Password,
            'Email'         => $Email,
            'CreatedAt'     => $CreatedAt,
        );
        $this->M_model->insert('users', $data);
        $this->session->set_flashdata('success', 'Data added successfully!');
        redirect('admin_user');
    }

	public function edit($i)
    {
		$Nip = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
		if ($Nip) {
			$data['judul'] = 'Edit Users';
			$data['data'] = $this->M_model->get_users($Nip);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/navbar');
			$this->load->view('busers/v_editusers', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_user');
		}
    }

    public function update($i)
    {
		$Nip = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Nip) {
			$UserName     =   $this->input->post('UserName');
			$NickName     =   $this->input->post('NickName');
			$Password     =   password_hash($this->input->post('Password'), PASSWORD_DEFAULT);
			$Email        =   $this->input->post('Email');

			$data = array(
				'UserName'      => $UserName,
				'NickName'      => $NickName,
				'Password'      => $Password,
				'Email'         => $Email,
			);
			$this->M_model->update('users', ['IdUser' => $Nip], $data);
			$this->session->set_flashdata('success', 'Data added successfully!');
			redirect('admin_user');
		} else {
			$this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_user');
		}
    }	

	public function delete($i)
    {
    $Nip = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Nip) {
            $data['data'] = $this->M_model->get_users($Nip);
            $this->M_model->delete('users', ['IdUser' => $Nip], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_user');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_user');
        }
    }
}
