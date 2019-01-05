
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
                        <button type="button" class="btn btn-primary mdetil" data-toggle="modal" href="<?php echo base_url(); ?> pasien/detilpasien" data-target="#detil">
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

    <!-- Modal -->
    <div class="modal fade" id="detil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            detil <?= $judul;?>

                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="NIK">NIK</label>
                            <input type="number" class="form-control" id="nik" placeholder="Nomor Induk Keluarga">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="norm">No. Rekam Medis</label>
                            <input type="number" class="form-control" id="norm" placeholder="Nomor Rekam Medis">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama">
                    </div>
                        <label for="alamat">Alamat</label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="alamat">RT</label>
                            <input type="number" class="form-control" id="rt" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="norm">RW</label>
                            <input type="number" class="form-control" id="rw" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                

            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
      </div>
    </div>
        <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           edit
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
