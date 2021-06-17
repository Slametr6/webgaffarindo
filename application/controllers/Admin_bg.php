<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_bg extends CI_Controller 
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
		$data['judul'] = 'Edit Background';
        $data['bg'] = $this->M_model->get_bg();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bcompany/v_editbg', $data);
		$this->load->view('admin/footer');
	}

	public function update($i)
    {
        $Id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Id) {
            $config['upload_path']  = './assets/images/page-titles/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $new_name = slug($this->input->post('BgAbout', TRUE));
            $new_name = slug($this->input->post('BgGallery', TRUE));
            $new_name = slug($this->input->post('BgService', TRUE));
            $new_name = slug($this->input->post('BgContact', TRUE));
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config, 'BgAbout');
            $this->load->library('upload', $config, 'BgGallery');
            $this->load->library('upload', $config, 'BgService');
            $this->load->library('upload', $config, 'BgContact');
            $this->BgAbout->initialize($config);
            $this->BgGallery->initialize($config);
            $this->BgService->initialize($config);
            $this->BgContact->initialize($config);

            if ($this->BgAbout->do_upload('BgAbout')) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/page-titles/' . $this->BgAbout->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 1200;
                $config['height'] = 537;
                $config['new_image'] = './assets/images/page-titles/' . $this->BgAbout->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'BgAbout'           => $this->BgAbout->data('file_name'),
                );
                $this->M_model->update('bgpages', ['IdBg' => $Id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_bg');
            } else if ($this->BgGallery->do_upload('BgGallery')) {
				$config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/page-titles/' . $this->BgGallery->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 1200;
                $config['height'] = 537;
                $config['new_image'] = './assets/images/page-titles/' . $this->BgGallery->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'BgGallery'           => $this->BgGallery->data('file_name'),
                );
                $this->M_model->update('bgpages', ['IdBg' => $Id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_bg');
			} else if ($this->BgService->do_upload('BgService')) {
				$config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/page-titles/' . $this->BgService->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 1200;
                $config['height'] = 537;
                $config['new_image'] = './assets/images/page-titles/' . $this->BgService->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'BgService'           => $this->BgService->data('file_name'),
                );
                $this->M_model->update('bgpages', ['IdBg' => $Id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_bg');
			} else if ($this->BgContact->do_upload('BgContact')) {
				$config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/page-titles/' . $this->BgContact->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 1200;
                $config['height'] = 537;
                $config['new_image'] = './assets/images/page-titles/' . $this->BgContact->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'BgContact'           => $this->BgContact->data('file_name'),
                );
                $this->M_model->update('bgpages', ['IdBg' => $Id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_bg');
			} else {
				$data = array(
                    'BgAbout'           => $this->BgAbout->data('file_name'),
                    'BgGallery'           => $this->BgGallery->data('file_name'),
                    'BgService'           => $this->BgService->data('file_name'),
                    'BgContact'           => $this->BgContact->data('file_name'),
                );
                $this->M_model->update('bgpages', ['IdBg' => $Id], $data);
                $this->session->set_flashdata('success', 'Data updated successfully!');
                redirect('admin_bg');
            }
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_bg');
        }
    }
}
