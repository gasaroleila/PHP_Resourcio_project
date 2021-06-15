<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index() {
        $locations["locations"] = $this->User_model->registration();
        $this->load->view('user/signup',$locations);
    }
    public function login_view(){
        $this->load->view('user/login');
    }
    public function landing_page(){
        $this->load->view('landing');
    }
    public function login() {
       $this->form_validation->set_rules('email','Email',
       'trim|required|valid_email', 
       array(
        'required' => 'You have not provided %s.'
       ));
       $this->form_validation->set_rules('Password','Password',
        'trim|required|min_length[6]', array(
        'required' => 'You have not provided %s.', 'min_length[6]'=> 'Password cannot be less that 6 charactrs'
       ));
       if ($this->form_validation->run() == FALSE)
        {
            $this->login_view();
        }
        else
        {
            $email=$this->input->post('email');
            $password=hash('SHA512',$this->input->post('Password'));
            $user=$this->User_model->login_user($email,$password); 
            if($user && ($user[0]->status==='Active')){
                $session_data=array(
                    'studentId'=>$user[0]->studentId,
                    'studentNames'=>$user[0]->studentNames,
                    'email'=>$user[0]->email,
                    'districtId'=>$user[0]->districtId,
                    'sectorId'=>$user[0]->sectorId,
                    'username'=>$user[0]->username,
                    'status'=>$user[0]->status,
                );
                $this->session->set_userdata($session_data);
                //You  can access this session using this method $this->session->userdata('username');
                
                redirect(base_url().'collection'); 
            }else{
                $error=array(
                    'error'=>'Incorrect email or password',
                );
                $this->session->set_flashdata($error);
                 $this->login_view();
            }
    
        }

    }

    
    public function register() {
    
        $this->form_validation->set_rules('names', 'Names', 'trim|alpha_numeric_spaces|required|min_length[4]|max_length[40]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[student.email]|valid_email',array('is_unique' =>"Email Already taken"));
        $this->form_validation->set_rules('username', 'User Name', 'trim|alpha_numeric|required|min_length[2]|max_length[15]|is_unique[student.username]',
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
            if($this->User_model->insertUser($data)){
                $this->landing_page();
            }
        }
       
}


  public function user_reset_view() {
      $this->load->view('user_reset');
  }

  public function user_reset(){
      $email=$this->input->post('email');

      if($this->User_model->checkEmail($email)){
        $subject = "Password Reset Link";
        $code = bin2hex(random_bytes(6));
        $message = "
        <h3 style='color: black; font-family: Segoe UI'>Follow the link below to change your password</h3>
        <a style='color: white; background: dodgerblue; padding: 10px; width: 100px;' href='http://localhost/PHP_Resourcio_project/user/change_password_view/$code'>Click Here<a/></a>
        ";
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'mfitep6@gmail.com',
            'smtp_pass' => 'Mama2batoto.',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from('mfitep6@gmail.com');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {
            echo "Email sent. Check your inbox.";
            $this->User_model->saveCode($code,$email);
        } else {
            echo "Error while sending email";
        }
    }

      else{
        echo "Invalid email";
      }
  }
  public function change_password_view($random){
    $result=$this->User_model->getUserWithCode($random);
    if($result){
        $data['email']=$result[0]->email;
        $this->load->view('change_password',$data);
    }else{
        echo "Link broken.";
    }
  }
  public function change_password(){
      $email=$this->input->post('email');
      $password=$this->input->post('password');
      $hashed=hash('SHA512',$password);
      $this->User_model->newPassword($email,$hashed);

      $link = site_url('User/login');
      echo "
      Password changed successfully. <a href='$link'> Back to login </a>
      ";


  }

// public function user_reset() {
//     $this->load->view('user_reset');
//   }

public function logout(){
    $this->session->sess_destroy();
    $this->landing_page();

 }

}

?>