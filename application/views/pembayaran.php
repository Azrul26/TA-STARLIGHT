<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
            <?php 
            $grand_total = 0;
            if ($keranjang = $this->cart->contents())
            {
                foreach ($keranjang as $item)
                {
<<<<<<< HEAD
                    $grand_total = $grand_total + $item['subtotal'];
=======
                    $grand_total = $grand_total + $item['sub_total'];
>>>>>>> 379933db6d5be427c2cc13c27fbe725a06d5a37c
                }

             echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total, 0, ',', '.');
            ?>
        </div><br><br>

        <h3> Input Alamat Pengiriman dan Pembayaran</h3>

<<<<<<< HEAD
        <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

            <div class="form-group">
=======
        <form method="post" action="<?php echo base_url() ?> dashboard/proses_pesanan">

            <div class="form-group"></div>
>>>>>>> 379933db6d5be427c2cc13c27fbe725a06d5a37c
                <label> Nama Lengkap </label>
                <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
             </div>

<<<<<<< HEAD
             <div class="form-group">
=======
             <div class="form-group"></div>
>>>>>>> 379933db6d5be427c2cc13c27fbe725a06d5a37c
                <label> Alamat Lengkap </label>
                <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
             </div>

<<<<<<< HEAD
             <div class="form-group">
=======
             <div class="form-group"></div>
>>>>>>> 379933db6d5be427c2cc13c27fbe725a06d5a37c
                <label> No. Telepon </label>
                <input type="text" name="no_telp" placeholder="Nomor Telepon Anda"  class="form-control">
             </div>

<<<<<<< HEAD
             <div class="form-group">
=======
             <div class="form-group"></div>
>>>>>>> 379933db6d5be427c2cc13c27fbe725a06d5a37c
                <label> Jasa Pengiriman </label>
                <select  class="form-control">
                    <option>JNE</option>
                    <option>TIKI</option>
                    <option>POS Indonesia</option>
                    <option>GOJEK</option>
                    <option>GRAB</option>
                </select> 
             </div>

<<<<<<< HEAD
             <div class="form-group">
=======
             <div class="form-group"></div>
>>>>>>> 379933db6d5be427c2cc13c27fbe725a06d5a37c
                <label> Pilih Bank </label>
                <select>
                    <option>BCA - XXXXXXXXX</option>
                    <option>BNI - XXXXXXXXX</option>
                    <option>BRI - XXXXXXXXX</option>
                    <option>MANDIRI - XXXXXXXXX</option>
                    <option>BTPN - XXXXXXXXX</option>
                </select  class="form-control"> 
             </div>

<<<<<<< HEAD
             <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
=======
             <button type="submit" class="btn btn-sm btn-primmary mb-3">Pesan</button>
>>>>>>> 379933db6d5be427c2cc13c27fbe725a06d5a37c
        </form>

        <?php
    } else
    {
        echo "<h4>Keranjang Belanja Anda Masih Kosong";
    }
        ?>
    </div>

    <div class="col-md-2"></div>
    </div>
</div>