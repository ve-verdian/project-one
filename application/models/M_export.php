<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_export extends CI_Model {
  public function view(){
    return $this->db->get('tb_barang_masuk')->result(); // Tampilkan semua data yang ada di tabel siswa
  }
}
