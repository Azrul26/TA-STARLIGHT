<?php

class Model_barang extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_barang');
    }

    public function tambah_barang($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_barang($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);

    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
<<<<<<< HEAD
        $result = $this->db->where('id_barang', $id)
=======
        $result = $this->db->where('id_brg', $id)
>>>>>>> 379933db6d5be427c2cc13c27fbe725a06d5a37c
                            ->limit(1)
                            ->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->row();
        }
        else{
            return array();
        }
    }
<<<<<<< HEAD

    public function detail_brg($id_barang)
    {
        $result = $this->db->where('id_barang', $id_barang)->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false();
        }
    }
=======
>>>>>>> 379933db6d5be427c2cc13c27fbe725a06d5a37c
}