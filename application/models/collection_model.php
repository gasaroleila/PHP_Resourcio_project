<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection_model extends CI_Model{

    public function saveCollection($data){
        $name=$data['collectionName'];
        $collections=$this->db->query("select * from collection where collectionName='$name'");
        if($collections->num_rows() > 0){
            echo "Collection Already exists";
        }else{
            $sql = $this->db->insert('collection', $data);
            $userId = $this->session->userdata('studentId');
            if($sql){
                $this->db->query("insert into notifications (title,studentId) values ('collection inserted successfully', '$userId')");
            }
        }

    }
    public function getCollections(){
        $query=$this->db->get('collection');
        return $query->result();
    }
    public function deleteCollection($id){
        $sql = $this->db->query("delete from collection where collectionId = '$id'");
        $userId = $this->session->userdata('studentId');
        if($sql){
            $this->db->query("insert into notifications (title,studentId) values ('Collection Deletion succeeded', '$userId')");
        }
    }
    public function updateCollection($id, $name){

        $collections=$this->db->query("select * from collection where collectionName='$name'");
        if($collections->num_rows() > 0){
            echo "Could not complete action.";
        }else{
            $sql = $this->db->query("update collection set collectionName = '$name' where collectionId = $id");
            $userId = $this->session->userdata('studentId');
            if($sql){
            $this->db->query("insert into notifications (title,studentId) values ('Succeeded updating', '$userId')");
            }
        }
        
        

    }
}

?>