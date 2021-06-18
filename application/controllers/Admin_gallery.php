<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_gallery extends CI_Controller 
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
		$data['judul'] = 'Manage Gallery';
        $data['data'] = $this->M_model->get_gallery ();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bgallery/v_gallery', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
		$data['judul'] = 'Add Gallery';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bgallery/v_addgallery');
		$this->load->view('admin/footer');
    }

    public function action_add()
    {
        $config['upload_path']      = './assets/images/gallery/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        // $config['overwrite']        = TRUE;
        $new_name = slug($this->input->post('Img',TRUE));
        $config['file_name']        = $new_name;
        $this->load->library('upload', $config, 'Img');
        $this->Img->initialize($config);

        // $Content            =   $this->input->post('Content');
        // $Status            =   $this->input->post('Status');

        if ($this->Img->do_upload('Img')) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/gallery/' . $this->Img->data('file_name');
            $config['maintain_ratio'] = FALSE;
            // $config['overwrite'] = TRUE;
            $config['width'] = 850;
            $config['height'] = 510;
            $config['new_image'] = './assets/images/gallery/' . $this->Img->data('file_name');
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            
            $data = array(
                'Img'               => $this->Img->data('file_name'),
            );
            $this->M_model->insert('gallery', $data);
            $this->session->set_flashdata('success', 'Data added successfully!');
            redirect('admin_gallery');
        }else{
           $this->session->set_flashdata('error', $this->Img->display_errors());
           redirect('admin_gallery/add');
       }
    }

    public function delete($IdGallery)
    {
    	$id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $IdGallery));
        if ($id) {
            $data['data'] = $this->M_model->get_gallery($id);
            $this->M_model->delete('gallery', ['IdGallery' => $id], $data, $delete);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_gallery');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_gallery');
        }
    }
}
