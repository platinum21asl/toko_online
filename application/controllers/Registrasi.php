<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{


      public function index()
      {
            $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Wajib diisi']);
            $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajib diisi']);
            $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'Password Wajib diisi']);
            $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]', ['matches' => 'password tidak sama']);
            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header');
                  $this->load->view('registrasi');
                  $this->load->view('templates/footer');
            } else {
                  $data = [
                        'id' => '',
                        'nama' => $this->input->post('nama'),
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password_1'),
                        'role_id' => 2,
                  ];
                  $this->db->insert('tb_user', $data);
                  redirect('auth/login');
            }
      }
}
