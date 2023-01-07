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
        $barang = $this->model_barang->find($id);

        $data = array(
<<<<<<< HEAD
            'id'      => $barang->id_barang,
=======
            'id'      => $barang->id_brg,
>>>>>>> 379933db6d5be427c2cc13c27fbe725a06d5a37c
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg
    );
    
    $this->cart->insert($data);
    redirect('dashboard');
    }

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
<<<<<<< HEAD
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
=======
        $this->cart->destroy();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('proses_pesanan');
>>>>>>> 379933db6d5be427c2cc13c27fbe725a06d5a37c
        $this->load->view('templates/footer');
    }
}