<?php

class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }  
    public function login()
    {
        $this->form_validation->set_rules('username','Username','required',['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('password','Password','required',['required' => 'Password wajib diisi!']);
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('form_login');
            $this->load->view('templates/footer');
        }else{
            $auth = $this->model_auth->cek_login();
            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Anda Salah!
                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');

                redirect('auth/login');
                
            }else{
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('role_id',$auth->role_id);
                setcookie('cookie_username', md5($auth->username), time() + (60 * 60 * 24 * 5), '/');
                setcookie('cookie_password', md5($auth->password), time() + (60 * 60 * 24 * 5), '/');
                switch($auth->role_id){
                    case 1 :    redirect('admin/dashboard_admin');
                                break;
                    case 2 :    redirect('welcome');
                                break;
                    default: break;
                }
            }
        }
    }
    

    public function logout()
    {
        $this->session->sess_destroy();
        setcookie('cookie_username','',0, '/');
        setcookie('cookie_password','',0, '/');
        redirect('auth/login');
    }
}