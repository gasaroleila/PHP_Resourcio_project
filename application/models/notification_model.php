<?php

    class Notification_model extends CI_model{

        public function get_notifications(){
            $query = $this->db->get('notifications');
            return $query->result();
        }

    }

?>