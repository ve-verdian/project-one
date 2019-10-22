<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class M_barmas extends CI_Model {
 
    public function get_barmas()
    {
        $query = $this->db->get('tb_barang_masuk');
        return $query->result_array();
    }
}
?>
