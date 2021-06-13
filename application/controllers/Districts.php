<?php

class Districts extends CI_Controller
{
    public function show()
    {
     $data['results'] = $this->District_model->get_districts();
     //$this->load->view('signup',$data);
    }
}
?>