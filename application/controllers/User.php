<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index() {
        $locations["locations"] = $this->User_model->registration();
        $this->load->view('user/signup',$locations);
    }
    public function login_view(){
        $this->load->view('user/login');
    }
    public function resources(){
        $this->load->view('resources');
    }
    public function login() {
       $this->form_validation->set_rules('email','Email',
       'trim|required|valid_email', 
       array(
        'required' => 'You have not provided %s.'
       ));
       $this->form_validation->set_rules('Password','Password',
        'trim|required', array(
        'required' => 'You have not provided %s.'
       ));
       if ($this->form_validation->run() == FALSE)
        {
            $this->login_view();
        }
        else
        {
            $email=$this->input->post('email');
            $password=hash('SHA512',$this->input->post('Password'));
            $this->User_model->login_user($email,$password);
        
        }

    }

    public function register() {
    
        $this->form_validation->set_rules('names', 'Names', 'trim|required|min_length[4]|max_length[40]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[student.email]|valid_email',array('is_unique' =>"Email Already taken"));
        $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[2]|max_length[15]|is_unique[student.username]',
         array('is_unique' =>"Username Already taken")
        );
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[40]');
        
        if($this->form_validation->run() == false){
            $this->index();

        }else{
           $data=array(
            'studentNames'=>$this->input->post('names'),
            'email'=>$this->input->post('email'),
            'districtId'=>$this->input->post('district'),
            'sectorId'=> $this->input->post('sector'),
            'username'=>$this->input->post('username'),
            'password'=>hash('SHA512',$this->input->post('password')),
           );
            $this->User_model->insertUser($data);
        }
       
}

}

?>