<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

   class Resource_model extends CI_Model {

      public function __construct() {
         $this->load->database('default');
         $this->load->library('session');
 
         // Call the Model constructor
         parent::__construct();
     }
       
      public function fetch_all_resouces($collectionId) {
          $this->db->select('*');
         $data = $this->db->get_where('resource',array('status'=>'Active','collectionId'=>$collectionId))->result_array();
         return $data;
      }

      public function fetch_resource($id) {
		   $this->db->select('*');
         $data = $this->db->get_where('resource',array('resourceId'=>$id))->result_array();
         return $data;
      }

      public function add_resource($arrData) {
          if($this->db->insert('resource',$arrData)) {
            $userId = $this->session->userdata('studentId');
            $this->db->query("insert into notifications (title,studentId) values ('resource inserted successfully', '$userId')");
             return true;
          }else {
             return false;
          }
      }

     public function update_resource($editArr,$resourceId) {
        $this->db->where('resourceId',$resourceId);

        if($this->db->update('resource',$editArr)) {
           return true;
        }else {
           return false;
        }
       
     } 


     public function delete_resource($resourceId) {
      $this->db->set('status', 'Disabled');
      $this->db->where('resourceId',$resourceId);
      if($this->db->update('resource')) {
            $userId = $this->session->userdata('studentId');
            $this->db->query("insert into notifications (title,studentId) values (' Resource deletion succeeded', '$userId')");
           return true;
        }else {
           return false;
        }
     }
     
   }
?>