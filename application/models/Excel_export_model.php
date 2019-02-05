<?php
class Excel_export_model extends CI_Model
{
 function fetch_data()
 {
    return $this->db->query("SELECT pasien.noRm, pasien.nama, DATE_FORMAT(pasien.tglahir, '%e %M %Y') AS tglahir, pemeriksaan.idPeriksa, pemeriksaan.idreg, DATE_FORMAT(pemeriksaan.tglmulai, '%W, %e %M %Y') AS tglmulai, pemeriksaan.blnpengobatan, DATE_FORMAT(pemeriksaan.wktpencatatan, '%W, %e %M %Y %T') AS wktpencatatan FROM pemeriksaan INNER JOIN pasien ON pemeriksaan.noRm = pasien.noRm ORDER BY pemeriksaan.wktpencatatan DESC")->result();

 }

 
}