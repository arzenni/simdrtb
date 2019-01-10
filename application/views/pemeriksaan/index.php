<div class="container">

    
    <button type="button" class="btn btn-primary modaltambahperiksa" data-toggle="modal" href="<?php echo base_url(); ?> pemeriksaan/tambahpemeriksaan" data-target="#modal-1">
                        Tambah Hasil Pemeriksaan
                        </button>
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
    