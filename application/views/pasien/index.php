
<?php echo var_dump($pasien); ?>
    <h1>Pasien <?php echo $judul; ?></h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>NIK</th>
                <th>No. Rekam Medis</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Ibu Kandung</th>
                <th>Kecamatan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pasien as $psn) :?>
            <tr>
                <td>
                    <?php echo $psn['nik'];?>
                </td>
                <td>
                    <?php echo $psn['noRm'];?>
                </td>
                <td>
                    <?= $psn['nama'];?>
                </td>
                <td>
                    <?= $psn['jnsK'];?>
                </td>
                <td>
                    <?= $psn['ibu'];?>
                </td>
                <td> 
                    <?= $psn['kecamatan'];?>
                </td>
                <td> 
                        <button type="button" class="btn btn-primary modaltampil" data-toggle="modal" href="<?php echo base_url(); ?> pasien" data-id="<?= $psn['noRm']; ?>" data-target="#modaldetil">
                        Detil
                        </button>
                </td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">
                edit
                </button></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <!--mdal tambahedit -->
    <div id="modal">
         <div class="modal fade overflow-init" role="dialog" tabindex="-1" id="modal-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content overflow-init">
                    <div class="modal-header" style="background-color:#83eded;">
                        <h4 class="modal-title">Data Pasien</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                       <div class="modal-body overflow-body">
                            <form>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">No. Rekam Medis&nbsp;</label><input class="form-control col-sm-8" type="text"></div>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">Nama&nbsp;</label><input class="form-control col-sm-8" type="text"></div>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">NIK</label><input class="form-control col-sm-8" type="numeric" inputmode="numeric"></div>
                                <div class="col row"><label class="col-form-label col-sm-3 pt-0">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <div class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="radio-stacked"><label class="custom-control-label">Perempuan</label></div>
                                        <div class="custom-control custom-radio"><input type="radio" class="custom-control-input"><label class="custom-control-label">Laki-Laki</label></div>
                                    </div>
                                </div>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">Tanggal Lahir</label><input class="form-control col-sm-8" type="text"></div>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">Nama Ibu</label><input class="form-control col-sm-8" type="text"></div>
                                <div class="col form-group row"><label class="col-form-label col-sm-3">Alamat</label></div>
                                <div class="col form-group row"><label class="col-form-label col-sm-3">Dusun</label><input class="form-control col-sm-8" type="text"></div>
                                <div class="col form-group row"><label class="col-form-label col-sm-3">Kelurahan</label><input class="form-control rm" type="text"></div>
                                <div class="col form-group row"><label class="col-form-label col-sm-1">RT</label><input class="form-control col-sm-2" type="number" inputmode="numeric"><label class="col-form-label col-sm-1 kanan">RW</label><input class="form-control col-sm-2" type="numeric"
                                        inputmode="numeric"></div>
                                <div class="col form-group row"><label class="col-form-label col-sm-3">Kecamatan</label><input class="form-control col-sm-8" type="text"></div>
                            </form>
                        </div>
                    <div class="modal-footer" style="background-color:#83eded;"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button" style="background-color:rgb(247,247,247);">Save</button></div>
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
                            <h6 class="text-muted card-subtitle mb-2">No. Rekam Medis&nbsp;<label id="noRm">Label</label>&nbsp;</h6>
                            <div><label class="col-sm-4">NIK</label><label id="nik">Label</label></div>
                            <div><label class="col-sm-4">Jenis Kelamin</label><label id="jnsk">Label</label></div>
                            <div><label class="col-sm-4">Tanggal Lahir</label><label id="tglahir">Label</label></div>
                            <div><label class="col-sm-4">Nama Ibu</label><label id="ibu">Label</label></div>
                            <div><label class="col-sm-4">Dusun</label><label id="dusun">Label</label></div>
                            <div><label class="col-sm-4">Kelurahan</label><label id="kelurahan">Label</label></div>
                            <div><label class="col-sm-3">RT/RW</label><label id="rt">Label</label><span>/</span><label id="rw">Label</label></div>
                            <div><label class="col-sm-4">Kecamatan</label><label id="kecamatan">Label</label></div>
                            <div><label class="col-sm-4">Kabupaten</label><label id="kabupaten">Label</label></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
            </div>
        </div>
    </div>

    </div>