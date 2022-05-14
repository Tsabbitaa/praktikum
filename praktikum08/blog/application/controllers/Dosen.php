<?php
class Dosen extends CI_Controller{
    // membuat method dosen
    public function index(){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        // render data dan kirim data ke view
        $this->load->view('dosen/index', $data);
    }
    public function detail($id){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getById($id);
        $data['dosen'] = $dosen;
        // $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        // $this->load->view('layouts/footer');
    }
}
?>