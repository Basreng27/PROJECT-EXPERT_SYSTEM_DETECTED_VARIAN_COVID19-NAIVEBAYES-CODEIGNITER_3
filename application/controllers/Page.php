<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
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
        $this->load->model('M_page');
        $this->load->model('M_admin');
    }

    public function home()
    {
        if ($this->session->userdata('status') == "login_admin") {
            if ($this->session->userdata('hak') == "admin") {
                redirect('dashboard_admin');
            }
        } elseif ($this->session->userdata('status') == "login_dokter") {
            if ($this->session->userdata('hak') == "dokter") {
                redirect('dashboard_dokter');
            }
        }

        $this->load->view('page/header');
        $this->load->view('page/home');
        $this->load->view('page/footer');
    }

    public function sistem_pakar()
    {
        if ($this->session->userdata('status') == "login_admin") {
            if ($this->session->userdata('hak') == "admin") {
                redirect('dashboard_admin');
            }
        } elseif ($this->session->userdata('status') == "login_dokter") {
            if ($this->session->userdata('hak') == "dokter") {
                redirect('dashboard_dokter');
            }
        }

        $data['gejala'] = $this->M_admin->get_all_gejala()->result();

        $this->load->view('page/header');
        $this->load->view('page/sistem_pakar', $data);
        $this->load->view('page/footer');
    }

    // public function regist()
    // {
    //     $this->load->view('page/header');
    //     $this->load->view('page/regist');
    //     $this->load->view('page/footer');
    // }

    public function login()
    {
        if ($this->session->userdata('status') == "login_admin") {
            if ($this->session->userdata('hak') == "admin") {
                redirect('dashboard_admin');
            }
        } elseif ($this->session->userdata('status') == "login_dokter") {
            if ($this->session->userdata('hak') == "dokter") {
                redirect('dashboard_dokter');
            }
        }

        $this->load->view('page/header');
        $this->load->view('page/login');
        $this->load->view('page/footer');
    }

    function proses_login()
    {
        // if ($this->session->userdata('status') == "login_admin") {
        //     if ($this->session->userdata('hak') == "admin") {
        //         redirect('dashboard_admin');
        //     }
        // } elseif ($this->session->userdata('status') == "login_dokter") {
        //     if ($this->session->userdata('hak') == "dokter") {
        //         redirect('dashboard_dokter');
        //     }
        // }

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data_akun = array(
            'username' => $username,
            'password' => md5($password)
        );

        $cek = $this->M_page->cek_akun($data_akun)->num_rows();

        if ($cek > 0) {
            $akun = $this->M_page->cek_akun($data_akun)->row_array();

            if ($akun['hak'] == 'admin') {
                $data_session = array(
                    'username' => $username,
                    'nama' => $akun['nama'],
                    'hak' => $akun['hak'],
                    'status' => "login_admin"
                );

                $this->session->set_userdata($data_session);
                redirect(base_url('dashboard_admin'));
            } elseif ($akun['hak'] == 'dokter') {
                $data_session = array(
                    'username' => $username,
                    'nama' => $akun['nama'],
                    'hak' => $akun['hak'],
                    'status' => "login_dokter"
                );

                $this->session->set_userdata($data_session);
                redirect(base_url('dashboard_dokter'));
            } else {
                redirect('login');
            }
        } else {
            $data['tidak_terdaftar'] = "Tidak Terdaftar";

            $this->load->view('page/header');
            $this->load->view('page/login', $data);
            $this->load->view('page/footer');
        }
    }

    public function hasil()
    {
        if ($this->session->userdata('status') == "login_admin") {
            if ($this->session->userdata('hak') == "admin") {
                redirect('dashboard_admin');
            }
        } elseif ($this->session->userdata('status') == "login_dokter") {
            if ($this->session->userdata('hak') == "dokter") {
                redirect('dashboard_dokter');
            }
        }

        $this->load->view('page/header');
        $this->load->view('page/hasil');
        $this->load->view('page/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }


    function trimArray($array)
    {
        $tampung = [];
        foreach ($array as $key => $list) {
            $tampung[$key] = trim($list);
        }

        return $tampung;
    }

    public function proses_tambah_kasus()
    {
        if ($this->session->userdata('status') == "login_admin") {
            if ($this->session->userdata('hak') == "admin") {
                redirect('dashboard_admin');
            }
        } elseif ($this->session->userdata('status') == "login_dokter") {
            if ($this->session->userdata('hak') == "dokter") {
                redirect('dashboard_dokter');
            }
        }

        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $umur = $this->input->post('umur');
        $alamat = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telepon');
        $tanggal = $this->input->post('tanggal');
        $gejala = implode(', ', (array)$_POST['kode_gejala']);

        $data_kasus = array(
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'umur' => $umur,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon,
            'tanggal' => $tanggal
        );

        $gjl = $this->trimArray(explode(',', $gejala));
        $hit = count($gjl);
        // if (in_array($gejala,))


        // if ($hit > 1) {
        //     $toti = "Ada Gejala";
        // } else {
        //     $toti = "Tidak ada Gejala";
        // }
        // echo "<pre>" . print_r($toti, true);
        // exit(1);

        if ($hit > 1) {
            $get_all_virus = $this->M_admin->get()->result_array();
            $hasil = $get_all_virus;

            foreach ($get_all_virus as $key => $list) {
                //ambil data gejala
                $gjala = $this->trimArray(explode(',', $gejala)); // $gjala = str_replace('%20', ' ', strtolower(trim($gejala)));

                //menampung sementara nilai bobot 1
                $bobot_sementara = 0;
                $bt_1 = 0;
                $bt_0 = 0;

                //menampung sementara nilai bobot 0
                // $bobot_sementara_kosong = 0;
                //==================================================
                $data_kd_virus = $list['kode_virus']; //ambil kode virus
                $data_kd_gejala = $list['kode_gejala']; //ambil data kode gejala
                $obot = $list['bobot']; //ambil bobot 

                //cek_gejala dan bobot yang isinya 1
                if (in_array($data_kd_gejala, $gjala)) {
                    if ($obot == 1) {
                        $hasil[$key]['dt'] = "Ada Gejala";
                        $hasil[$key]['tb'] = "ada bobot";

                        //hitung total kasus virus pada tabel kasus
                        $count_virus_kasus = $this->M_admin->count_nm_virus($data_kd_virus)->num_rows();
                        $hasil[$key]['total virus di kasus'] = $count_virus_kasus;

                        //hitung total gejala di aturan pakar yang bobotnya 1
                        $count_class = $this->M_admin->count($data_kd_gejala)->num_rows();
                        $hasil[$key]['total gejala aturan pakar yang bobot = 1'] = $count_class;

                        //mengambil isi array di ubah menjadi biasa
                        foreach ($gjala as $yek => $lue) {
                            foreach ((array)$lue as $ke => $isi) {
                                $kd_k = $isi;
                                //cari kode_gejala yang bobotnya 1 pada setiap kode_virus
                                $cari_bobot_1 = $this->M_admin->get_P1($data_kd_virus, $kd_k)->row();
                                //lalu di cek                           
                                if ($cari_bobot_1->bobot > 0) {
                                    $sementara = 1;
                                } else {
                                    $sementara = 0;
                                }
                                //penampungan nilai
                                $bobot_sementara = $bobot_sementara + $sementara;
                            }
                        }

                        //menghitung total bobot 1 berdasarkan kode_virus 
                        $bobot_1 = $this->M_admin->bobot_1($data_kd_virus)->num_rows();

                        //P ada Hasil dari pencarian data bobot 1
                        $hasil[$key]['P ada'] = $bobot_sementara / $bobot_1;
                        $bt_1 = $hasil[$key]['P ada'] = $bobot_sementara / $bobot_1;

                        //menghitung total bobot 1 berdasarkan kode_virus 
                        $bobot_0 = $this->M_admin->bobot_0($data_kd_virus)->num_rows();

                        //P tidak ada Hasil dari pencarian data bobot 0
                        $hasil[$key]['P tidak ada'] = $bobot_sementara / $bobot_0;
                        $bt_0 = $hasil[$key]['P tidak ada'] = $bobot_sementara / $bobot_0;

                        //cari kode_gejala yang bobotnya 1 pada setiap kode_virus
                        $cek_1_bobot = $this->M_admin->get_every($data_kd_virus)->num_rows();
                        $hasil[$key]['total 1 pada setiap kode virus'] = $cek_1_bobot;

                        //perhitungan P(Xk|Ci) berdasarkan kode_virus = total gejala / total virus
                        // $hasil[$key]['Hitung P(Xk|Ci)'] = ($count_virus_kasus != 0) ? $hasil[$key]['total gejala aturan pakar yang bobot = 1'] / $hasil[$key]['total virus di kasus'] * 1 : 0;
                        //hitung total kasus keseluruhan
                        // $total_kasus = $this->M_admin->count_kasus()->num_rows();
                        //hasil akhir pembagiannya
                        // $hasil[$key]['P(X|Ci)*P(Ci)'] = $hasil[$key]['Hitung P(Xk|Ci)'] * ($count_virus_kasus / $total_kasus);
                    } else {
                        $hasil[$key]['tb'] = "tidak ada bobot";
                        $hasil[$key]['P(X|Ci)*P(Ci)'] = 0;
                    }
                } else {
                    $hasil[$key]['dt'] = "tidak ada gejala";
                    $hasil[$key]['P(X|Ci)*P(Ci)'] = 0;
                    $bt_1 = $hasil[$key]['P(X|Ci)*P(Ci)'];
                    $hasil[$key]['P ada'] = 0;
                    $bt_0 = $hasil[$key]['P ada'];
                    $hasil[$key]['P tidak ada'] = 0;
                }
                //update kolom tampung_ada dan tampung_tidak_ada
                $this->M_admin->update_tampung_ada_tidak($data_kd_virus, $data_kd_gejala, $bt_1, $bt_0);

                //mengambil data tampung
                $tambah_ada = $this->M_admin->get_tampung($data_kd_virus, $data_kd_gejala)->result();
                //variabel sementara
                $sementara_ada = 1;
                $tamp_ada = 0;

                //tampung_ada
                foreach ($tambah_ada as $ada) {
                    if ($ada->tampung_ada > 0) {
                        $tamp_ada = $ada->tampung_ada;
                    } else {
                        $tamp_ada = 0;
                    }
                    $sementara_ada = $sementara_ada + $tamp_ada; //harusnya dikali
                }

                //variabel sementara
                $sementara_tidak = 1;
                $tamp_tidak = 0;

                //tampung_tidak_ada
                foreach ($tambah_ada as $ada) {
                    if ($ada->tampung_tidak_ada > 0) {
                        $tamp_tidak = $ada->tampung_tidak_ada;
                    } else {
                        $tamp_tidak = 0;
                    }
                    $sementara_tidak = $sementara_tidak + $tamp_tidak; //harusnya dikali
                }

                //hitung P(X|Ci) bobot ada
                $hasil[$key]['Hasil Hitung P(X|Ci) bobot ada'] = $sementara_ada;

                //hitung P(X|Ci) bobot tidak ada
                $hasil[$key]['Hasil Hitung P(X|Ci) bobot tidak ada'] = $sementara_tidak;

                //hitung P(X|Ci) bobot ada dan P(X|Ci) bobot tidak ada
                $hasil[$key]['P(X|Ci)*P(Ci)'] =  $hasil[$key]['Hasil Hitung P(X|Ci) bobot ada'] * $hasil[$key]['Hasil Hitung P(X|Ci) bobot tidak ada'];

                $this->M_admin->update_tampung($data_kd_virus, $data_kd_gejala, $hasil[$key]['P(X|Ci)*P(Ci)']);
            }


            $kode = $this->M_page->get_terbesar()->row();
            $kd = $kode->kode_virus;

            $this->M_page->insert_kasus($data_kasus, $kd);

            $id_ks = $this->M_page->terbesar()->row();
            $id_kasus = $id_ks->id_kasus;
            $idat['hsl'] = $this->M_page->hsl($id_kasus)->result();

            $this->load->view('page/header');
            $this->load->view('page/hasil', $idat);
            $this->load->view('page/footer');
        } else {
            $data['tdk'] = array(
                'nama' => $nama,
                'jenis_kelamin' => $jenis_kelamin,
                'umur' => $umur,
                'alamat' => $alamat,
                'no_telepon' => $no_telepon,
                'tanggal' => $tanggal
            );

            // $dat['tdk'] = $this->$data->result_array();
            // echo "<pre>" . print_r($data['tdk'], true);
            // exit(1);

            $this->load->view('page/header');
            $this->load->view('page/tdk_hasil', $data);
            $this->load->view('page/footer');
        }
    }
}
