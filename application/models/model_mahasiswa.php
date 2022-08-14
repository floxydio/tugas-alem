<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Mahasiswa extends CI_Model {
  function getMahasiswa() {
    $this->db->select('*');
    $this->db->from('uher_12190581');
    $query = $this->db->get();
    return $query->result();
  }

  function deleteMahasiswa($id) {
    $this->db->where('id', $id);
    $this->db->delete('uher_12190581');
  }

  function tambahMahasiswa() {
    $data = array(
      'nim' => $this->input->post('nim'),
      'nama' => $this->input->post('nama'),
      'kelas' => $this->input->post('kelas'),
      'prodi' => $this->input->post('prodi'),
      'email' => $this->input->post('email')
    );
    $this->db->insert('uher_12190581', $data);
  }
} 