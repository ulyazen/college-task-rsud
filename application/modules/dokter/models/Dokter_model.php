<?php

class Dokter_model extends CI_Model
{
    public function readDokter()
    {
        return $this->db->get('dokter')->result_array();
    }
    public function createDokter($data)
    {
        $this->db->insert('dokter', $data);
    }
}
