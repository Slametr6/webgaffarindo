<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_slide extends CI_Controller 
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
		$data['judul'] = 'Manage Slider';
        $data['data'] = $this->M_model->get_slide();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bslide/v_slide', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
		$data['judul'] = 'Add Slider';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bslide/v_addslide');
		$this->load->view('admin/footer');
    }

    public function action_add()
    {
        $config['upload_path']      = './assets/images/sliders/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['overwrite']        = TRUE;
        $new_name = slug($this->input->post('Content',TRUE));
        $config['file_name']        = $new_name;
        $this->load->library('upload', $config, 'Img');
        $this->Img->initialize($config);

        $Content            =   $this->input->post('Content');
        $slide_title            =   $this->input->post('slide_title');
        $slide_desc            =   $this->input->post('slide_desc');
        $link            =   $this->input->post('link');
        $Status            =   $this->input->post('Status');

        if ($this->Img->do_upload('Img')) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/sliders/' . $this->Img->data('file_name');
            $config['maintain_ratio'] = FALSE;
            $config['overwrite'] = TRUE;
            $config['width'] = 1200;
            $config['height'] = 537;
            $config['new_image'] = './assets/images/sliders/' . $this->Img->data('file_name');
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            
            $data = array(
                'Img'               => $this->Img->data('file_name'),
                'Content'            => $Content,
                'slide_title'            => $slide_title,
                'slide_desc'            => $slide_desc,
                'link'            => $link,
                'Status'            => $Status
            );
            $this->M_model->insert('slides', $data);
            $this->session->set_flashdata('success', 'Data added successfully!');
            redirect('admin_slide');
        }else{
           $this->session->set_flashdata('error', $this->Img->display_errors());
           redirect('admin_slide/add');
       }
    }

    public function edit($i)
    {
        $Id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Id) {
			$data['judul'] = 'Edit Slider';
            $data['data'] = $this->M_model->get_slide($Id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/navbar');
            $this->load->view('bslide/v_editslide', $data);
			$this->load->view('admin/footer');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_slide');
        }
    }

    public function update($i)
    {
        $Id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Id) {
            $config['upload_path']  = './assets/images/sliders/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $new_name = slug($this->input->post('Content', TRUE));
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config, 'Img');
            $this->Img->initialize($config);

            $Content            =   $this->input->post('Content');
			$slide_title            =   $this->input->post('slide_title');
			$slide_desc            =   $this->input->post('slide_desc');
			$link            =   $this->input->post('link');
			$Status            =   $this->input->post('Status');


            if ($this->Img->do_upload('Img')) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/sliders/' . $this->Img->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 1500;
                $config['height'] = 537;
                $config['new_image'] = './assets/images/sliders/' . $this->Img->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'Content'            => $Content,
                    'Img'               => $this->Img->data('file_name'),
					'slide_title'            => $slide_title,
					'slide_desc'            => $slide_desc,
					'link'            => $link,
                    'Status'            => $Status
                );
                $this->M_model->update('slides', ['IdSlide' => $Id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_slide');
            } else {
                $data = array(
                    'Content'            => $Content,
					'slide_title'            => $slide_title,
					'slide_desc'            => $slide_desc,
					'link'            => $link,
                    'Status'            => $Status
                );
                $this->M_model->update('slides', ['IdSlide' => $Id], $data);
                $this->session->set_flashdata('success', 'Data updated successfully!');
                redirect('admin_slide');
            }
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_slide');
        }
    }

    public function delete($IdSlide)
    {
    	$id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $IdSlide));
        if ($id) {
            $data['data'] = $this->M_model->get_slide($id);
            $this->M_model->delete('slides', ['IdSlide' => $id], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_slide');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_slide');
        }
    }
}
