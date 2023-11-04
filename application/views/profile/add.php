<form action="<?= base_url('profile/add') ?>" method="post">
    <div class="form-group">
        <label for="name">Name*</label>
        <input id="name" class="form-control" type="text" name="nama" placeholder="Masukkan Nama" />
    </div>

    <div class="form-group">
        <label for="noHP">No HP*</label>
        <input id="noHP" class="form-control" type="text" name="no_hp" placeholder="Masukkan No HP" />
    </div>


    <div class="form-group">
        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki">
        <label for="laki-laki">Laki-Laki</label><br>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
        <label for="perempuan">Perempuan</label><br>
    </div>

    <div class="form-group">
        <label for="alamat">Alamat*</label>
        <input id="alamat" class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat" />
    </div>

    <input class="btn btn-success" type="submit" name="btn" value="Save" />
</form>