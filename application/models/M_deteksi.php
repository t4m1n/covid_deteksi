<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_deteksi extends CI_Model
{

    function getKota()
    {
        $this->db->select('*');
        $this->db->from('daerah');
        return $this->db->get()->result();
    }

    public function saveRes($data)
    {
        $this->db->insert('responden', $data);
    }

    public function saveJwb($data)
    {
        $this->db->insert('jawab', $data);
    }

    function result($id)
    {
        $this->db->select('jawab.id_jawab, responden.nama, result.desc_result, result.saran, result.edukasi, result.img, result.bg');
        $this->db->from('jawab');
        $this->db->join('result','jawab.id_result = result.id_result');
        $this->db->join('responden','jawab.id_res = responden.id_res');
        $this->db->where('id_jawab', $id);
        return $this->db->get()->row();
    }

    function getCount()
    {
        $this->db->select('COUNT(*) AS tot');
        $this->db->from('jawab');
        return $this->db->get()->row();
    }
}
