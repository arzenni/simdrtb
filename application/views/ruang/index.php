<div class="container">

<form action="<?= base_url();?>ruang/tambahruang" method="post">
    <div>
    <input type="hidden" name="id">
    <label for="ruang">Ruang</label>
    <input id="ruang" name="ruang" type="text">
    </div>
    <button type="submit">Tambahkan</button>
</form>

</div>
<div class= "container">
    <table>
        <thead>
            <tr> <th> No. </th> <th> Ruang </th> </tr>
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