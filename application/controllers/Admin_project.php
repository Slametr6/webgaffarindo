<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_project extends CI_Controller 
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
		$data['judul'] = 'Manage Project';
        $data['data'] = $this->M_model->get_project();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bproject/v_project', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
		$data['judul'] = 'Add Project';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bproject/v_addproject');
		$this->load->view('admin/footer');
    }

    public function action_add()
    {
        $config['upload_path']      = './assets/images/projects/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['overwrite']        = TRUE;
        $new_name 					= slug($this->input->post('ProjectTitle',TRUE));
        $config['file_name']        = $new_name;
        $this->load->library('upload', $config, 'Img');
        $this->Img->initialize($config);

        $ProjectTitle       =   $this->input->post('ProjectTitle');
        $Content            =   $this->input->post('Content');
        $Status            =   $this->input->post('Status');

        if ($this->Img->do_upload('Img') ) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/projects/' . $this->Img->data('file_name');
            $config['maintain_ratio'] = FALSE;
            $config['overwrite'] = TRUE;
            $config['width'] = 1920;
            $config['height'] = 1080;
            $config['new_image'] = './assets/images/projects/' . $this->Img->data('file_name');
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            
            $data = array(
                'ProjectTitle'       => $ProjectTitle,
                'Content'            => $Content,
                'Img'               => $this->Img->data('file_name'),
                'Slug'              => slug($this->input->post('ProjectTitle',TRUE)),
                'Status'            => $Status
            );
            $this->M_model->insert('projects', $data);
            $this->session->set_flashdata('success', 'Data added successfully!');
            redirect('admin_project');
        } else{
           $this->session->set_flashdata('error', $this->Img->display_errors());
           redirect('admin_project/add');
       }
   }

   public function edit($i)
   {
    $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($id) {
			$data['judul'] = 'Edit Project';
            $data['data'] = $this->M_model->get_project($id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/navbar');
            $this->load->view('bproject/v_editproject', $data);
			$this->load->view('admin/footer');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_project');
        }
    }

    
    public function update($i)
    {
        $Id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Id) {
            $config['upload_path']  = './assets/images/projects/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $new_name = slug($this->input->post('ProjectTitle', TRUE));
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config, 'Img');
            $this->Img->initialize($config);

            $ProjectTitle            =   $this->input->post('ProjectTitle');
            $Content            =   $this->input->post('Content');
            $Status            =   $this->input->post('Status');

            if ($this->Img->do_upload('Img')) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/projects/' . $this->Img->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 1920;
                $config['height'] = 1080;
                $config['new_image'] = './assets/images/projects/' . $this->Img->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'ProjectTitle'            => $ProjectTitle,
                    'Content'            => $Content,
                    'Img'               => $this->Img->data('file_name'),
                    'Status'            => $Status
                );
                $this->M_model->update('projects', ['IdProject' => $Id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_project');
            } else {
                $data = array(
                    'ProjectTitle'            => $ProjectTitle,
					'Slug'            => $this->Img->data('file_name'),
                    'Content'            => $Content,
                    'Status'            => $Status
                );
                $this->M_model->update('projects', ['IdProject' => $Id], $data);
                $this->session->set_flashdata('success', 'Data updated successfully!');
                redirect('admin_project');
            }
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_project');
        }
    }

	public function delete($id) {
		$id = $this->encryption->decrypt(str_replace(array('-','_','~'), array('+','=','/'), $id));
		if ($id) {
			$data['data'] = $this->M_model->get_project($id);
			$this->M_model->delete('projects', ['IdProject' => $id], $data);
			$this->session->set_flashdata('succes', 'Data deleted succesfully');
			redirect('admin_project');
		} else {
			$this->session->set_flashdata('error', 'Error, bad request');
			redirect('admin_project');
		}
	}

}
