<?php
class Matakuliah extends CI_Controller{
    // method index
    public function index(){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
        // render data dan kirim data ke view
        $this->load->view('matakuliah/index', $data);
    }
}
?>