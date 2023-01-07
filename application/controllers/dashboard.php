<?php

class Dashboard extends CI_Controller{
    
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id)
    {
<<<<<<< HEAD
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id_barang,
=======
        barang = $this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id_brg,
>>>>>>> 4e2ed6420c524ccf7d5dbe64c308d94cef5ca18b
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg
    );
    
    $this->cart->insert($data);
    redirect('dashboard');
    }
<<<<<<< HEAD

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/index');      
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        }else {
            echo "Maaf, Pesanan Anda Gagal diproses!";
        }

    }

    public function detail($id_barang)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_barang);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang',$data);
        $this->load->view('templates/footer');
    }
=======
>>>>>>> 4e2ed6420c524ccf7d5dbe64c308d94cef5ca18b
}