<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
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

    public function dashboard_dokter()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $data['akun'] = $this->M_admin->get_all_akun()->num_rows();
        $data['gejala'] = $this->M_admin->get_all_gejala()->num_rows();
        $data['virus'] = $this->M_admin->get_all_virus()->num_rows();
        $data['kasus_row'] = $this->M_admin->get_all_kasus()->num_rows();
        $data['kasus'] = $this->M_admin->get_all_kasus()->result();
        $data['admin'] = $this->M_admin->get_all_user('admin')->num_rows();
        $data['dokter'] = $this->M_admin->get_all_user('dokter')->num_rows();

        $this->load->view('dokter/header_dokter');
        $this->load->view('dokter/dashboard_dokter', $data);
        $this->load->view('dokter/footer_dokter');
    }

    public function data_gejala()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $data['gejala'] = $this->M_admin->get_all_gejala()->result();

        $this->load->view('dokter/header_dokter');
        $this->load->view('dokter/data_gejala', $data);
        $this->load->view('dokter/footer_dokter');
    }

    public function data_virus()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $data['data_virus'] = $this->M_admin->get_all_virus()->result();

        $this->load->view('dokter/header_dokter');
        $this->load->view('dokter/data_virus', $data);
        $this->load->view('dokter/footer_dokter');
    }

    public function data_kasus()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $data['data_kasus'] = $this->M_admin->get_all_kasus()->result();

        $this->load->view('dokter/header_dokter');
        $this->load->view('dokter/data_kasus', $data);
        $this->load->view('dokter/footer_dokter');
    }

    public function tambah_gejala()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $this->load->view('dokter/header_dokter');
        $this->load->view('dokter/tambah_gejala');
        $this->load->view('dokter/footer_dokter');
    }

    public function tambah_virus()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $this->load->view('dokter/header_dokter');
        $this->load->view('dokter/tambah_virus');
        $this->load->view('dokter/footer_dokter');
    }

    public function proses_tambah_gejala()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $nama_gejala = $this->input->post('nama_gejala');
        $kode_gejala = $this->input->post('kode_gejala');

        $data_gejala = array(
            'nama_gejala' => $nama_gejala,
            'kode_gejala' => $kode_gejala
        );

        $cek_gejala = $this->M_admin->cek_gejala($kode_gejala)->num_rows();

        if ($cek_gejala > 0) {
            $data['terdaftar'] = "ada";

            $this->load->view('dokter/header_dokter');
            $this->load->view('dokter/tambah_gejala', $data);
            $this->load->view('dokter/footer_dokter');
        } else {
            $this->M_admin->insert_gejala($data_gejala);

            // $cek = $this->M_admin->get_all_virus()()->num_rows();

            // if ($cek > 0) {
            $virus = $this->M_admin->get_all_virus()->result();

            foreach ($virus as $data) {
                $this->M_admin->insert_aturan($data->kode_virus, $kode_gejala);
            }
            // }

            $adat['berhasil'] = "berhasil";
            $this->load->view('dokter/header_dokter');
            $this->load->view('dokter/tambah_gejala', $adat);
            $this->load->view('dokter/footer_dokter');
        }
    }

    public function proses_tambah_virus()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $kode_virus = $this->input->post('kode_virus');
        $nama_virus = $this->input->post('nama_virus');
        $solusi = $this->input->post('solusi');

        $data_virus = array(
            'kode_virus' => $kode_virus,
            'nama_virus' => $nama_virus,
            'solusi' => $solusi
        );

        $cek_virus = $this->M_admin->cek_virus($kode_virus)->num_rows();

        if ($cek_virus > 0) {
            $data['terdaftar'] = "ada";

            $this->load->view('dokter/header_dokter');
            $this->load->view('dokter/tambah_virus', $data);
            $this->load->view('dokter/footer_dokter');
        } else {

            $this->M_admin->insert_virus($data_virus);

            // $cek = $this->M_admin->get_all_gejala()->num_rows();

            // if ($cek > 0) {
            $gejala = $this->M_admin->get_all_gejala()->result();

            foreach ($gejala as $data) {
                $this->M_admin->insert_aturan($kode_virus, $data->kode_gejala);
            }
            // }
            //  else {
            //     // $gejala = $this->M_admin->get_all_gejala()->result();
            //     $this->M_admin->insert_aturan_kosong($kode_virus);

            //     // foreach ($gejala as $data) {
            //     //     $this->M_admin->insert_aturan($kode_virus, $data->kode_gejala);
            //     // }

            //     $a = "2";
            // }
            // echo "<pre>" . print_r($a, true);
            // exit(1);

            $adat['berhasil'] = "berhasil";
            $this->load->view('dokter/header_dokter');
            $this->load->view('dokter/tambah_virus', $adat);
            $this->load->view('dokter/footer_dokter');
        }
    }

    public function edit_gejala()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $kode_gejala = $this->uri->segment(2);
        $new_kode_gejala = str_replace('%20', ' ', $kode_gejala);

        $data['data_gejala'] = $this->M_admin->get_data_gejala($new_kode_gejala)->result();

        $this->load->view('dokter/header_dokter');
        $this->load->view('dokter/edit_gejala', $data);
        $this->load->view('dokter/footer_dokter');
    }

    public function edit_virus()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }


        $kode_virus = $this->uri->segment(2);
        $new_kode_virus = str_replace('%20', ' ', $kode_virus);

        $data['data_virus'] = $this->M_admin->get_data_virus($new_kode_virus)->result();

        $this->load->view('dokter/header_dokter');
        $this->load->view('dokter/edit_virus', $data);
        $this->load->view('dokter/footer_dokter');
    }

    public function proses_edit_virus()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $kode_virus = $this->input->post('kode_virus');
        $nama_virus = $this->input->post('nama_virus');
        $solusi = $this->input->post('solusi');

        $data_virus = array(
            'kode_virus' => $kode_virus,
            'nama_virus' => $nama_virus,
            'solusi' => $solusi
        );

        $this->M_admin->update_data_virus($kode_virus, $data_virus);

        redirect('data_virus');
    }

    public function proses_edit_gejala()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $nama_gejala = $this->input->post('nama_gejala');
        $kode_gejala = $this->input->post('kode_gejala');

        $data_gejala = array(
            'nama_gejala' => $nama_gejala,
            'kode_gejala' => $kode_gejala
        );

        $this->M_admin->update_data_gejala($kode_gejala, $data_gejala);

        redirect('data_gejala');
    }

    public function delete_virus()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $kode_virus = $this->uri->segment(2);
        $new_kode_virus = str_replace('%20', ' ', $kode_virus);

        $this->M_admin->delete_data_virus($new_kode_virus);

        redirect('data_virus');
    }

    public function delete_gejala()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $kode_gejala = $this->uri->segment(2);
        $new_kode_gejala = str_replace('%20', ' ', $kode_gejala);

        $this->M_admin->delete_data_gejala($new_kode_gejala);

        redirect('data_gejala');
    }

    public function aturan_pakar()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $data['get_virus'] = $this->M_admin->get_all_virus()->result();
        $data['aturan_pakar'] = $this->M_admin->get_all_aturan_pakar()->result();

        $this->load->view('dokter/header_dokter');
        $this->load->view('dokter/aturan_pakar', $data);
        $this->load->view('dokter/footer_dokter');
    }

    public function simpan_bobot()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        // $kode_virus = $this->uri->segment(2);
        // $kode_gejala = $this->uri->segment(3);
        // $new_kode_virus = str_replace('%20', ' ', $kode_virus);
        // $new_kode_gejala = str_replace('%20', ' ', $kode_gejala);

        $kode_virus = $this->input->post('kode_virus');
        $kode_gejala = $this->input->post('kode_gejala');
        $bobot = $this->input->post('bobot');

        $data_bobot = array(
            'kode_virus' => $kode_virus,
            'kode_gejala' => $kode_gejala,
            'bobot' => $bobot
        );

        // echo "<pre>" . print_r($data_bobot, true);
        // exit(1);

        $this->M_admin->update_bobot($data_bobot);

        redirect('aturan_pakar');
    }

    public function profile_dokter()
    {
        if ($this->session->userdata('status') != "login_dokter") {
            redirect('home');
        }

        $user = $this->session->userdata('username');
        $data['username'] = $this->M_admin->get_profile($user)->result();

        $this->load->view('dokter/header_dokter');
        $this->load->view('dokter/profile_dokter', $data);
        $this->load->view('dokter/footer_dokter');
    }

    public function proses_edit_profile_dokter()
    {
        if ($this->session->userdata('status') != "login_dokter") {
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

        redirect('profile_dokter');
    }
}
