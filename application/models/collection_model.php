<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection_model extends CI_Model{

    public function saveCollection($data){
        $this->db->insert('collection', $data);
    }
    public function getCollections(){
        $query=$this->db->get('collection');
        return $query->result();
    }
    public function deleteCollection($id){
        $this->db->query("delete from collection where collectionId = $id");
    }
    public function updateCollection($id, $name){
        $this->db->query("update collection set collectionName = '$name' where collectionId = $id");
    }
}



?>