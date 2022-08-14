<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model("model_mahasiswa");
    $this->load->helper('url'); 
  }
 
  public function index() {
    $this->load->model("model_mahasiswa");
    $data["results"] = $this->model_mahasiswa->getMahasiswa();
    $this->load->view("tampil_mahasiswa", $data);
  }

  public function inputmahasiswa() {
    $this->load->view("form_mahasiswa");

  }

  public function tambahmahasiswa() {
    $this->load->model("model_mahasiswa");
    $this->model_mahasiswa->tambahMahasiswa();
    redirect('mahasiswa');
    
  }

  public function delete($id) {
    $this->model_mahasiswa->deleteMahasiswa($id);
    redirect('mahasiswa');
  }

}