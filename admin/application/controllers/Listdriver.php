<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Listdriver extends CI_Controller {

    public $datakirim;
    public $pesan = "";

    public function index() {

//        $this->load->model('Driver_m');
//        $this->datakirim['driver'] = $this->Driver_m->getAllDriver();
//        $this->datakirim['pesan'] = $this->pesan;
//        $this->datakirim['tittle'] = 'Driver Motor';
//
//        $this->load->view('Listdriver_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function driverMotor() {

        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getAllDriverMotor();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'Go-Moto';

        $this->load->view('Listdriver_view', $this->datakirim);
    }

    public function mcar() {

        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getAllDriverMcar();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'Go-Cab';

        $this->load->view('Listdriver_view', $this->datakirim);
    }

    public function mbox() {

        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getAllDriverMbox();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'Go-Box';

        $this->load->view('Listdriver_view', $this->datakirim);
    }

    public function mmassage() {

        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getAllMmassage();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'Go-Massage';

        $this->load->view('Listmmassage_view', $this->datakirim);
    }

    public function mservice() {

        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getAllMservice();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'Go-Service';

        $this->load->view('Listmservice_view', $this->datakirim);
    }

//    =============================================================================================

    public function resetPassword($idDriver, $namaDriver, $tittle) {

        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->resetPassword($idDriver);

        switch ($tittle) {
            case 'Go-Moto':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Password $namaDriver successfully reset</p> <br>";
                $this->driverMotor();

                break;
            case 'Go-Cab':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Password $namaDriver successfully reset</p> <br>";
                $this->mcar();

                break;
            case 'Go-Box':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Password $namaDriver successfully reset</p> <br>";
                $this->mbox();

                break;
            case 'Go-Massage':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Password Driver $namaDriver successfully reset</p> <br>";
                $this->mmassage();

                break;
            case 'Go-Service':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Password Driver $namaDriver successfully reset</p> <br>";
                $this->mservice();

                break;

            default:
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Password Driver $namaDriver successfully reset</p> <br>";
                $this->index();
                break;
        }
    }

//    ==================== detil driver + edit status ================================================
    public function detilDriver($idDriver) {
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getDriver($idDriver);
        $this->datakirim['saldo'] = $this->Driver_m->getSaldoDriver($idDriver);
        $this->datakirim['transaksi'] = $this->Driver_m->getHistoryTransaksi($idDriver);

        $this->load->view('Listdriver2_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function editStatusForm($idDriver) {
//        echo $idDriver;
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getDriver($idDriver);

        $this->load->view('Editdriver_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function editStatus() {


//        echo $idDriver;
        $idDriver = $_POST['iddriver'];
        $namadepan = $_POST['namadepan'];
        $namabelakang = $_POST['namabelakang'];
        $tempatlahir = $_POST['tempatlahir'];
        $dob = $_POST['DOB'];
        $ktp = $_POST['ktp'];
        $job = $_POST['job'];
        $status = $_POST['status'];
        $foto = $_POST['foto'];

        $tipekendaraan = $_POST['tipekendaraan'];
        $nokendaraan = $_POST['nokendaraan'];
        $warnakendaraan = $_POST['warnakendaraan'];
        $merekkendaraan = $_POST['merekkendaraan'];
        $idkendaraan = $_POST['idkendaraan'];


        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotodriver/$foto";
        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotodriver/";

//        echo "$pathfiledelete | $jeniskendaraan | $tipekendaraan | $nokendaraan | $warnakendaraan | $idkendaraan | $merekkendaraan";

        $this->load->model('Driver_m');

        if ($_FILES["userfile"]['name'] != NULL) {
            //            hapus foto lama 
            unlink("$pathfiledelete");
//            upload foto editan baru 
            $config['file_name'] = $foto;
            $config['upload_path'] = $pathfilesave;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $this->Driver_m->editStatus($idDriver, $status, $namadepan, $namabelakang, $ktp, $dob, $tempatlahir);
            $this->Driver_m->editKendaraan($tipekendaraan, $merekkendaraan, $nokendaraan, $warnakendaraan, $idkendaraan);
//            $this->Driver_m->editStatus($idDriver, $status);
        } else {
            $this->Driver_m->editStatus($idDriver, $status, $namadepan, $namabelakang, $ktp, $dob, $tempatlahir);
            $this->Driver_m->editKendaraan($tipekendaraan, $merekkendaraan, $nokendaraan, $warnakendaraan, $idkendaraan);
        }


//        REDIRECT PAGE 
        switch ($job) {
            case 'mride':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Status has been successfully edited</p> <br>";
                $this->driverMotor();
                break;
            case 'mcar':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Status has been successfully edited</p> <br>";
                $this->mcar();
                break;
            case 'mbox':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Status has been successfully edited</p> <br>";
                $this->mbox();
                break;
            default:
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Status has been successfully edited</p> <br>";
                $this->index();
                break;
        }
    }

    //    ==================== detil mmassager + edit status ================================================
    public function detilMmassage($id) {
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getMmassage($id);
        $this->datakirim['saldo'] = $this->Driver_m->getSaldoDriver($id);

        $this->load->view('Listmmassage2_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function editMmassageForm($id) {
//        echo $idDriver;
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getMmassage($id);

        $this->load->view('Editmmassage_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function editStatusMmassage() {
        $this->load->model('Driver_m');

//        echo $idDriver;
        $idDriver = $_POST['idmmassage'];
        $namadepan = $_POST['namalengkap'];
        $tempatlahir = $_POST['tempatlahir'];
        $dob = $_POST['DOB'];
        $ktp = $_POST['ktp'];

        $status = $_POST['status'];
        $foto = $_POST['foto'];


        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotommassage/$foto";
        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotommassage/";

//        echo "$pathfiledelete | $jeniskendaraan | $tipekendaraan | $nokendaraan | $warnakendaraan | $idkendaraan | $merekkendaraan";

        if ($_FILES["userfile"]['name'] != NULL) {
            //            hapus foto lama 
            unlink("$pathfiledelete");
//            upload foto editan baru 
            $config['file_name'] = $foto;
            $config['upload_path'] = $pathfilesave;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $this->Driver_m->editStatus($idDriver, $status, $namadepan, "", $ktp, $dob, $tempatlahir);
//            $this->Driver_m->editKendaraan($jeniskendaraan, $tipekendaraan, $merekkendaraan, $nokendaraan, $warnakendaraan, $idkendaraan);
//            $this->Driver_m->editStatus($idDriver, $status);
        } else {
            $this->Driver_m->editStatus($idDriver, $status, $namadepan, "", $ktp, $dob, $tempatlahir);
//            $this->Driver_m->editKendaraan($jeniskendaraan, $tipekendaraan, $merekkendaraan, $nokendaraan, $warnakendaraan, $idkendaraan);
        }

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Partner Status has been successfully edited</p> <br>";
        $this->mmassage();
    }

    //    ==================== detil mservice + edit status ================================================
    public function detilMservice($id) {
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getMservice($id);
        $this->datakirim['saldo'] = $this->Driver_m->getSaldoDriver($id);

        $this->load->view('Listmservice2_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function editMserviceForm($id) {
//        echo $idDriver;
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getMservice($id);

        $this->load->view('Editmservice_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function editStatusMservice() {
        $this->load->model('Driver_m');

//        echo $idDriver;
        $idDriver = $_POST['idmservice'];
        $namadepan = $_POST['namalengkap'];
        $tempatlahir = $_POST['tempatlahir'];
        $dob = $_POST['DOB'];
        $ktp = $_POST['ktp'];

        $status = $_POST['status'];
        $foto = $_POST['foto'];


        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotomservice/$foto";
        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotomservice/";

//        echo "$pathfiledelete | $jeniskendaraan | $tipekendaraan | $nokendaraan | $warnakendaraan | $idkendaraan | $merekkendaraan";

        if ($_FILES["userfile"]['name'] != NULL) {
            //            hapus foto lama 
            unlink("$pathfiledelete");
//            upload foto editan baru 
            $config['file_name'] = $foto;
            $config['upload_path'] = $pathfilesave;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $this->Driver_m->editStatus($idDriver, $status, $namadepan, "", $ktp, $dob, $tempatlahir);
//            $this->Driver_m->editKendaraan($jeniskendaraan, $tipekendaraan, $merekkendaraan, $nokendaraan, $warnakendaraan, $idkendaraan);
//            $this->Driver_m->editStatus($idDriver, $status);
        } else {
            $this->Driver_m->editStatus($idDriver, $status, $namadepan, "", $ktp, $dob, $tempatlahir);
//            $this->Driver_m->editKendaraan($jeniskendaraan, $tipekendaraan, $merekkendaraan, $nokendaraan, $warnakendaraan, $idkendaraan);
        }

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Partner Status has been successfully edited</p> <br>";
        $this->mservice();
    }

}
