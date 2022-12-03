<?php
   foreach ($data['jual'] as $jual){
       if($jual>0){
        $no=((int)$jual['kdjual'])+1;
        $kd=sprintf("%04s",$no);
         }else{
        $kd="0001";
       }
       date_default_timezone_set('asia/jakarta');
       $kodejual=date('mdy').$kd;
    }
?>
<script type="text/javascript">
    function startCalc(){
        interval=setInterval("calc()",1);
    }
     function calc(){
        harga=document.jual.harga.value;
        qty=document.jual.jmlbarang.value;
        bayar=document.jual.bayar.value;
        total=document.jual.totalharga;
        kembalian=document.jual.kembali;
        total.value=(harga*1)*(qty*1);
        kembalian.value=(bayar*1)-(total.value*1);

     }
    function stopCalc(){
        clearInterval(interval);
    }
     </script>

<h1 class="text-center">Data Jual</h1>
<div>
  <Form action="<?= $base_url?>jual/save" method="post" name="jual">  
<div>
    <label for="">Id Jual</label>
    <input type="text" name="idjual" id="" value="<?= $kodejual?>" readonly>
</div>
</div>
<div>
    <label for="">Tanggal Transaksi</label>
    <input type="text" name="tgljual" id="" placeholder="yyy-mm-dd" value="<?= date('d-m-y')?>" readonly>
</div>
<div>
    <?php
        foreach ($data['brg'] as $brg) {
    ?>
    <label for="">Nama Barang</label>
    <input type="text" name="idbarang" id="" value="<?=$brg['idbarang']?>" hidden>
    <input type="text" name="nmbarang" id="" value="<?= $brg['nmbarang']?>" readonly>
    <div>
    <input type="text" name="harga" id="" value="<?= $brg['harga']?>"  onfocus="startCalc()"onblur="stopCalc()" readonly>
</div>
<?php } ?>
</div>
<div>
<label for="">Qty</label>
    <input type="number" name="jmlbarang" id=""  onfocus="startCalc()"onblur="stopCalc()"required>
</div>
<div>
    <label for="">Total Harga</label>
    <input type="number" name="totalharga" id=""  onfocus="startCalc()"onblur="stopCalc()" readonly>
</div>
<div>
<label for="">Bayar</label>
    <input type="number" name="bayar" id="" onfocus="startCalc()" onblur="stopCalc()" required>
</div>
<div>
<label for="">Kembalian</label>
    <input type="number" name="kembali" id="" onfocus="startCalc()" onblur="stopCalc()" readonly>
</div>
<div>
<button type="submit">Simpan</button>
</div>
    
</form>