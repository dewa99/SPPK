<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function signin()
    {
        if($this->session->userdata('mimin_is_login')){
            redirect('dashboard');
            die();
        }
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login', null, FALSE);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->Auth_model->login($username, $password)){
                
                $array = array(
                    'mimin_username' => $username,
                    'mimin_is_login' => true
                );
                
                $this->session->set_userdata( $array );
                
                redirect('dashboard');
            }else{
                $this->session->set_flashdata('error', 'username / password tidak ditemukan');
                $this->load->view('login', null, FALSE);
            }
        }
    }

    public function signout()
    {
        if(!$this->session->userdata('mimin_is_login')){
            redirect('auth/signin');
            die();
        }
        $this->session->unset_userdata('mimin_username');
        $this->session->unset_userdata('mimin_is_login');
        
        redirect('/auth/signin','refresh');
        
    }
}
