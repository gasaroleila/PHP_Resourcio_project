<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection_model extends CI_Model{

    public function saveCollection($data){
        $sql = $this->db->insert('collection', $data);
        if($sql){
            $mysql->query("insert into notifications (title) values ('collection inserted successfully')");
        }
    }
    public function getCollections(){
        $query=$this->db->get('collection');
        return $query->result();
    }
    public function deleteCollection($id){
        $sql = $this->db->query("delete from collection where collectionId = $id");
        if($sql){
            $mysql->query("insert into notifications (title) values ('Deletion succeeded')");
        }
    }
    public function updateCollection($id, $name){
        $sql = $this->db->query("update collection set collectionName = '$name' where collectionId = $id");
        if($sql){
            $mysql->query("insert into notifications (title) values ('Succeeded updating')");
        }
    }
}

?>