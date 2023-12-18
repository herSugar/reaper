<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_auth extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Jendela wisata login';
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('auth/v_login');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        //jika ada username
        if ($user) {
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                ];
                $this->session->set_userdata($data);
                redirect('user/tempat_wisata');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                wrong password</div>');
                redirect('c_auth/index');
            }
        } else {
            //jika username tidak ada
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
           usernmae does not exits</div>');
            redirect('c_auth/index');
        }
    }
    public function register()
    {
        $data['title'] = 'Jendela Wisata Registrasi';
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]', array(
            'required' => '  colom harus di isi',
            'is_unique' => 'username sudah ada'
        ));
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|matches[password1]', array(
            'matches' => 'password tidak sama',
            'min_length' => 'password kurang panjang'
        ));
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', array(
            'is_unique' => 'email sudah ada'
        ));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('auth/v_register');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'date_user' => time()
            );
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
         account has ben created,plase login</div>');
            redirect('c_auth/index');
        }
    }
}
