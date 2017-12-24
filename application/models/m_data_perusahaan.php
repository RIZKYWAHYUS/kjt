<?php

class m_data_perusahaan extends CI_Model{
    function ambil_data(){
        return $this->db->get('data_perusahaan');
    }
}
