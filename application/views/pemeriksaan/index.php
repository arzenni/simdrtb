<div class="container">

    
    <button type="button" class="btn btn-primary modaltambahperiksa" data-toggle="modal" href="<?php echo base_url(); ?> pemeriksaan/tambahpemeriksaan" data-target="#modal-1">
                        Tambah Hasil Pemeriksaan
                        </button>

    <div class="section">
        <h1 class="text-center" style="padding-top:10px;padding-bottom:35px;">Form Data Pengobatan</h1>
        <form action="pemeriksaan/tambahpemeriksaan" method="POST">
            <div>
                <div class="form-row">
                    <div class="col">
                        <div>
                            <div class="col form-group row"><label class="col-form-label col-sm-4">No. Rekam Medis</label><input class="form-control col-sm-8" type="text" id="fnorm" name="noRm"></div>
                            <div class="col form-group row"><label class="col-form-label col-sm-4">Tanggal Mulai Pengobatan</label><input class="form-control col-sm-8" type="date" id="ftglmulai" name="tglmulai"></div>
                            <div class="col form-group row"><label class="col-form-label col-sm-4">Panduan OAT</label><select class="form-control col-sm-4" id="fpanduanoat" name="panduanoat"><option value="" selected="">-</option><option value="FDC">FDC</option><option value="KOMBIPAK">KOMBIPAK</option><option value="Lepasan">Lepasan</option></select>
                                <input
                                    class="form-control col-sm-4" type="text" id="fnoat" name="noat"></div>
                            <div class="col form-group row"><label class="col-form-label col-sm-4">Klasifikasi</label><select class="form-control col-sm-8" id="fklasifikasi" name="klasifikasi"><option value="" selected="">-</option><option value="P">P</option><option value="EP">EP</option></select></div>
                            <div
                                class="col form-group row"><label class="col-form-label col-sm-4">Riwayat Kasus</label><select class="form-control col-sm-8" id="friwayat" name="riwayat"><option value="Default" selected="">Default</option><option value="Baru">Baru</option><option value="Kambuh">Kambuh</option><option value="Gagal">Gagal</option><option value="Pindah">Pindah</option></select></div>
                    </div>
                    <div style="padding:8px;">
                        <div class="col-form-label col-sm-5 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                            <div class="col form-group row"><label>Tes VCT</label></div>
                        </div>
                        <div class="border border-primary rounded-bottom border-top-0">
                            <div class="col form-group row"><label class="col-form-label col-sm-4">Tempat</label><input class="form-control col-sm-8" type="text" id="ftempatvct" name="tempatvct"></div>
                            <div class="col form-group row"><label class="col-form-label col-sm-4">Tanggal</label><input class="form-control col-sm-6" type="date" id="ftglvct" name="tglvct"></div>
                            <div class="col form-group row"><label class="col-form-label col-sm-4">Hasil</label><select class="form-control col-sm-8" id="fhasilvct" name="hasilvct"><option value="" selected="">-</option><option value="Reactive">Reactive</option><option value="Non Reactive">Non Reactive</option></select></div>
                        </div>
                    </div>
                    <div style="padding:3px 8px;">
                        <div class="col-form-label col-sm-7 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                            <div class="col form-group row"><label>Terapi dan Pengobatan</label></div>
                        </div>
                        <div class="border border-primary rounded-bottom border-top-0">
                            <div class="col form-group row"><label class="col-form-label col-sm-4">Terapi ART</label><select class="form-control col-sm-4" id="fart" name="art"><option value="" selected="">-</option><option value="Ya">Ya</option><option value="Tidak">Tidak</option></select></div>
                            <div
                                class="col form-group row"><label class="col-form-label col-sm-4">DM</label><select class="form-control col-sm-4" id="fdm" name="dm"><option value="" selected="">-</option><option value="Ya">Ya</option><option value="Tidak">Tidak</option></select></div>
                        <div
                            class="col form-group row"><label class="col-form-label col-sm-4">Pengobatan DM</label><select class="form-control col-sm-4" id="fpengobatandm" name="pengobatandm"><option value="" selected="">-</option><option value="Ya">Ya</option><option value="Tidak">Tidak</option></select></div>
                </div>
            </div>
            <div style="padding:3px 8px;">
                <div class="col-form-label col-sm-5 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                    <div class="col form-group row"><label>Stock OAT</label></div>
                </div>
                <div class="border border-primary rounded-bottom border-top-0">
                    <div class="col form-group row"><label class="col-form-label col-sm-4">Tempat</label><select class="form-control col-sm-4" id="fstokoat" name="stokoat"><option value="" selected="">-</option><option value="RS">RS</option><option value="PKM">PKM</option></select>
                        <input
                            class="form-control col-sm-4" type="text" id="fntempatoat" name="fntempatoat"></div>
                </div>
            </div>
            <div style="padding:3px 8px;">
                <div class="col-form-label col-sm-6 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                    <div class="col form-group row"><label>Tempat Lanjut OAT</label></div>
                </div>
                <div class="border border-primary rounded-bottom border-top-0">
                    <div class="col form-group row"><label class="col-form-label col-sm-4"></label><select class="form-control col-sm-4" id="flanjutoat" name="lanjutoat"><option value="" selected="">-</option><option value="RS">RS</option><option value="PKM">PKM</option></select>
                        <input
                            class="form-control col-sm-4" type="text" id="fntempatoat" name="ntempatoat"></div>
                </div>
            </div>
            <div style="padding:3px 8px;">
                <div class="col-form-label col-sm-6 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                    <div class="col form-group row"><label>Tes Cepat</label></div>
                </div>
                <div class="border border-primary rounded-bottom border-top-0">
                    <div class="col form-group row"><label class="col-form-label col-sm-4">Tempat</label><select class="form-control col-sm-4" id="ftcepat" name="tcepat"><option value="" selected="">-</option><option value="RS">RS</option><option value="PKM">PKM</option></optgroup></select>
                        <input
                            class="form-control col-sm-4" type="text" id="fntcepat" name="fntcepat"></div>
                    <div class="col form-group row"><label class="col-form-label col-sm-4">Kultur</label><select class="form-control col-sm-4" id="fkultur" name="kultur"><option value="" selected="">-</option><option value="Kultur 1">Kultur 1</option><option value="Kultur 2">Kultur 2</option></optgroup></select>
                        <input
                            class="form-control col-sm-4" type="text" id="fnkultur" name="nkultur"></div>
                    <div class="col form-group row"><label class="col-form-label col-sm-4">Tanggal</label><input class="form-control col-sm-8" type="date" id="ftgltcepat" name="ftgltcepat"></div>
                </div>
            </div>
    </div>
    <div class="col">
        <div class="col form-group row" style="margin-top:-9px;"><label class="col-form-label col-sm-4" style="margin-top:1px;">Pengobatan</label></div>
        <div class="col form-group row"><label class="col-form-label col-sm-4">Bulan Pengobatan</label><select class="form-control col-sm-8" id="fblnpengobatan" name="blnpengobatan"><option value="Sebelum" selected="">Sebelum</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="Akhir Bulan Pengobatan">Akhir Bulan Pengobatan</option></select></div>
        <div
            class="border border-primary rounded-bottom border-top-0">
            <div class="col form-group row"><label class="col-form-label col-sm-4">Mikroskopis</label><select class="form-control col-sm-4" id="fmikkonv" name="mikkonv"><option value="" selected="">-</option><option value="Konvresi">Konversi</option><option value="Non Konversi">Non Konversi</option></select>
                <input
                    class="form-control col-sm-4" type="text" id="fnilaikonv" name="nilaikonv"></div>
            <div class="col form-group row"><label class="col-form-label col-sm-4">Tanggal Tes</label><input class="form-control col-sm-8" type="date" id="fmiktgl" name="miktgl"></div>
    </div>
    <div style="margin:8px 0px;">
        <div class="col-form-label col-sm-4 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
            <div class="col form-group row"><label style="margin:4px;">TCM</label></div>
        </div>
        <div class="border border-primary rounded-bottom border-top-0">
            <div class="col form-group row"><label class="col-form-label col-sm-4">RegGenExpert</label><input class="form-control col-sm-8" type="text" id="fgenxpert" name="genxpert"></div>
            <div class="col form-group row"><label class="col-form-label col-sm-4">Waktu Periksa</label><input class="form-control col-sm-5" type="date" id="ftcmtgl" name="tcmtgl"><input class="form-control col-sm-3" type="time" id="ftcmwkt" name="tcmwkt"></div>
            <div class="col form-group row"><label class="col-form-label col-sm-4">Ruang</label><select class="form-control col-sm-4" id="fruang" name="ruang"><option value="" selected="">-</option><option value="Rawat Jalan">Rawat Jalan</option><option value="Rawat Inap">Rawat Inap</option><option value="RSF">RSF</option></select>
                <select
                    class="form-control col-sm-4" id="frawat" name="rawat">
                    <option value="" selected="">-</option>
                    <option value="Paru DBTS">Paru DBTS</option>
                    <option value="Dalam">Dalam</option>
                    </select>
            </div>
            <div class="col form-group row"><label class="col-form-label col-sm-4">Bahan Periksa</label><input class="form-control col-sm-8" type="text" id="fbhnperiksa" name="bhnperiksa"></div>
            <div class="col form-group row"><label class="col-form-label col-sm-4">Hasil</label><select class="form-control col-sm-8" id="fdetect" name="detect"><option value="MTB Not Detected" selected="">MTB Not Detected</option><option value="MTB Detected Very Low">MTB Detected Very Low</option><option value="MTB Detected Low">MTB Detected Low</option><option value="MTB Detected Medium">MTB Detected Medium</option><option value="MTB Detected High">MTB Detected High</option><option value="MTB Detected Very High">MTB Detected Very High</option></select>
                <label
                    class="col-form-label col-sm-4"></label><select class="form-control col-sm-8" id="fresis" name="resis"><option value="" selected="">-</option><option value="Rifampicin Resistance Not Detected">Rifampicin Resistance Not Detected</option><option value="Rifampicin Resistance Detected">Rifampicin Resistance Detected</option></select></div>
            <div
                class="col form-group row"><label class="col-form-label col-sm-4">Keterangan Hasil</label><select class="form-control col-sm-8" id="fkethasiltcm" name="kethasiltcm"><option value="Tidak Ditemukan Kuman MTB" selected="">Tidak Ditemukan Kuman MTB</option><option value="Kuman MTB Masih Sensitif Terhadap Rifampicimin">Kuman MTB Masih Sensitif Terhadap Rifampicimin</option><option value="Ditemukan Kuman Yang Resisten Terhadap Rifampicimin">Ditemukan Kuman Yang Resisten Terhadap Rifampicimin</option></select></div>
        <div
            class="col form-group row" style="padding:3px 15px;"><label class="col-form-label col-sm-4">Keterangan Klinik</label><select class="form-control col-sm-8" id="fketklinik" nama="ketklinik"><option value="" selected="">-</option><option value="Suspend TB">Suspend TB</option><option value="Suspend MDR">Suspend MDR</option></select></div>
    <div
        class="col form-group row"><label class="col-form-label col-sm-4">Keterangan Tambahan</label><input class="form-control col-sm-8" type="text" id="fkettambahantcm" name="kettambahantcm" style="height:50px;"></div>
        </div>
        </div>
        <div style="margin:0px 0px;">
            <div class="border border-primary rounded-bottom border-top-0">
                <div class="col form-group row"><label class="col-form-label col-sm-4">Foto Thoraks</label><input class="form-control col-sm-8" type="date" id="fthoraks" name="thoraks"></div>
            </div>
        </div>
        <div style="margin:0px 0px;margin-top:6px;">
            <div class="col-form-label col-sm-6 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                <div class="col form-group row"><label>Hasil Pengobatan</label></div>
            </div>
            <div class="border border-primary rounded-bottom border-top-0">
                <div class="col form-group row"><label class="col-form-label col-sm-4">Hasil</label><select class="form-control col-sm-8" id="fhasilpengobatan" name="hasilpengobatan"><option value="Default" selected="">Default</option><option value="Sembuh Pengobatan Lengkap">Sembuh Pengobatan Lengkap</option><option value="Sembuh">Sembuh</option><option value="Pengobatan Lengkap">Pengobatan Lengkap</option><option value="Gagal">Gagal</option><option value="Pindah">Pindah</option><option value="Meninggal">Meninggal</option></select></div>
                <div
                    class="col form-group row"><label class="col-form-label col-sm-4">Tanggal Berhenti</label><input class="form-control col-sm-6" type="date" id="ftglhenti" name="tglhenti"></div>
        </div>
        </div>
        <div style="margin:0px 0px;margin-top:6px;">
            <div class="col-form-label col-sm-7 border-bottom-0 border border-primary rounded-top border-right-0" style="height:40px;padding:2px 16px;">
                <div class="col form-group row"><label>Keterangan Tambahan</label></div>
            </div>
            <div class="border border-primary rounded-bottom border-top-0">
                <div class="col form-group row"><input class="form-control col-sm-12" type="text" id="fkettambahan" style="margin-left:12px;height:40px;" name="kettambahan"></div>
            </div>
        </div>
        </div>
        </div>
        <button class="btn btn-primary" type="submit" >Save</button>
        </div>
        </form>
        </div>
                        
    <div class= "table-responsive">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>No. Rekam Medis</th>
                    <th></th>
                    <th>Jenis Kelamin</th>
                    <th>Ibu Kandung</th>
                    <th>Kecamatan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>
                        
                    </td>
                    <td>
                     
                    </td>
                    <td>
                    
                    </td>
                    <td>
                    
                    </td>
                    <td>
                     
                    </td>
                    <td> 
                     
                    </td>
                    <td> 
                            <button type="button" class="btn btn-primary modaltampil" data-toggle="modal" href="<?php echo base_url(); ?> pasien" data-id="<?= $psn['noRm']; ?>" data-target="#modaldetil">
                            Detil
                            </button>
                    </td>
                    <td><button type="button" class="btn btn-primary modaledit" data-toggle="modal" data-id="<?= $psn['noRm']; ?>" data-target="#modal-1">
                    edit
                    </button></td>
                </tr>
           
            </tbody>
        </table>

    </div>


    <!--mdal tambahedit -->
    <div id="modal">
         <div class="modal fade overflow-init" role="dialog" tabindex="-1" id="modal-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content overflow-init">
                    <form action="" method="POST">
                    <div class="modal-header" style="background-color:#83eded;">
                        <h4 class="modal-title">Data Pasien</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                        <div class="modal-body overflow-body">
                            
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">No. Rekam Medis&nbsp;</label><input id="inoRm" class="form-control col-sm-8" type="number" name="noRm"></div>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">No. Periksa&nbsp;</label><input id="iidPeriksa" class="form-control col-sm-8" type="number" name="idPeriksa"></div>

                                <!-- TCM -->
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">RegGenxpert&nbsp;</label><input id="iidreg" class="form-control col-sm-8" type="text" name="idreg"></div>
                                <!--
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">Hasil</label><input id="ihasiltcm" class="form-control col-sm-8" type="text" name="hasiltcm"></div>
                                -->
                                <div class="col row"><label class="col-form-label col-sm-3 pt-0" for="ihasiltcm">Hasil</label>
                                    <div class="col-sm-8 form-group">
                                        <select class="form-control col-sm-8" id="ihasiltcm" name="hasiltcm">
                                            <optgroup>
                                            <option value="detected" selected>detected</option>
                                            
                                            <option value="detected resis" selected>detected resis</option>

                                            <option value="not detected">not detected</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">Tanggal Tes</label><input id="itgltcm" class="form-control col-sm-8" type="date" name="tgltcm"></div>
                                <!-- endtcm-->
                                <!-- Mikroskopis -->
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">No. Tes&nbsp;</label><input id="iidMk" class="form-control col-sm-8" type="text" name="idMk"></div>
                                <!--
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">Hasil</label><input id="ihasiltcm" class="form-control col-sm-8" type="text" name="hasiltcm"></div>
                                -->
                                <div class="col row"><label class="col-form-label col-sm-3 pt-0" for="ihasilMk">Hasil</label>
                                    <div class="col-sm-8 form-group">
                                        <select class="form-control col-sm-8" id="ihasilMk" name="hasilMk">
                                            <optgroup>
                                            <option value="detected" selected>detected</option>
                                            
                                            <option value="detected resis" selected>Detected Resis</option>

                                            <option value="not detected">Not detected</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">Tanggal Tes</label><input id="itglMk" class="form-control col-sm-8" type="date" name="tglMk"></div>
                                <!-- endmikroskopis -->

                                <div class="col form-group row"><label class="col-sm-3 col-form-label">Tanggal Rontgen</label><input id="itglront" class="form-control col-sm-8" type="date" name="tglront"></div>
                                
                                <div class="col form-group row"><label class="col-form-label col-sm-3">Hasil</label></div>
                                <div class="col form-group row"><label class="col-form-label col-sm-3">Diagnosa</label><input id="idiagnosa" class="form-control col-sm-8" type="text" name="diagnosa"></div>
                                
                                    
                        </div>
                    <div class="modal-footer" style="background-color:#83eded;">
                    <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit" style="background-color:rgb(247,247,247);">Save</button>
                    </div>
                            </form>
                 </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Detil-->
    <div class="modal fade" role="dialog" tabindex="-1" id="modaldetil">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Data Pasien</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" id="nama">Nama</h4>
                            <h6 class="text-muted card-subtitle mb-2">No. Rekam Medis_<span id="noRm">Label</span></h6>
                            <div><label class="col-sm-4">NIK</label><label id="nik">Label</label></div>
                            <div><label class="col-sm-4">Jenis Kelamin</label><label id="jnsK">Label</label></div>
                            <div><label class="col-sm-4">Tanggal Lahir</label><label id="tglahir">Label</label></div>
                            <div><label class="col-sm-4">Nama Ibu</label><label id="ibu">Label</label></div>
                            <div><label class="col-sm-4">Dusun</label><label id="dusun">Label</label></div>
                            <div><label class="col-sm-4">Kelurahan</label><label id="kelurahan">Label</label></div>
                            <div><label class="col-sm-3">RT/RW</label><label id="rt">Label</label><span>/</span><label id="rw">Label</label></div>
                            <div><label class="col-sm-4">Kecamatan</label><label id="kecamatan">Label</label></div>
                            <div><label class="col-sm-4">Kota</label><label id="kota">Label</label></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </div>
        </div>
    </div>
    </div>

</div>
    