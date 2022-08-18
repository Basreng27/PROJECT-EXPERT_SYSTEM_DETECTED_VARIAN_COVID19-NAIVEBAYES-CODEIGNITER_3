<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper('url_helper');
        $this->load->helper('text');
        $this->load->helper('date');
        $this->load->library('pagination');
        $this->load->model('M_admin');
    }

    public function dashboard_admin()
    {
        if ($this->session->userdata('status') != "login_admin") {
            redirect('home');
        }

        $data['akun'] = $this->M_admin->get_all_akun()->num_rows();
        $data['gejala'] = $this->M_admin->get_all_gejala()->num_rows();
        $data['virus'] = $this->M_admin->get_all_virus()->num_rows();
        $data['kasus_row'] = $this->M_admin->get_all_kasus()->num_rows();
        $data['kasus'] = $this->M_admin->get_all_kasus()->result();
        $data['admin'] = $this->M_admin->get_all_user('admin')->num_rows();
        $data['dokter'] = $this->M_admin->get_all_user('dokter')->num_rows();

        $this->load->view('admin/header_admin');
        $this->load->view('admin/dashboard_admin', $data);
        $this->load->view('admin/footer_admin');
    }

    public function data_admin()
    {
        if ($this->session->userdata('status') != "login_admin") {
            redirect('home');
        }

        $data['akun'] = $this->M_admin->get_all_akun()->result();

        $this->load->view('admin/header_admin');
        $this->load->view('admin/data_admin', $data);
        $this->load->view('admin/footer_admin');
    }

    public function edit_admin()
    {
        if ($this->session->userdata('status') != "login_admin") {
            redirect('home');
        }

        $username = $this->uri->segment(2);
        $new_username = str_replace('%20', ' ', $username);

        $data['data_username'] = $this->M_admin->get_data_akun($new_username)->result();

        $this->load->view('admin/header_admin');
        $this->load->view('admin/edit_admin', $data);
        $this->load->view('admin/footer_admin');
    }

    public function delete_admin()
    {
        if ($this->session->userdata('status') != "login_admin") {
            redirect('home');
        }

        $username = $this->uri->segment(2);
        $new_username = str_replace('%20', ' ', $username);

        $this->M_admin->delete_data_akun($new_username);

        redirect('data_admin');
    }

    public function proses_edit_admin()
    {
        if ($this->session->userdata('status') != "login_admin") {
            redirect('home');
        }

        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        $hak = $this->input->post('hak');

        $data_akun = array(
            'username' => $username,
            'nama' => $nama,
            'password' => md5($password),
            'hak' => $hak
        );

        $this->M_admin->update_data_akun($username, $data_akun);

        redirect('data_admin');
    }

    public function tambah_admin()
    {
        if ($this->session->userdata('status') != "login_admin") {
            redirect('home');
        }

        $this->load->view('admin/header_admin');
        $this->load->view('admin/tambah_admin');
        $this->load->view('admin/footer_admin');
    }

    public function profile()
    {
        if ($this->session->userdata('status') != "login_admin") {
            redirect('home');
        }

        $user = $this->session->userdata('username');
        $data['username'] = $this->M_admin->get_profile($user)->result();

        $this->load->view('admin/header_admin');
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/footer_admin');
    }

    public function proses_tambah_admin()
    {
        if ($this->session->userdata('status') != "login_admin") {
            redirect('home');
        }

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hak = $this->input->post('hak');

        $data_akun = array(
            'nama' => $nama,
            'username' => $username,
            'password' => md5($password),
            'hak' => $hak
        );

        $cek_akun = $this->M_admin->cek_admin($username)->num_rows();

        if ($cek_akun > 0) {
            $data['terdaftar'] = "ada";

            // echo "<pre>" . print_r($total, true);
            // exit(1);

            $this->load->view('admin/header_admin');
            $this->load->view('admin/tambah_admin', $data);
            $this->load->view('admin/footer_admin');
        } else {
            $this->M_admin->insert_akun($data_akun);

            $data['berhasil'] = "berhasil";
            $this->load->view('admin/header_admin');
            $this->load->view('admin/tambah_admin', $data);
            $this->load->view('admin/footer_admin');
        }
    }

    public function proses_edit_profile()
    {
        if ($this->session->userdata('status') != "login_admin") {
            redirect('home');
        }

        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');

        $data_akun = array(
            'username' => $username,
            'nama' => $nama,
            'password' => md5($password)
        );

        $this->M_admin->update_data_profile($username, $data_akun);

        redirect('profile');
    }
}
