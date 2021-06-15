<?php
class User_model extends CI_model{

    public function login_user($email, $password){
       $this->db->where('email',$email);
       $this->db->where('password',$password);
       $result = $this->db->get('student');
       if($result->num_rows()>0){
           return $result->result();
       }else{
           return false;
       }
    }
    public function registration(){
       $location=$this->db->query("select d.*, s.* from district d inner join sector s where s.districtId = d.districtId");
       return $location->result();
    }
    
    public function insertUser($data){
        $this->db->insert('student', $data);
        return true;
    }

    public function checkEmail($email){
        $result=$this->db->query("select username from student where email = '$email'");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false;
        }
    }
    public function saveCode($code,$email){
        $this->db->query("update student set reset_link = '$code' where email= '$email'");
    }
    public function getUserWithCode($code){
        $result=$this->db->query("select email from student where reset_link='$code'");
        return $result->result();
    }
    public function newPassword($email, $password){
        $this->db->query("update student set password = '$password' where email='$email'");
        $this->db->query("update student set reset_link = NULL where email = '$email'");
    }
    public function update_profile($id,$name) {
        $this->db->set('studentName',$name);
        $this->db->where('studentId', $id);
        if($this->db->update('student')) {
            return true;
        }else {
            return false;
        }
    }
}
?>