<?php
   foreach ($data['jual'] as $jual){
       if($jual>0){
        $no=((int)$jual['kdjual'])+1;
        $kd=sprintf("%04s",$no);
         }else{
        $kd="0001";
       }
       date_default_timezone_set('asia/jakarta');
       $kodejual=date('ymd').$kd;
    }
?>
<script type="text/javascript">
    function startCalc(){
        interval=setInterval("calc()",1);
    }
     function calc(){
        harga=document.jual.harga.value;
        qty=document.jual.jmlbarang.value;
        document.jual.totalharga.value=(harga*1)*(qty*1);
     }
    function stopCalc(){
        clearInterval(interval);
        
     </script>

<caption><h1>Data Jual</h1></caption>
<div>
  <Form action="" method="post">  
<div>
    <label for="">Id Jual</label>
    <input type="text" name="idjual" id="" value="<?= $kodejual?>" readonly>
</div>
</div>
<div>
    <label for="">Tanggal Transaksi</label>
    <input type="date" name="tgljual" id="" placeholder="yyy-m-dd" required>
</div>
<div>
    <?php
        foreach ($data['brg'] as $brg) {
    ?>
    <label for="">Nama Barang</label>
    <input type="text" name="idbarang" id="" value="<?=$brg['idbarang']?>" hidden>
    <input type="text" name="nmbarang" id="" value="<?= $brg['nmbarang']?>" readonly>
    <div>
    <input type="text" name="harga" id="" value="<?= $brg['harga']?>" readonly>
</div>
<?php } ?>
</div>
<div>
<label for="">Qty</label>
    <input type="number" name="jmlbarang" id="" required>
</div>
<div>
    <label for="">Total Harga</label>
    <input type="number" name="totalharga" id=""  value="<?=$brg['harga']?>" onfocus="startCalc()"onblur="stopCalc()"readonly>
</div>
<div>
<label for="">Bayar</label>
    <input type="number" name="bayar" id="" required>
</div>
<div>
<label for="">Kembalian</label>
    <input type="number" name="kembali" id="" readonly>
</div>
</form>