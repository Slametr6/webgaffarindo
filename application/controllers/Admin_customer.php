<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_customer extends CI_Controller {

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
		$data['judul'] = 'Manage Customer';
        $data['data'] = $this->M_model->get_client();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bcustomer/v_customer', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
		$data['judul'] = 'Add Customer';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bcustomer/v_addcustomer');
		$this->load->view('admin/footer');
    }

    public function action_add()
    {
        $config['upload_path']      = './assets/images/clients/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['overwrite']        = TRUE; 
        $new_name = slug($this->input->post('ClientName',TRUE));
        $config['file_name']        = $new_name;
        $this->load->library('upload', $config, 'Img');
        $this->Img->initialize($config);

        $ClientName            =   $this->input->post('ClientName');
        // $Status            =   $this->input->post('Status');

        if ($this->Img->do_upload('Img')) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/clients/' . $this->Img->data('file_name');
            $config['maintain_ratio'] = FALSE;
            $config['overwrite'] = TRUE;
            $config['width'] = '50%';
            $config['height'] = '50%';
            $config['new_image'] = './assets/images/clients/' . $this->Img->data('file_name');
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            
            $data = array(
                'Img'               => $this->Img->data('file_name'),
                'ClientName'            => $ClientName
                // 'Status'            => $Status
            );
            $this->M_model->insert('clients', $data);
            $this->session->set_flashdata('success', 'Data added successfully!');
            redirect('admin_customer');
        }else{
           $this->session->set_flashdata('error', $this->Img->display_errors());
           redirect('admin_customer/add');
       }
    }

    public function edit($i)
    {
        $Id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Id) {
			$data['judul'] = 'Edit Customer';
            $data['data'] = $this->M_model->get_client($Id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/navbar');
            $this->load->view('bcustomer/v_editcustomer', $data);
			$this->load->view('admin/footer');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_customer');
        }
    }

    public function update($i)
    {
        $Id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Id) {
            $config['upload_path']  = './assets/images/clients/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $new_name = slug($this->input->post('ClientName', TRUE));
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config, 'Img');
            $this->Img->initialize($config);

            $ClientName            =   $this->input->post('ClientName');
            // $Status            =   $this->input->post('Status');

            if ($this->Img->do_upload('Img')) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/clients/' . $this->Img->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = '50%';
                $config['height'] = '50%';
                $config['new_image'] = './assets/images/clients/' . $this->Img->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'Img'               => $this->Img->data('file_name'),
                    'ClientName'            => $ClientName
                    // 'Status'            => $Status
                );
                $this->M_model->update('clients', ['IdClient' => $Id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_customer');
            } else {
                $data = array(
                    'ClientName'            => $ClientName
                    // 'Status'            => $Status
                );
                $this->M_model->update('clients', ['IdClient' => $Id], $data);
                $this->session->set_flashdata('success', 'Data updated successfully!');
                redirect('admin_customer');
            }
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_customer');
        }
    }

    public function delete($IdClient)
    {
    	$id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $IdClient));
        if ($id) {
            $data['data'] = $this->M_model->get_client($id);
            $this->M_model->delete('clients', ['IdClient' => $id], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_customer');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_customer');
        }
    }

}

/* End of file Admin_Customer.php */
