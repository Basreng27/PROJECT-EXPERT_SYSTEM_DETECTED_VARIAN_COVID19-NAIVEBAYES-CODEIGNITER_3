<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    function get_all_akun()
    {
        $this->db->select('*');
        $this->db->from('akun');

        $query = $this->db->get();
        return $query;
    }

    function get_all_user($user)
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('hak', $user);

        $query = $this->db->get();
        return $query;
    }

    function get_all_aturan_pakar()
    {
        $this->db->select('*');
        $this->db->from('aturan_pakar');
        $this->db->join('virus', 'virus.kode_virus = aturan_pakar.kode_virus');
        $this->db->join('gejala', 'gejala.kode_gejala = aturan_pakar.kode_gejala');

        $query = $this->db->get();
        return $query;
    }

    function update_data_profile($username, $data_akun)
    {
        $this->db->set('nama', $data_akun['nama']);
        $this->db->set('password', $data_akun['password']);
        $this->db->where('username', $username);
        $this->db->update('akun');
    }

    function get_profile($user)
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('username', $user);

        $query = $this->db->get();
        return $query;
    }

    function get_gejala_virus($kd_virus)
    {
        $this->db->select('*');
        $this->db->from('aturan_pakar');
        $this->db->join('gejala', 'gejala.kode_gejala = aturan_pakar.kode_gejala');
        $this->db->where('kode_virus', $kd_virus);
        $query = $this->db->get();
        return $query;
    }

    function get_all_gejala()
    {
        $this->db->select('*');
        $this->db->from('gejala');

        $query = $this->db->get();
        return $query;
    }

    function get_all_virus()
    {
        $this->db->select('*');
        $this->db->from('virus');

        $query = $this->db->get();
        return $query;
    }
    function get()
    {
        $this->db->select('*');
        $this->db->from('aturan_pakar');
        $this->db->join('virus', 'virus.kode_virus = aturan_pakar.kode_virus');

        $query = $this->db->get();
        return $query;
    }

    function get_all_v($data)
    {
        $this->db->select('*');
        $this->db->from('aturan_pakar');
        $this->db->join('gejala', 'gejala.kode_gejala = aturan_pakar.kode_gejala');
        $this->db->where('kode_virus', $data);

        $query = $this->db->get();
        return $query;
    }

    function get_all_diagnosa()
    {
        $this->db->select('*');
        $this->db->from('diagnosa');

        $query = $this->db->get();
        return $query;
    }

    function get_kd_virus($kd_v)
    {
        $this->db->select('*');
        $this->db->from('kasus');
        $this->db->where('kode_virus', $kd_v);

        $query = $this->db->get();
        return $query;
    }

    function count_kasus()
    {
        $this->db->select('*');
        $this->db->from('kasus');
        $query = $this->db->get();
        return $query;
    }
    function count_nm_virus($nm_virus)
    {
        $this->db->select('*');
        $this->db->from('kasus');
        $this->db->where('kode_virus', $nm_virus);

        $query = $this->db->get();
        return $query;
    }
    function count($kode_gejala)
    {
        $this->db->select('*');
        $this->db->from('aturan_pakar');
        $this->db->where('kode_gejala', $kode_gejala);
        $this->db->where('bobot', '1');

        $query = $this->db->get();
        return $query;
    }
    function get_all_kasus()
    {
        $this->db->select('*');
        $this->db->from('kasus');

        $query = $this->db->get();
        return $query;
    }

    function cek_admin($username)
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('username', $username);

        $query = $this->db->get();
        return $query;
    }

    function cek_gejala($kode_gejala)
    {
        $this->db->select('*');
        $this->db->from('gejala');
        $this->db->where('kode_gejala', $kode_gejala);

        $query = $this->db->get();
        return $query;
    }

    function cek_virus($kode_virus)
    {
        $this->db->select('*');
        $this->db->from('virus');
        $this->db->where('kode_virus', $kode_virus);

        $query = $this->db->get();
        return $query;
    }

    function insert_akun($data_akun)
    {
        $this->db->set('username', $data_akun['username']);
        $this->db->set('password', $data_akun['password']);
        $this->db->set('nama', $data_akun['nama']);
        $this->db->set('hak', $data_akun['hak']);
        $this->db->insert('akun');
    }

    function insert_aturan($kode_virus, $kode_gejala)
    {
        $this->db->set('kode_virus', $kode_virus);
        $this->db->set('kode_gejala', $kode_gejala);
        $this->db->insert('aturan_pakar');
    }

    function insert_aturan_kosong($kode_virus)
    {
        $this->db->set('kode_virus', $kode_virus);
        $this->db->insert('aturan_pakar');
    }

    function insert_gejala($data_gejala)
    {
        $this->db->set('kode_gejala', $data_gejala['kode_gejala']);
        $this->db->set('nama_gejala', $data_gejala['nama_gejala']);
        $this->db->insert('gejala');
    }

    function insert_virus($data_virus)
    {
        $this->db->set('kode_virus', $data_virus['kode_virus']);
        $this->db->set('nama_virus', $data_virus['nama_virus']);
        $this->db->set('solusi', $data_virus['solusi']);
        $this->db->insert('virus');
    }

    function get_data_akun($new_username)
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('username', $new_username);

        $query = $this->db->get();
        return $query;
    }

    function get_isi_tampung($kd_gjl)
    {
        $this->db->select('*');
        $this->db->from('aturan_pakar');
        $this->db->where('kode_gejala', $kd_gjl);

        $query = $this->db->get();
        return $query;
    }

    function get_data_virus($new_kode_virus)
    {
        $this->db->select('*');
        $this->db->from('virus');
        $this->db->where('kode_virus', $new_kode_virus);

        $query = $this->db->get();
        return $query;
    }

    function get_data_gejala($new_kode_gejala)
    {
        $this->db->select('*');
        $this->db->from('gejala');
        $this->db->where('kode_gejala', $new_kode_gejala);

        $query = $this->db->get();
        return $query;
    }

    function get_every($data_kd_virus)
    {
        $this->db->select('*');
        $this->db->from('aturan_pakar');
        $this->db->where('kode_virus', $data_kd_virus);
        $this->db->where('bobot', '1');

        $query = $this->db->get();
        return $query;
    }

    function get_P1($data_kd_virus, $data_kd_gejala)
    {
        $this->db->select('*');
        $this->db->from('aturan_pakar');
        $this->db->where('kode_virus', $data_kd_virus);
        $this->db->where('kode_gejala', $data_kd_gejala);

        $query = $this->db->get();
        return $query;
    }

    function bobot_1($data_kd_virus)
    {
        $this->db->select('*');
        $this->db->from('aturan_pakar');
        $this->db->where('kode_virus', $data_kd_virus);
        $this->db->where('bobot', '1');

        $query = $this->db->get();
        return $query;
    }

    function bobot_0($data_kd_virus)
    {
        $this->db->select('*');
        $this->db->from('aturan_pakar');
        $this->db->where('kode_virus', $data_kd_virus);
        $this->db->where('bobot', '0');

        $query = $this->db->get();
        return $query;
    }

    function update_tampung_ada_tidak($kd_virus, $kd_gejala, $dt_1, $dt_0)
    {
        $this->db->set('tampung_ada', $dt_1);
        $this->db->set('tampung_tidak_ada', $dt_0);
        $this->db->where('kode_virus', $kd_virus);
        $this->db->where('kode_gejala', $kd_gejala);
        $this->db->update('aturan_pakar');
    }

    function total_1($data_kd_virus)
    {
        $this->db->select('*');
        $this->db->from('aturan_pakar');
        $this->db->where('kode_virus', $data_kd_virus);
        $this->db->where('bobot', '1');

        $query = $this->db->get();
        return $query;
    }

    function get_tampung($kd_vrs, $kd_gjl)
    {
        $this->db->select('*');
        $this->db->from('aturan_pakar');
        $this->db->where('kode_virus', $kd_vrs);
        $this->db->where('kode_gejala', $kd_gjl);

        $query = $this->db->get();
        return $query;
    }

    function update_data_akun($username, $data_akun)
    {
        $this->db->set('nama', $data_akun['nama']);
        $this->db->set('password', $data_akun['password']);
        $this->db->set('hak', $data_akun['hak']);
        $this->db->where('username', $username);
        $this->db->update('akun');
    }


    function update_tampung($kodevirus, $kodegejala, $isi)
    {
        $this->db->set('tampung', $isi);
        $this->db->where('kode_virus', $kodevirus);
        $this->db->where('kode_gejala', $kodegejala);
        $this->db->update('aturan_pakar');
    }

    function update_bobot($data_bobot)
    {
        $this->db->set('bobot', $data_bobot['bobot']);
        $this->db->where('kode_virus', $data_bobot['kode_virus']);
        $this->db->where('kode_gejala', $data_bobot['kode_gejala']);
        $this->db->update('aturan_pakar');
    }

    function update_data_gejala($kode_gejala, $data_gejala)
    {
        $this->db->set('nama_gejala', $data_gejala['nama_gejala']);
        $this->db->where('kode_gejala', $kode_gejala);
        $this->db->update('gejala');
    }

    function update_data_virus($kode_virus, $data_virus)
    {
        $this->db->set('nama_virus', $data_virus['nama_virus']);
        $this->db->set('solusi', $data_virus['solusi']);
        $this->db->where('kode_virus', $kode_virus);
        $this->db->update('virus');
    }

    function delete_data_akun($new_username)
    {
        $this->db->select('*');
        $this->db->where('username', $new_username);
        $this->db->delete('akun');
    }

    function delete_data_virus($new_kode_virus)
    {
        $this->db->select('*');
        $this->db->where('kode_virus', $new_kode_virus);
        $this->db->delete('virus');
    }

    function delete_data_gejala($new_kode_gejala)
    {
        $this->db->select('*');
        $this->db->where('kode_gejala', $new_kode_gejala);
        $this->db->delete('gejala');
    }
}
