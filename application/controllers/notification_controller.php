<?php
    class Notification_controller extends CI_controller{

        public function display() {
            $data['notification_data']=$this->notification_model->get_notifications();
            $this->load->view('collections',$data);
        }
        function clearAll(){
                $id=$this->input->get('id');
                $this->collection_model->deleteAllNotitifactions($id);
                redirect('collection');
        }

    }

?>