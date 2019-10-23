<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Export extends CI_Controller {
    // construct
    public function __construct() {
        parent::__construct();
        // load model
        $this->load->model('M_export', 'export');
    }    
 
    public function index() {
        $data['export_list'] = $this->export->exportList();
        $this->load->view('export', $data);
    }
    // create xlsx
    public function generateXls() {
        // create file name
        $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $this->load->library('excel');
        $listInfo = $this->export->exportList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Tanggal');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Divisi');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Kode Barang');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Nama_Barang');
		$objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Satuan'); 
		$objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Jumlah');      
        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->tanggal);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->divisi);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->kode_barang);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->nama_barang);
			$objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->satuan);
			$objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->jumlah);
            $rowCount++;
        }
        $filename = "tutsmake". date("Y-m-d-H-i-s").".xlsx";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel');  
        $objWriter->save('php://output'); 
 
    }
     
}
?>
