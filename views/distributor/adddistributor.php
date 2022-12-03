<h1 class="text-center">Tambah Distributor</h1>
<form action="<?php echo $base_url?>distributor/Save" method="post">
<label for="">Nama Distributor</label>
<input type="text" name="nmdist" id="" required>
<label for="">Alamat</label>
<textarea name="alamat" id="" required></textarea>
<label for="">No Telepon</label> 
<input type="text" name="notelp" id="" required>
<input type="submit" value="Simpanl">
<input type="reset" value="Batal">
</from>