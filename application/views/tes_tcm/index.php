<div class="container forma rounded">
    <form id="formtcm" action="<?php base_url()?>tes_tcm/tambahtcm" method="post">
            <div style="margin:8px 0px;">
            <h1 class="text-center" style="padding-top:10px;padding-bottom:35px;">Form Tes Cepat Molekuler</h1>
                <?php if( $this->session->flashdata('tcm')) :  ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('tcm');?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php elseif( $this->session->flashdata('errtcm')):?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('errtcm');?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif;?>
                    <div class="col-form-label col-sm-4 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                    </div>
                    <div class="border border-primary rounded-bottom border-top-0">
                        <div class="col form-group row"><label class="col-form-label col-sm-4">RegGenExpert</label><input class="form-control col-sm-8 dis" type="text" id="fgenxpert" name="genxpert"></div>
                        <div id= "tcmrm" class="col form-group row"><label class="col-form-label col-sm-4">No. Rekam Medis</label><input class="form-control col-sm-8 dis" type="text" id="fnrm" name="norm"></div>
                        <div class="col form-group row"><label class="col-form-label col-sm-4">Waktu Periksa</label><input class="form-control col-sm-5 dis" type="date" data-date-format="mm/dd/yyyy" id="ftcmtgl" name="tcmtgl"><input class="form-control col-sm-3 dis" type="time" id="ftcmwkt" name="tcmwkt"></div>
                        <div class="col form-group row"><label class="col-form-label col-sm-4">Ruang</label><select class="form-control col-sm-4 dis" id="fruang" name="ruang"><option value="" selected="">-</option><option value="Rawat Jalan">Rawat Jalan</option><option value="Rawat Inap">Rawat Inap</option><option value="RSF">RSF</option></select>
                            <input type="text" class="form-control col-sm-5 dis" id="frawat" name="rawat">
                            <!-- <select
                                class="form-control col-sm-4 dis" id="frawat" name="rawat">
                                <option value="" selected="">-</option>
                                <?php foreach ($ruang as $r): ?>
                                <option value="<?= $r['ruang']; ?>"><?= $r['ruang'];?></option>
                                <?php endforeach; ?>
                                </select> -->
                        </div>
                        <div class="col form-group row"><label class="col-form-label col-sm-4">Bahan Periksa</label><input class="form-control col-sm-8 dis" type="text" id="fbhnperiksa" name="bhnperiksa"></div>
                        <div class="col form-group row"><label class="col-form-label col-sm-4">Hasil</label><select class="form-control col-sm-8 dis" id="fdetect" name="detect"><option value="" selected="">-</option><option value="MTB Not Detected" >MTB Not Detected</option><option value="MTB Detected Very Low">MTB Detected Very Low</option><option value="MTB Detected Low">MTB Detected Low</option><option value="MTB Detected Medium">MTB Detected Medium</option><option value="MTB Detected High">MTB Detected High</option><option value="MTB Detected Very High">MTB Detected Very High</option></select>
                            <label
                                class="col-form-label col-sm-4"></label><select class="form-control col-sm-8 dis" id="fresis" name="resis"><option value="" selected="">-</option><option value="Rifampicin Resistance Not Detected">Rifampicin Resistance Not Detected</option><option value="Rifampicin Resistance Detected">Rifampicin Resistance Detected</option></select></div>
                        <div
                            class="col form-group row"><label class="col-form-label col-sm-4">Keterangan Hasil</label><select class="form-control col-sm-8 dis" id="fkethasiltcm" name="kethasiltcm"><option value="" selected="">-</option><option value="Tidak Ditemukan Kuman MTB">Tidak Ditemukan Kuman MTB</option><option value="Kuman MTB Masih Sensitif Terhadap Rifampicimin">Kuman MTB Masih Sensitif Terhadap Rifampicimin</option><option value="Ditemukan Kuman Yang Resisten Terhadap Rifampicimin">Ditemukan Kuman Yang Resisten Terhadap Rifampicimin</option></select></div>
                    <div
                        class="col form-group row" style="padding:3px 15px;"><label class="col-form-label col-sm-4">Keterangan Klinik</label><select class="form-control col-sm-8 dis" id="fketklinik" name="ketklinik"><option value="" selected="">-</option><option value="Suspect TB">Suspect TB</option><option value="Suspect MDR">Suspect MDR</option></select></div>
                <div
                    class="col form-group row"><label class="col-form-label col-sm-4">Keterangan Tambahan</label><input class="form-control col-sm-8 dis" type="text" id="fkettambahantcm" name="kettambahantcm" style="height:50px;"></div>
                    </div>
                    </div>
        <div class="buttonsub">
            <button class="buttoncolor btn" type="submit">Simpan</button>
            <button class="bersih buttoncolor btn" type="button">Bersihkan</button>
        </div>
    </form>
</div>

<div class="tablediv">
     <div class="form-group pull-right">
            <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
<div class="table-responsive rounded">
<table class = "table table-striped table-hover results" >
     <!-- tampilkanberdasarkan bulan(mulai-hingga), tahun(prtahun), area(kabupaaten) -->
    <thead>
    <tr>
    <th>#</th>
     <th>RegGenExpert</th>
     <th>No. Rekam Medis</th>
     <th>Waktu Periksa</th>
     <!-- <th>Ruang</th>
     <th>Bahan Periksa</th> -->
     <!-- <th>Hasil</th> -->
     <!-- <th>Keterangan Hasil</th> -->
     <th>Keterangan Klinik</th>
     <th>Keterangan Tambahan</th>
     <th><span></span></th>
     <th><span></span></th>
    </tr>
    </thead>

    <?php
    $i=1;
    foreach($tcm as $row)
    {
        // <td>'.$row['hasildetect'].' '.$row['hasilresist'].'</td>
        //   <td>'.$row['ruang'].'</td>
        //   <td>'.$row['bahanperiksa'].'</td>
        // <td>'.$row['kethasil'].'</td>
        echo '
        <tbody class= "table-striped overflowbody">
        <tr>
        <td>'.$i.'</td>
        <td>'.$row['idreg'].'</td>
        <td>'.$row['noRm'].'</td>
        <td>'.$row['tglperiksa'].' '.$row['wktperiksa'].'</td>
        <td>'.$row['ketklinik'].'</td>
        <td>'.$row['kettambahan'].'</td>
      <td> 
        <button href=".forma" type="button" class="btn buttoncolor detiltcm" data-id="'.$row['idreg'].'">
        Detil
        </button>
        </td>
      <td> <a href= "tes_tcm/hapustcm/'.$row['idreg'].'" >
      Hapus
      </a></td>
     </tr>
     </tbody>
     ';
     $i++;
    }
    ?>

   </table>
   <</div>
</div>