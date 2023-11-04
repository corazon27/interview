<form action="<?= base_url('profile/edit') ?>" method="post">
    <input type="hidden" name="id_profile" value="<?= $detail['id_profile']; ?>">
    <div class="form-group">
        <label for="name">Name*</label>
        <input id="name" class="form-control" type="text" name="nama" placeholder="Masukkan Nama"
            value="<?= $detail['nama']; ?>" />
    </div>

    <div class="form-group">
        <label for="noHP">No HP*</label>
        <input id="noHP" class="form-control" type="text" name="no_hp" placeholder="Masukkan No HP"
            value="<?= $detail['no_hp']; ?>" />
    </div>


    <div class="form-group">
        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki"
            <?php if ($detail['jenis_kelamin'] === 'Laki-Laki') echo 'checked'; ?>>
        <label for="laki-laki">Laki-Laki</label><br>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan"
            <?php if ($detail['jenis_kelamin'] === 'Perempuan') echo 'checked'; ?>>
        <label for="perempuan">Perempuan</label><br>
    </div>

    <div class="form-group">
        <label for="alamat">Alamat*</label>
        <input id="alamat" class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat"
            value="<?= $detail['alamat']; ?>" />
    </div>

    <input class="btn btn-success" type="submit" name="btn" value="Save" />
</form>