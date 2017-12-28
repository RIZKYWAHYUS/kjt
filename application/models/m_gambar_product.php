<?php

class m_gambar_product extends CI_Model{
    function ambil_data(){
        return $this->db->get('gambar_product');
    }
}
