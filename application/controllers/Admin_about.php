<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_about extends CI_Controller {

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
		$data['judul'] = 'Edit About Page';
        $data['data'] = $this->M_model->get_aboutpage();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
        $this->load->view('bcompany/v_mainabout', $data);
		$this->load->view('admin/footer');
	}

	public function update($i)
    {
        $Id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($Id) {
            $config['upload_path']  = './assets/images/about/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $new_name = slug($this->input->post('AboutName', TRUE));
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config, 'Img');
            $this->Img->initialize($config);

            if ($this->Img->do_upload('Img')) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/about/' . $this->Img->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 1001;
                $config['height'] = 666;
                $config['new_image'] = './assets/images/about/' . $this->Img->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
					'AboutName'		=> $AboutName,
					'Text1'			=> $Text1,
					'Text2'			=> $Text2,
					'Text3'			=> $Text3,
                    'Img'           => $this->Img->data('file_name'),
                );
                $this->M_model->update('aboutpages', ['IdPage' => $Id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_about');
            } else {
                $this->M_model->update('aboutpages', ['IdPage' => $Id], $data);
                $this->session->set_flashdata('success', 'Data updated successfully!');
                redirect('admin_about');
            }
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_about');
        }
    }

}

/* End of file Admin_about.php */
