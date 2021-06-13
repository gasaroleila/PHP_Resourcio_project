<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class collection_model extends CI_Model{

    public function saveCollection($data){
        $this->db->insert('collection', $data);
    }
    
}



?>