<?php
class Sector extends CI_Controller
{
    public function show()
    {
     $data['sectors'] = $this->Sector_model->get_sectors(101);
     $this->load->view('signup',$data);
    }
}
?>