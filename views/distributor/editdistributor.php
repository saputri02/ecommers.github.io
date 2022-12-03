<caption><h1>UBAH DATA DISTRIBUTOR</h1></caption>
<?php foreach ($data['distributor'] as $edit) { ?>
<form action="<?= $base_url.'distributor/ubah/'.$edit['iddist'] ?>" method="post">
<label for="">Nama Distributor</label>
<input type="text" name="nmdist" id=""
value="<?= $edit['nmdist']?>">
<label for="">Alamat</label>
<input type="text" name="alamat" id=""
value="<?= $edit['alamat']?>">
<label for="">Nomor telepon</label>
<input type="nomor" name="notelp" id=""
value="<?= $edit['notelp']?>">
<input type="submit" value="Simpan">
<input type="reset" value="Batal">
</form>
<?php } ?>
