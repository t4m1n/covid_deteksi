<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Deteksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_deteksi");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["count"] = $this->M_deteksi->getCount();
        $this->load->view("deteksi/index", $data);
    }

    public function add()
    {
        $data["kota"] = $this->M_deteksi->getKota();

        $this->load->view("deteksi/tambah", $data);
    }

    function add_aksi()
    {

        $id       = uniqid();
        $nama     = $this->input->post('nama');
        $jkel     = $this->input->post('jkel');
        $tgl_lhr  = $this->input->post('tgl_lhr');
        $wa       = $this->input->post('wa');
        $alamat   = $this->input->post('alamat');

        $soal11   = $this->input->post('soal11');
        $soal12   = $this->input->post('soal12');
        $soal13   = $this->input->post('soal13');

        $soal21   = $this->input->post('soal21');
        $soal22   = $this->input->post('soal22');
        $soal23   = $this->input->post('soal23');
        $soal24   = $this->input->post('soal24');
        $soal25   = $this->input->post('soal25');
        $soal26   = $this->input->post('soal26');

        if (!isset($nama) || !isset($jkel) || !isset($tgl_lhr) || !isset($wa) || !isset($alamat) || !isset($soal11) || !isset($soal12) || !isset($soal13) || !isset($soal21) || !isset($soal23) || !isset($soal24) || !isset($soal25) || !isset($soal26)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-info"></i> Gagal!</h4>
				Silahkan Lengkapi Data terlebih dahulu!!
				</div>');

            redirect('Deteksi/add');
        } else {

            if ($soal11 == '1' && $soal12 == '1' && $soal13 == '1') {
                if ($soal21 == '1' || $soal23 == '1' || $soal24 == '1' || $soal25 == '1' || $soal26 == '1') {
                    $result = '1';
                } else {
                    $result = '3';
                }
            } elseif ($soal11 == '1' && $soal12 == '0' && $soal13 == '0') {
                if ($soal23 == '1' || $soal24 == '1' || $soal25 == '1' || $soal26 == '1') {
                    $result = '1';
                } elseif ($soal21 == '1') {
                    $result = '2';
                } else {
                    $result = '3';
                }
            } elseif ($soal11 == '0' && $soal12 == '1' && $soal13 == '0') {
                if ($soal23 == '1' || $soal24 == '1' || $soal25 == '1' || $soal26 == '1') {
                    $result = '1';
                } elseif ($soal21 == '1') {
                    $result = '2';
                } else {
                    $result = '3';
                }
            } elseif ($soal11 == '1' && $soal12 == '1' && $soal13 == '0') {
                if ($soal21 == '1' || $soal23 == '1' || $soal24 == '1' || $soal25 == '1' || $soal26 == '1') {
                    $result = '2';
                } else {
                    $result = '3';
                }
            } elseif ($soal11 == '0' && $soal12 == '0' && $soal13 == '0') {
                if ($soal21 == '1' || $soal23 == '1' || $soal24 == '1' || $soal25 == '1' || $soal26 == '1') {
                    $result = '4';
                } else {
                    $result = '3';
                }
            } else {
                $result = '3';
            }

            $data = array(
                'id_res'      => $id,
                'nama'        => $nama,
                'jkel'        => $jkel,
                'tgl_lhr'     => $tgl_lhr,
                'wa'          => $wa,
                'alamat'      => $alamat
            );

            $data1 = array(
                'id_jawab'    => $id,
                'id_res'      => $id,
                'soal11'      => $soal11,
                'soal12'      => $soal12,
                'soal13'      => $soal13,
                'soal21'      => $soal21,
                'soal22'      => $soal22,
                'soal23'      => $soal23,
                'soal24'      => $soal24,
                'soal25'      => $soal25,
                'soal26'      => $soal26,
                'id_result'   => $result
            );

            $this->M_deteksi->saveRes($data);
            $this->M_deteksi->saveJwb($data1);

            $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Berhasil!</h4>
                Berhasil Menambah Data!!
                </div>');

            redirect('Deteksi/result/'.$id);
        }
    }

    public function result($id)
    {
        $data["result"] = $this->M_deteksi->result($id);

        $this->load->view("deteksi/result", $data);
    }
}
