<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_service extends CI_Controller 
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
		$data['judul'] = 'Manage Service';
        $data['data'] = $this->M_model->get_service();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bservice/v_service', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
		$data['judul'] = 'Add Service';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bservice/v_addservice');
		$this->load->view('admin/footer');
    }

    public function action_add()
    {   
        $config['upload_path']      = './assets/images/services/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['overwrite']        = TRUE;
        $new_name = slug($this->input->post('ServiceName',TRUE));
        $config['file_name']        = $new_name;
        $this->load->library('upload', $config, 'Img');
        $this->Img->initialize($config);

        $ServiceName            =   $this->input->post('ServiceName');
        $Content            =   $this->input->post('Content');
        $Icon            =   $this->input->post('Icon');
        $Status            =   $this->input->post('Status');

        if ($this->Img->do_upload('Img')) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/services/' . $this->Img->data('file_name');
            $config['maintain_ratio'] = FALSE;
            $config['overwrite'] = TRUE;
            $config['width'] = 1920;
            $config['height'] = 1080;
            $config['new_image'] = './assets/images/services/' . $this->Img->data('file_name');
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            
            $data = array(
                'Img'               => $this->Img->data('file_name'),
                'ServiceName'            => $ServiceName,
                'Content'            => $Content,
				'Slug'              => slug($this->input->post('ServiceName',TRUE)),
                'Icon'            => $Icon,
                'Status'            => $Status
            );
            $this->M_model->insert('services', $data);
            $this->session->set_flashdata('success', 'Data added successfully!');
            redirect('admin_service');
        }else{
           $this->session->set_flashdata('error', $this->Img->display_errors());
           redirect('admin_service/add');
       }
    }

    public function edit($i)
    {
        $Id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Id) {
			$data['judul'] = 'Edit Services';
            $data['data'] = $this->M_model->get_service($Id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/navbar');
            $this->load->view('bservice/v_editservice', $data);
			$this->load->view('admin/footer');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_service');
        }
    }

    public function update($i)
    {
        $Id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Id) {
            $config['upload_path']  = './assets/images/services/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $new_name = slug($this->input->post('ServiceName', TRUE));
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config, 'Img');
            $this->Img->initialize($config);

            $ServiceName            =   $this->input->post('ServiceName');
            $Content            =   $this->input->post('Content');
            $Icon            =   $this->input->post('Icon');
            $Status            =   $this->input->post('Status');

            if ($this->Img->do_upload('Img')) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/services/' . $this->Img->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 1920;
                $config['height'] = 1080;
                $config['new_image'] = './assets/images/services/' . $this->Img->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'ServiceName'            => $ServiceName,
                    'Content'            => $Content,
                    'Icon'            => $Icon,
                    'Img'               => $this->Img->data('file_name'),
                    'Status'            => $Status
                );
                $this->M_model->update('services', ['IdService' => $Id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_service');
            } else {
                $data = array(
                    'ServiceName'            => $ServiceName,
					'Slug'            => $this->Img->data('file_name'),
                    'Content'            => $Content,
                    'Icon'            => $Icon,
                    'Status'            => $Status
                );
                $this->M_model->update('services', ['IdService' => $Id], $data);
                $this->session->set_flashdata('success', 'Data updated successfully!');
                redirect('admin_service');
            }
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_service');
        }
    }

	public function delete($id) {
		$id = $this->encryption->decrypt(str_replace(array('-','_','~'), array('+','=','/'), $id));
		if ($id) {
			$data['data'] = $this->M_model->get_service($id);
			$this->M_model->delete('services', ['IdService' => $id], $data);
			$this->session->set_flashdata('succes', 'Data deleted succesfully');
			redirect('admin_service');
		} else {
			$this->session->set_flashdata('error', 'Error, bad request');
			redirect('admin_service');
		}
	}
	
	public function mainservice()
	{
		$data['judul'] = 'Edit Service Page';
        $data['data'] = $this->M_model->get_servicepage();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bservice/v_mainservice', $data);
		$this->load->view('admin/footer');
	}

	public function update_service($i)
	{
		$id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($id) {
            $PageName		=   $this->input->post('PageName');
            $Text1		=   $this->input->post('Text1');
            $Text2		=   $this->input->post('Text2');
            $UpdatedAt       = date('Y-m-d H:i:s');

            $data = array(
                'PageName'			=> $PageName,
                'Text1'			=> $Text1,
                'Text2'			=> $Text2,
                'UpdatedAt'      => $UpdatedAt,
            );
            $this->M_model->update('servicepages', ['IdPage' => $id], $data);
            $this->session->set_flashdata('success', 'Data updated successfully!');
            redirect('admin_service/mainservice');   
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_service/mainservice');
        }
	}
}
