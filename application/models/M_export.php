<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
    class M_export extends CI_Model {
 
        public function __construct()
        {
            $this->load->database();
        }
        
        public function exportList() {
            $this->db->select(array('tanggal', 'divisi', 'kode_barang', 'nama_barang', 'satuan', 'jumlah'));
            $this->db->from('tb_barang_masuk');
            $query = $this->db->get();
            return $query->result();
        }
    }
?>
