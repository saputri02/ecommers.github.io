<div data-role="panel" data-title-caption="List Barang" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
<table class="table table-bordered table-responsive">
<th a class="button outline success" href="<?= $base_url; ?>barang/create/">Create data</a></th>
    <thead class="bg-warning">
    <thead>
        <th>Id Barang</th>
        <th>Nama Barang</th>
        <th>Jenis Barang</th>
        <th>Stok Barang</th>
        <th>Harga Barang</th>
        <th>Status Barang</th>
        <th>Pengirim</th>
        <th colspan="3">Tools</th>
    </thead>
    <?php
      foreach ($data['barang'] as $barang) {
        ?>
        <tbody>
        <td><?= $barang['idbarang']?></td> 
        <td><?= $barang['nmbarang']?></td> 
        <td><?= $barang['jenisbarang']?></td> 
        <td><?= $barang['stok']?></td> 
        <td><?= $barang['harga']?></td> 
        <?php
        if($barang['status']==1){
            if($barang['stok']>=1){
            $status="Ready";
        }else{
            $status="Sold Out";
        }
        }
        ?>
        <td><?= $status?></td> 
        <td><?= $barang['nmdist']?></td> 
        <td><a class="button warning" href="<?= $base_url.'jual/add/'.$barang['idbarang']?>"><span class="mif-add-shopping-cart"></span></a>
        <a  class="button info" href="<?= $base_url.'barang/edit/'.$barang['idbarang']?>"><span class="mif-pencil"></span></a></td>
        <td><a class="button alert" href="<?= $base_url.'barang/hapus/'.$barang['idbarang']?>" 
           onclick="return confirm('Yakin dihapus?')"><span class="mif-bin"></span></a></td>  
           
    </tbody>
    <?php } ?>
</table>
    </div>
