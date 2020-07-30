<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Listmakanan extends CI_Controller {

    public $datakirim;
    public $namaresto;
    public $pesan = "";
    public $idmitra;
    public $idresto;

    function __construct() {
        parent::__construct();
        $this->load->library('session');

        $this->idmitra = $this->session->userdata('idmitra');
        $this->idresto = $this->session->userdata('idresto');

        $namaresto = $this->session->userdata('nama');
        $this->namaresto = $namaresto;
    }

    public function index() {
        if ($this->idmitra != NULL) {
            $this->datakirim['namaresto'] = $this->namaresto;
            $this->datakirim['pesan'] = "$this->pesan";

//        mengambil all makanan
            $this->load->model('Makanan');
            $this->datakirim['makanan'] = $this->Makanan->getAllMakanan();

            $this->load->view('lihatmakanan_view', $this->datakirim);
        } else {
            header('Location: ' . base_url());
        }
    }

    public function editMakananForm($id) {
        //  pesan dan nama resto 
        $this->datakirim['pesan'] = "$this->pesan";
        $this->datakirim['namaresto'] = $this->namaresto;

        // data edit makanan
        $this->load->model('Makanan');
        $this->datakirim['dataedit'] = $this->Makanan->getMakanan($id);

        //  data untuk dropdown kategori makanan
        $this->load->model('Kategori_makanan');
        $this->datakirim['kategori_makanan'] = $this->Kategori_makanan->getAllCategory();

        $this->load->view('editmakanan_view', $this->datakirim);
    }

    public function editMakanan() {
        $id = $_POST['id'];
//        $foto = $_POST['foto'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
//        $new_name = time() . $_FILES["userfile"]['name'];
//            edit data tanpa foto 
        $this->load->model('Makanan');
        $this->Makanan->editMakanan($id, $nama, $harga, $kategori, $deskripsi);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Food data successfully edited</p> <br>";
        $this->index();
    }

    public function hapusMakanan($id) {

        $this->load->model('Makanan');

//        hapus file 
//        $path = "./fotomenumakanan/$foto";

        $this->Makanan->hapusMakanan($id);
        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Food data successfully deleted</p> <br>";
        $this->index();
    }

}

