<div class="container">

<form action="<?= base_url();?>ruang/tambahruang" method="post">
    <div>
    <input type="hidden" name="id">
    <label for="ruang">Ruang</label>
    <input id="ruang" name="ruang" type="text">
    </div>
    <button class="btn buttoncolor" type="submit">Tambahkan</button>
</form>

</div>
<div class= "container">
    <table class="table table-striped table-hover">
        <thead>
            <tr> 
                <th> No. </th> 
                <th> Ruang </th> 
                <th> <span></span> </th> 
            </tr>
        </thead>
        <tbody>
        <?php $i= 1; foreach ($ruang as $ruang):?>
            <tr> <td> <?= $i++;?> </td>
            <td> <?= $ruang['ruang']?> </td> 
            <td>
            <a href= "<?= base_url();?>ruang/hapusruang/<?= $ruang['id'];?>" >
                        Hapus
                        </a>
            </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>