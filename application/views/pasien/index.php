
<div class="container rounded">
<?php if( $this->session->flashdata('pasien')) :  ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('pasien');?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php elseif( $this->session->flashdata('errpasien')):?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('errpasien');?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif;?>
    <button type="button" class="btn modaltambah buttoncolor" data-toggle="modal" href="<?php echo base_url(); ?> pasien/tambahpasien" data-target="#modal-1">
                        Tambah Pasien
                        </button>
</div>
<div class="containerpasien tablediv rounded">

    
    <div class="form-group pull-right">
            <input type="text" class="search form-control" placeholder="What you looking for?">
    </div>
    <div class= "table-responsive">
        <table class="table table-striped results">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIK</th>
                    <th>No. Rekam Medis</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Kecamatan</th>
                    <th><span></span></th>
                    <th><span></span></th>
                    <th><span></span></th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($pasien as $psn) :?>
                <tr>
                    <td>
                        <?php echo $i;?>
                    </td>
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
                        <?= $psn['tgllahir'];?>
                    </td>
                    <td>
                        <?= $psn['jnsK'];?>
                    </td>
                    <td> 
                        <?= $psn['kecamatan'];?>
                    </td>
                    <td> 
                        <button type="button" class="btn buttoncolor modaltampil" data-toggle="modal"  data-id="<?= $psn['noRm']; ?>" data-target="#modaldetil">
                        Detil
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn buttoncolor modaledit" data-toggle="modal" data-id="<?= $psn['noRm']; ?>" data-target="#modal-1">
                        edit
                        </button>
                    </td>
                    <td>
                        <a href= "<?= site_url();?>pasien/hapus/<?= $psn['noRm'];?>" >
                        Hapus
                        </a>
                    </td>
                </tr>
                <?php $i++; endforeach; ?>
            </tbody>
        </table>

    </div>


    <!--mdal tambahedit -->
    <div id="modal">
         <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Data Pasien</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                        <div class="modal-body overflow-body">
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">No. Rekam Medis&nbsp;</label><input id="inoRm" class="form-control col-sm-8" type="number" name="noRm"></div>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">Nama&nbsp;</label><input id="inama" class="form-control col-sm-8" type="text" name="nama"></div>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">NIK</label><input id="inik" class="form-control col-sm-8" type="number" name="nik"></div>
                                <div class="col row"><label class="col-form-label col-sm-3 pt-0" for="ijnsK">Jenis Kelamin</label>
                                    <div class="col-sm-8 form-group">
                                        <select class="form-control col-sm-8" id="ijnsK" name="jnsK">
                                            <optgroup>
                                            <option value="Laki-Laki" selected>Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">Tanggal Lahir</label><input id="itglahir" class="form-control col-sm-8" type="date" name="tglahir"></div>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">Tanggal Registrasi</label><input id="itgregis" class="form-control col-sm-8" type="date" name="tgregis"></div>
                                <div class="col form-group row"><label class="col-sm-3 col-form-label">Ibu Kandung</label><input id="iibu" class="form-control col-sm-8" type="text" name="ibu"></div>
                                <div class="col form-group row"><label class="col-form-label col-sm-3">Alamat</label></div>
                                <div class="col form-group row"><label class="col-form-label col-sm-3">Dusun</label><input id="idsn" class="form-control col-sm-8" type="text" name="dsn"></div>
                                <div class="col form-group row"><label class="col-form-label col-sm-3">Kelurahan</label><input id="ikelurahan" class="form-control col-sm-8" type="text" name="kelurahan"></div>
                                <div class="col form-group row">
                                <label class="col-form-label col-sm-1">RT</label>
                                <input id="irt" class="form-control col-sm-2" type="number" inputmode="numeric" name="rt">
                                <label class="col-form-label col-sm-1 kanan">RW</label>
                                <input id="irw" class="form-control col-sm-2" type="number" inputmode="numeric" name="rw">
                                </div>
                                <div class="col form-group row"><label class="col-form-label col-sm-3">Kecamatan</label><input id="ikecamatan" class="form-control col-sm-8" type="text" name="kecamatan"></div>
                                <div class="col form-group row"><label class="col-form-label col-sm-3">Kabupaten</label><input id="ikota" class="form-control col-sm-8" type="text" name="kota"></div>    
                        </div>
                    <div class="modal-footer">
                    <button class="btn buttoncolor" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn buttoncolor" type="submit">Save</button>
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
                            <div><label class="col-sm-4">Tanggal Registrasi</label><label id="tgregis">Label</label></div>
                            <div><label class="col-sm-4">Ibu Kandung</label><label id="ibu">Label</label></div>
                            <div><label class="col-sm-4">Dusun</label><label id="dusun">Label</label></div>
                            <div><label class="col-sm-4">Kelurahan</label><label id="kelurahan">Label</label></div>
                            <div><label class="col-sm-3">RT/RW</label><label id="rt">Label</label><span>/</span><label id="rw">Label</label></div>
                            <div><label class="col-sm-4">Kecamatan</label><label id="kecamatan">Label</label></div>
                            <div><label class="col-sm-4">Kota</label><label id="kota">Label</label></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn buttoncolor" type="button" data-dismiss="modal">Tutup</button></div>
            </div>
        </div>
    </div>
    </div>

</div>
    