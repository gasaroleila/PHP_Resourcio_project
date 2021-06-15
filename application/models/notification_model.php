<?php

    class Notification_model extends CI_model{

        public function get_notifications($userId){
            $query = $this->db->query("select * from notifications where studentId = '$userId'");   
            return $query->result();
        }

        public function deleteAllNotitifactions($id){
            $this->db->query("delete from notifications where studentId = '$id'");
    
        }
    }

?>