<div class="container">

    
    <button type="button" class="btn btn-primary modaltambahperiksa" data-toggle="modal" href="<?php echo base_url(); ?> pemeriksaan/tambahpemeriksaan" data-target="#modal-1">
                        Tambah Hasil Pemeriksaan
                        </button>

    <div id="sectionform" class="section forma">
        <h1 class="text-center" style="padding-top:10px;padding-bottom:35px;">Form Data Pengobatan</h1>
        <form id="form1" action="<?=base_url();?>pemeriksaan/tambahpemeriksaan" method="POST">
            
                <div class="form-row">
                    <div class="col">
                        <?php/// if(validation_errors()) : 
                            validation_errors(); 
                        /*endif;*/ ?> 
                        <div>
                        <input type="hidden" id="fidPeriksa" name="idPeriksa">
                            <div id= "rekam" class="col form-group row"><label class="col-form-label col-sm-4">No. Rekam Medis</label><input class="form-control col-sm-8 dis" type="text" id="fnorm" name="noRm"></div>
                            <div class="col form-group row"><label class="col-form-label col-sm-4">Tanggal Mulai Pengobatan</label><input class="form-control col-sm-8 dis" type="date" id="ftglmulai" name="tglmulai"></div>
                            <div class="col form-group row"><label class="col-form-label col-sm-4">Panduan OAT</label><select class="form-control col-sm-4 dis" id="fpanduanoat" name="panduanoat"><option value="" selected="">-</option><option value="FDC">FDC</option><option value="KOMBIPAK">KOMBIPAK</option><option value="Lepasan">Lepasan</option></select>
                                <input
                                    class="form-control col-sm-4 dis dis" type="text" id="fnoat" name="noat"></div>
                            <div class="col form-group row"><label class="col-form-label col-sm-4">Klasifikasi</label><select class="form-control col-sm-8 dis" id="fklasifikasi" name="klasifikasi"><option value="" selected="">-</option><option value="P">P</option><option value="EP">EP</option></select></div>
                            <div
                                class="col form-group row"><label class="col-form-label col-sm-4">Riwayat Kasus</label><select class="form-control col-sm-8 dis" id="friwayat" name="riwayat"><option value="" selected="">-</option><option value="Default" >Default</option><option value="Baru">Baru</option><option value="Kambuh">Kambuh</option><option value="Gagal">Gagal</option><option value="Pindah">Pindah</option></select></div>
                    </div>
                    <div style="padding:8px;">
                        <div class="col-form-label col-sm-5 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                            <div class="col form-group row"><label>Tes VCT</label></div>
                        </div>
                        <div class="border border-primary rounded-bottom border-top-0">
                            <div class="col form-group row"><label class="col-form-label col-sm-4" >Tempat</label><input class="form-control col-sm-8 dis" type="text" id="ftempatvct" name="tempatvct"></div>
                            <div class="col form-group row"><label class="col-form-label col-sm-4">Tanggal</label><input class="form-control col-sm-6 dis" type="date" id="ftglvct" name="tglvct"></div>
                            <div class="col form-group row"><label class="col-form-label col-sm-4 ">Hasil</label><select class="form-control col-sm-8 dis" id="fhasilvct" name="hasilvct"><option value="" selected="">-</option><option value="Reactive">Reactive</option><option value="Non Reactive">Non Reactive</option></select></div>
                        </div>
                    </div>
                    <div style="padding:3px 8px;">
                        <div class="col-form-label col-sm-7 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                            <div class="col form-group row"><label>Terapi dan Pengobatan</label></div>
                        </div>
                        <div class="border border-primary rounded-bottom border-top-0">
                            <div class="col form-group row"><label class="col-form-label col-sm-4">Terapi ART</label><select class="form-control col-sm-4 dis" id="fart" name="art"><option value="" selected="">-</option><option value="Ya">Ya</option><option value="Tidak">Tidak</option></select></div>
                            <div
                                class="col form-group row"><label class="col-form-label col-sm-4">DM</label><select class="form-control col-sm-4 dis" id="fdm" name="dm"><option value="" selected="">-</option><option value="Ya">Ya</option><option value="Tidak">Tidak</option></select></div>
                        <div
                            class="col form-group row"><label class="col-form-label col-sm-4">Pengobatan DM</label><select class="form-control col-sm-4 dis" id="fpengobatandm" name="pengobatandm"><option value="" selected="">-</option><option value="Ya">Ya</option><option value="Tidak">Tidak</option></select></div>
                </div>
            </div>
            <div style="padding:3px 8px;">
                <div class="col-form-label col-sm-5 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                    <div class="col form-group row"><label>Stock OAT</label></div>
                </div>
                <div class="border border-primary rounded-bottom border-top-0">
                    <div class="col form-group row"><label class="col-form-label col-sm-4">Tempat</label><select class="form-control col-sm-4 dis" id="fstokoat" name="stokoat"><option value="" selected="">-</option><option value="RS">RS</option><option value="PKM">PKM</option></select>
                        <input
                            class="form-control col-sm-4 dis" type="text" id="fntempatoat" name="ntempatoat"></div>
                </div>
            </div>
            <div style="padding:3px 8px;">
                <div class="col-form-label col-sm-6 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                    <div class="col form-group row"><label>Tempat Lanjut OAT</label></div>
                </div>
                <div class="border border-primary rounded-bottom border-top-0">
                    <div class="col form-group row"><label class="col-form-label col-sm-4"></label><select class="form-control col-sm-4 dis" id="flanjutoat" name="lanjutoat"><option value="" selected="">-</option><option value="RS">RS</option><option value="PKM">PKM</option></select>
                        <input
                            class="form-control col-sm-4 dis" type="text" id="fntempatloat" name="ntempatloat"></div>
                </div>
            </div>
    </div>
    <div class="col">
        <!-- <div class="col form-group row" style="margin-top:-9px;"><label class="col-form-label col-sm-4" style="margin-top:1px;">Pengobatan</label></div> -->
        <div class="col form-group row"><label class="col-form-label col-sm-4">Bulan Pengobatan</label><select class="form-control col-sm-8 dis" id="fblnpengobatan" name="blnpengobatan"><option value="" selected="">-</option><option value="Sebelum">Sebelum</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="Akhir Bulan Pengobatan">Akhir Bulan Pengobatan</option></select></div>
        <div
            class="border border-primary rounded-bottom border-top-0">
            <div class="col form-group row"><label class="col-form-label col-sm-4">Mikroskopis</label><select class="form-control col-sm-4 dis" id="fmikkonv" name="mikkonv"><option value="" selected="">-</option><option value="Konvresi">Konversi</option><option value="Non Konversi">Non Konversi</option></select>
                <input
                    class="form-control col-sm-4 dis" type="text" id="fnilaikonv" name="nilaikonv"></div>
            <div class="col form-group row"><label class="col-form-label col-sm-4">Tanggal Tes</label><input class="form-control col-sm-8 dis" type="date" id="fmiktgl" name="miktgl"></div>
    </div>
    <!-- <div style="margin:8px 0px;">
        <div class="col-form-label col-sm-4 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
            <div class="col form-group row"><label style="margin:4px;">TCM</label></div>
        </div>
        <div class="border border-primary rounded-bottom border-top-0">
            <div class="col form-group row"><label class="col-form-label col-sm-4">RegGenExpert</label><input class="form-control col-sm-8 dis" type="text" id="fgenxpert" name="genxpert"></div>
            <div class="col form-group row"><label class="col-form-label col-sm-4">Waktu Periksa</label><input class="form-control col-sm-5 dis" type="date" id="ftcmtgl" name="tcmtgl"><input class="form-control col-sm-3 dis" type="time" id="ftcmwkt" name="tcmwkt"></div>
            <div class="col form-group row"><label class="col-form-label col-sm-4">Ruang</label><select class="form-control col-sm-4 dis" id="fruang" name="ruang"><option value="" selected="">-</option><option value="Rawat Jalan">Rawat Jalan</option><option value="Rawat Inap">Rawat Inap</option><option value="RSF">RSF</option></select>
                <select
                    class="form-control col-sm-4 dis" id="frawat" name="rawat">
                    <option value="" selected="">-</option>
                    <?php foreach ($ruang as $r): ?>
                    <option value="<?= $r['ruang']; ?>"><?= $r['ruang'];?></option>
                    <?php endforeach; ?>
                    </select>
            </div>
            <div class="col form-group row"><label class="col-form-label col-sm-4">Bahan Periksa</label><input class="form-control col-sm-8 dis" type="text" id="fbhnperiksa" name="bhnperiksa"></div>
            <div class="col form-group row"><label class="col-form-label col-sm-4">Hasil</label><select class="form-control col-sm-8 dis" id="fdetect" name="detect"><option value="" selected="">-</option><option value="MTB Not Detected" >MTB Not Detected</option><option value="MTB Detected Very Low">MTB Detected Very Low</option><option value="MTB Detected Low">MTB Detected Low</option><option value="MTB Detected Medium">MTB Detected Medium</option><option value="MTB Detected High">MTB Detected High</option><option value="MTB Detected Very High">MTB Detected Very High</option></select>
                <label
                    class="col-form-label col-sm-4"></label><select class="form-control col-sm-8 dis" id="fresis" name="resis"><option value="" selected="">-</option><option value="Rifampicin Resistance Not Detected">Rifampicin Resistance Not Detected</option><option value="Rifampicin Resistance Detected">Rifampicin Resistance Detected</option></select></div>
            <div
                class="col form-group row"><label class="col-form-label col-sm-4">Keterangan Hasil</label><select class="form-control col-sm-8 dis" id="fkethasiltcm" name="kethasiltcm"><option value="" selected="">-</option><option value="Tidak Ditemukan Kuman MTB">Tidak Ditemukan Kuman MTB</option><option value="Kuman MTB Masih Sensitif Terhadap Rifampicimin">Kuman MTB Masih Sensitif Terhadap Rifampicimin</option><option value="Ditemukan Kuman Yang Resisten Terhadap Rifampicimin">Ditemukan Kuman Yang Resisten Terhadap Rifampicimin</option></select></div>
        <div
            class="col form-group row" style="padding:3px 15px;"><label class="col-form-label col-sm-4">Keterangan Klinik</label><select class="form-control col-sm-8 dis" id="fketklinik" nama="ketklinik"><option value="" selected="">-</option><option value="Suspend TB">Suspend TB</option><option value="Suspend MDR">Suspend MDR</option></select></div>
    <div>
        class="col form-group row"><label class="col-form-label col-sm-4">Keterangan Tambahan</label><input class="form-control col-sm-8 dis" type="text" id="fkettambahantcm" name="kettambahantcm" style="height:50px;"></div>
        </div>
        </div> -->
        <div style="margin:0px 0px; margin-top:6px;">
            <div class="border border-primary rounded-bottom border-top-0">
                <div class="col form-group row"><label class="col-form-label col-sm-4">Kultur</label><input class="form-control col-sm-8 dis" type="text" id="fkultur" name="kultur"></div>
            </div>
        </div>
        <div style="margin:0px 0px; margin-top:6px;">
            <div class="border border-primary rounded-bottom border-top-0">
                <div class="col form-group row"><label class="col-form-label col-sm-4">Foto Thoraks</label><input class="form-control col-sm-8 dis" type="date" id="fthoraks" name="thoraks"></div>
            </div>
        </div>
        <div style="margin:0px 0px;margin-top:6px;">
            <div class="col-form-label col-sm-6 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                <div class="col form-group row dis"><label>Hasil Pengobatan</label></div>
            </div>
            <div class="border border-primary rounded-bottom border-top-0">
                <div class="col form-group row"><label class="col-form-label col-sm-4">Hasil</label><select class="form-control col-sm-8 dis" id="fhasilpengobatan" name="hasilpengobatan"><option value="" selected="">-</option><option value="Default">Default</option><option value="Sembuh Pengobatan Lengkap">Sembuh Pengobatan Lengkap</option><option value="Sembuh">Sembuh</option><option value="Pengobatan Lengkap">Pengobatan Lengkap</option><option value="Gagal">Gagal</option><option value="Pindah">Pindah</option><option value="Meninggal">Meninggal</option></select></div>
                <div
                    class="col form-group row"><label class="col-form-label col-sm-4">Tanggal Berhenti</label><input class="form-control col-sm-6 dis" type="date" id="ftglhenti" name="tglhenti"></div>
        </div>
        </div>
        <div style="margin:0px 0px;margin-top:6px;">
            <div class="col-form-label col-sm-7 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                <div class="col form-group row"><label>Keterangan Tambahan</label></div>
            </div>
            <div class="border border-primary rounded-bottom border-top-0">
                <div class="col form-group row"><input class="form-control col-sm-12 dis" type="text" id="fkettambahan" style="margin-left:12px;height:40px;" name="kettambahan"></div>
            </div>
        </div>
        </div>
        </div>
        <button class="btn btn-primary kiri hid" type="button" >Bersihkan</button>
        <button id="tubah" class="btn btn-primary kiri" type="button">Ubah</button>
        <button class="btn btn-primary kanan" type="submit" >Tambah Data</button>
        </div>
        </form>
        </div>
    </div>
 <!-- <div> TABEL -->
        <div class="form-group pull-right">
            <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
    <div class= "table-responsive">
        <span class="counter pull-right"></span>
        <table class="table table-striped table-hover results">
            <thead>
                <tr>
                    <th scope = "colgroup" id="tno">#</th>
                    <th scope = "colgroup" id="tnrm">No. Rekam Medis</th>
                    <th scope = "colgroup" id="tnama">Nama</th>
                    <th scope = "colgroup" id="ttgll">Tanggal Lahir</th>
                    <th scope = "colgroup" id="tglm">Tanggal Mulai</th>

                    <th scope = "colgroup" id="tbulan">Bulan Pengobatan</th>
                    <th scope = "colgroup" id="tcatat">Pencatatan</th>
                    <th scope = "colgroup"></th>
                </tr>
            </thead>
            <tbody>
                <?php $i= 1; foreach($pemeriksaan as $p) :?>
                <tr>
                    <td>
                        <?= $i++;?>
                        
                    </td>
                    <td>
                        <?= $p['noRm'];?>
                    </td>
                    <td>
                        <?= $p['nama'];?>
                    </td>
                    <td>
                        <?= $p['tglahir'];?>
                    </td>
                    <td>
                        <?= $p['tglmulai'];?>
                    </td>

                    <td> 
                        <?= $p['blnpengobatan'];?>
                    </td>
                    <td> 
                        <?= $p['wktpencatatan'];?>
                    </td>
                    <td> 
                            <button id="linkdetil" href=".forma" type="button" class="btn btn-primary linkdetil" data-id="<?= $p['idPeriksa'];?>">
                            Detil
                            </button>
                    </td>
                    <td>
                        <a href= "<?= base_url();?>pemeriksaan/hapus/<?= $p['idPeriksa'];?>" >
                        Hapus
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody> 
        </table>

    </div>
  <!-- </div> TABEL -->
    </section>                            


    <!--xx ketika tombol "detil" ditabel diklik, maka data masuk ke form dgn atr disable
    1. muncul tombol "aktifkan perubahan" 
     2. ketika tombol "aktifkan perubahan" di form diklik, maka atr form menjadi enable
     3. tombol "ubah" aktif untuk menyimpan perubahan

     xx ketika tombol "hapus" di tabel diklik, maka data masuk ke form dgn atr enable
     1. 

     xx tombol clear untuk membersihkan data dan mengembalikan form serta tombol ke fungsi tambah

clear  aktifkanubah  tambah/ubah/hapus