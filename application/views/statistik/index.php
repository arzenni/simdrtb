<div>
<table class="table table-bordered">
     <!-- tampilkanberdasarkan bulan(mulai-hingga), tahun(prtahun), area(kabupaaten) -->
    <!--vct-->
    <label for="">VCT</label>
    <tr>
     <th>Bulan</th>
     <th>Hasil</th>
     <th>Jumlah</th>
    </tr>
    <?php
    foreach($hitungvct as $row)
    {
     echo '
     <tr>
      <td>'.$row['bulanvct'].'</td>
      <td>'.$row['hasilvct'].'</td>
      <td>'.$row['angkavct'].'</td>
     </tr>
     ';
    }
    ?>
   </table>
</div>

<div>
<table class="table table-bordered">
     <!-- tampilkanberdasarkan bulan(mulai-hingga), tahun(prtahun), area(kabupaaten) -->
    <!--vct-->
    <label for="">Mikroskopis</label>
    <tr>
     <th>Bulan</th>
     <th>Jumlah</th>
    </tr>
    <?php
    foreach($hitungmik as $row)
    {
     echo '
     <tr>
      <td>'.$row['bulanmik'].'</td>
      <td>'.$row['angkamik'].'</td>
     </tr>
     ';
    }
    ?>
   </table>
</div>

<div>
<table class="table table-bordered">
     <!-- tampilkanberdasarkan bulan(mulai-hingga), tahun(prtahun), area(kabupaaten) -->
    <!--vct-->
    <label for="">TCM</label>
    <tr>
     <th>Bulan</th>
     <th>Hasil</th>
     <th>Jumlah</th>
    </tr>
    <?php
    foreach($hitungtcm as $row)
    {
     echo '
     <tr>
      <td>'.$row['bulantcm'].'</td>
      <td>'.$row['hasiltcm'].'</td>
      <td>'.$row['angkatcm'].'</td>
     </tr>
     ';
    }
    ?>
   </table>
</div>

<div>
<table class="table table-bordered">
     <!-- tampilkanberdasarkan bulan(mulai-hingga), tahun(prtahun), area(kabupaaten) -->
    <!--vct-->
    <label for="">Diabetes Melitus</label>
    <tr>
     <th>Bulan</th>
     <th>Positif</th>
     <th>Jumlah</th>
    </tr>
    <?php
    foreach($hitungterapi as $row)
    {
     echo '
     <tr>
      <td>'.$row['bulanterapi'].'</td>
      <td>'.$row['hasildm'].'</td>
      <td>'.$row['angkaterapi'].'</td>
     </tr>
     ';
    }
    ?>
   </table>
</div>