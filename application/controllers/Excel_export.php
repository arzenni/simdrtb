<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_export extends CI_Controller {
 
 function index()
 {
    $data['title'] ='Report';
    $this->load->model("excel_export_model");
    $data["pasien_data"] = $this->excel_export_model->fetch_data();
    $this->load->view("template/header",$data);
    $this->load->view("excel_export/index", $data);
    $this->load->view("template/footer");
}

 function action()
 {
  $this->load->model("excel_export_model");
  $this->load->library("excel");
  $object = new PHPExcel();

  $object->setActiveSheetIndex(0);

  $table_columns = array("Nama", "No. Rekam Medis", "Tanggal Lahir", "RegGenExpert", "Tanggal Mulai", "Bulan Pengobatan", "Waktu Pencatatan");

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $pasien_data = $this->excel_export_model->fetch_data();

  $excel_row = 2;

  foreach($pasien_data as $row)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->nama);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->noRm);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->tglahir);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->idreg);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->tglmulai);
   $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->blnpengobatan);
   $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->wktpencatatan);
   $excel_row++;
  }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="Employee Data.xls"');
  $object_writer->save('php://output');
 }

 
 
}