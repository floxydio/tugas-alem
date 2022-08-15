<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model("model_mahasiswa");
    // untuk memanggil URL di controller
    $this->load->helper('url'); 
  }
 
  // untuk meload data mahasiswa pada DB & view mahasiswa
  public function index() {
    $this->load->model("model_mahasiswa");
    $data["results"] = $this->model_mahasiswa->getMahasiswa();
    $this->load->view("tampil_mahasiswa", $data);
  }

  // fungsi untuk menampilkan form tambah mahasiswa
  public function inputmahasiswa() {
    $this->load->view("form_mahasiswa");

  }
  
  // fungsi untuk menambahkan data mahasiswa ke database
  public function tambahmahasiswa() {
    $this->load->model("model_mahasiswa");
    $this->model_mahasiswa->tambahMahasiswa();
    redirect('mahasiswa');
    
  }

  // fungsi untuk menghapus data mahasiswa by id
  public function delete($id) {
    $this->model_mahasiswa->deleteMahasiswa($id);
    redirect('mahasiswa');
  }

}