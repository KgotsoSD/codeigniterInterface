<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class site_model extends CI_Model
{
     
    public function run_query
    {
        $this->load->database('mydatabase');
        $DB1->query();
        $DB1->result();

        $this->db->query('SELECT * FROM admin');
    }

}