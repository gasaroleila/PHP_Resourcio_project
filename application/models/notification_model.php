<?php

    class Notification_model extends CI_model{

        public function get_notifications($id){
            $query = $this->db->get("select from notifications where studentId = $id");
            return $query->result();
        }

        public function deleteAllNotitifactions($id){
            $this->db->query("delete from notifications where studentId = $id");
        }
    }

?>