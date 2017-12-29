<?php

class m_portofolio extends CI_Model{
    function ambil_data(){
        return $this->db->get('portofolio');
    }
}
