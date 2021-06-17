<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect('Panel');
        } else {
            $this->load->view('login');
        }
    }

    function cek_login()
    {
        $this->load->model('M_auth');
        $session = $this->session->userdata('logged_in');
        if (isset($session)) {
            redirect('Panel');
        } 
			else {
            $IdUser = $this->input->post('IdUser');
            $Password = $this->input->post('Password');
            $masuk = $this->M_auth->cek_user($IdUser);
            if ($masuk) {
                if (password_verify($Password, $masuk->Password)) {
                    $sess_data['logged_in'] = true;
                    $sess_data['IdUser'] = $masuk->IdUser;
                    $sess_data['Email'] = $masuk->Email;
                    $sess_data['NickName'] = $masuk->NickName;
                    $this->session->set_userdata($sess_data);
                    redirect('Panel');
                } else {
                    $this->session->set_flashdata('error', 'Maaf, password Anda salah!');
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('error', 'Maaf, akun Anda tidak terdeteksi!');
                redirect('admin');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
