<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url(). 'admin/data_barang/update' ?>">

        <div class="for-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="from-control" value="<?php echo $brg->nama_brg ?>">
        </div>

        <div class="for-group">
            <label>Keterangan</label>
            
            <input type="text" name="keterangan" class="from-control" value="<?php echo $brg->keterangan ?>">
        </div>

        <div class="for-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="from-control" value="<?php echo $brg->kategori ?>">
        </div>

        <div class="for-group">
            <label>Harga</label>
            <input type="text" name="harga" class="from-control" value="<?php echo $brg->harga ?>">
        </div>

        <div class="for-group">
            <label>Stok</label>
            <input type="text" name="stok" class="from-control" value="<?php echo $brg->stok ?>">
        </div>

        <button type="sumit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>

        <?php endforeach; ?>

</div>