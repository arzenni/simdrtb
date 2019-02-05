<div class="container box">
  <h3 align="center">Export Data to Excel in Codeigniter using PHPExcel</h3>
  <br />
  <div class="table-responsive">
   <table class="table table-bordered">
     <!-- tampilkanberdasarkan bulan(mulai-hingga), tahun(prtahun), area(kabupaaten) -->
    <tr>
     <th>Name</th>
     <th>No. Rekam Medis</th>
     <th>Tanggal Lahir</th>
     <th>RegGenExpert</th>
     <th>Tanggal Mulai</th>
     <th>Bulan Pengobatan</th>
     <th>Waktu  Pencatatan</th>
    </tr>
    <?php
    foreach($pasien_data as $row)
    {
     echo '
     <tr>
      <td>'.$row->nama.'</td>
      <td>'.$row->noRm.'</td>
      <td>'.$row->tglahir.'</td>
      <td>'.$row->idreg.'</td>
      <td>'.$row->tglmulai.'</td>
      <td>'.$row->blnpengobatan.'</td>
      <td>'.$row->wktpencatatan.'</td>
     </tr>
     ';
    }
    ?>
   </table>
   <div align="center">
    <form method="post" action="<?php echo base_url(); ?>excel_export/action">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>
   <br />
   <br />
  </div>
 </div>