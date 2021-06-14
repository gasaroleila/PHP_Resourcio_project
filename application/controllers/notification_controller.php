<?php
    class Notification_controller extends CI_controller{

        function display(){
            $result = $this->notification_model->get_Notifications();

            foreach ($result as $object){
                echo $object->username."<br>";
            }
        }

    }

?>