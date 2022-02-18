<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    function getNIS()
    {
        $this->db->order_by('nis', 'ASC');
        return $this->db->get_where('tbl_siswa')->result_array();
    }
    function getKelas()
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->get_where('tbl_kelas')->result_array();
    }
    function getSiswa($kelas)
    {
        $this->db->order_by('nis', 'ASC');
        return $this->db
            ->get_where('tbl_siswa', ['kelas' => $kelas])
            ->result_array();
    }
    function nama_siswa($nis)
    {
        $this->db->where('nis', $nis);
        $result = $this->db->get('tbl_siswa')->result();
        return $result;
    }

    function getNBM()
    {
        $this->db->order_by('nbm', 'ASC');
        return $this->db->get_where('tbl_gukar')->result_array();
    }
    function nama($nbm)
    {
        $this->db->where('nbm', $nbm);
        $result = $this->db->get('tbl_gukar')->result();
        return $result;
    }

    function getKegiatan()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get_where('tbl_kegiatan')->result_array();
    }

    function getTp()
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->get_where('tp')->result_array();
    }
}
