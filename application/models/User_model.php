<?php
class User_model extends CI_model{

    public function login_user($email, $password){
       $this->db->where('email',$email);
       $this->db->where('password',$password);
       $result = $this->db->get('student');
       if($result->num_rows()>0){
           echo "logged in";
       }else{
           return "Failed";
       }
    }
    public function registration(){
       $location=$this->db->query("select d.*, s.* from district d inner join sector s where s.districtId = d.districtId");
       return $location->result();
    }
    
    public function insertUser($data){
        $this->db->insert('student', $data);
    }
}
?>