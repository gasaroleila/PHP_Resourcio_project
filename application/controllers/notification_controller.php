<?php
    class Notification_controller extends CI_controller{

        
        public function displayNotifications() {
            $userId = $this->session->userdata('studentId');
            $data['notification']=$this->notification_model->get_notifications($userId);
            $this->load->view('collections',$data);
        }

        function clearAll(){
                $userId = $this->session->userdata('studentId');
                $this->notification_model->deleteAllNotitifactions($userId);
                redirect('collection');
        }

    }

?>