<?php

class M_artikel extends CI_Model{
    function ambil_artikel(){
        return $this->db->get('artikel');
    }
}
