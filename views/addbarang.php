<h1 class="text-center">Tambah Barang</h1>
<form action="" method="post">
    <div>
        <label for="">Id Barang</label>
        <input type="text" name="idbarang" id="" value="" readonly>
    </div>
    <div>
    <label for="">Nama Barang</label>
        <input type="text" name="nmbarang" id="" placeholder="Nama Barang" required>
    </div> 
    <div>
    <label for="">Jenis Barang</label>
      <select name="jenisbarang" id="">
        <option>Pilih</option>
        <option value=""></option>
      </select>
    </div>
    <div>
    <label for="">Stok Barang</label>
        <input type="number" name="stok" id="" placholder="Stok Barang" required>
    </div>   
    <div>
    <label for="">Harga Barang</label>
        <input type="number" name="harga" id="" placholder="Harga Barang" required>
    </div>
    <div>
    <label for="">Nama Pengirim</label>
      <select name="nmdist" id="">
          <option>Pilih</option>
          <option value=""></option>
      </select>
    </div>
    <div>
        <button type="submit" name="simpan">Simpan</button>
        <button type="reset" name="batal">batal</button>
    </div>
</div>
</form>
<?php}