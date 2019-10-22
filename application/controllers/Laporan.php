<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Laporan extends CI_Controller {
    public function __construct()
        {   
            parent::__construct();
            $this->load->library('Pdf');
            $this->load->model('m_barmas');
        }
    public function contoh()
        {
            $this->load->view('contoh', $data);
        }
    public function lap_barangmasuk()
        {
            $data['barmas'] = $this->m_barmas->get_barmas();
            $this->load->view('admin/lap_barangmasuk', $data);
    }   
}
