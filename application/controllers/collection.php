<?php 

class Collection extends CI_Controller{
    public function index() {
        $userId = $this->session->userdata('studentId');
        if($userId){
          $data['colls_data']=$this->collection_model->getCollections();
          $data["places"] = $this->User_model->registration();
          $data['user']=$this->User_model->getStudent();
          $data['notification']=$this->notification_model->get_notifications($userId);
          $this->load->view('collections',$data);
        }else{
          redirect('User/login');
        }

    }

    public function addCollection(){

        $this->form_validation->set_rules('col_name','Collection name','alpha_numeric|required|trim|min_length[3]|max_length[40]' );

        $name=trim($this->input->post('col_name'));

        if($name !== '' && ctype_alnum($name)) {
          $userId=$this->session->userdata('studentId');
          $data=[
            'collectionName'=>$name,
            'creator'=>$userId
          ];
        $this->collection_model->saveCollection($data);
        }
        
        redirect('collection');
    }

    public function deleteCollection(){
            $id=$this->input->get('id');
            $this->collection_model->deleteCollection($id);
            redirect('collection');
    }

    public function updateCollection(){
            $id=$this->input->post('id');
            $name=$this->input->post('col_name');
            $this->collection_model->updateCollection($id,$name);
            redirect('collection');
    }


public function view_all_resources() {
$pdf = new FPDF();
            $pdf->AddPage('L');  
            $pdf->SetFont('Arial','U',12);
            $image = base_url('logo.png');
            $pdf->Cell( 40, 40, $pdf->Image($image, $pdf->GetX(), $pdf->GetY(), 80.78), 0, 0, 'L', false );
            $pdf->Ln();
            $pdf->Cell(280,7,'MY RESOURCES',0,0,'C');
            $pdf->Ln();
            $pdf->setLeftMargin(180);
            $pdf->setLeftMargin(20);
            $pdf->SetFont('Arial','',12);
            $header = array('Resource Names','Description');

                $this->db->select('*');
                $rows = $this->db->get_where('resource',array('status'=>'Active'))->result_array();
                $pdf->setLeftMargin(60);
                if(count($rows)>0) {
                    $w = array(60, 120);
                    $pdf->SetFont('Arial','B',12);
                    $pdf->Ln();

                    for($i=0;$i<count($header);$i++) {
                        $pdf->Cell($w[$i],7,$header[$i],1,0,'L');
                    }

                    $pdf->SetFont('Arial','',12);

                    $pdf->Ln();
                    foreach($rows as $row) {
                    $pdf->Cell($w[0],7,$row['resourceName'],1,0,'L');
                    $pdf->Cell($w[1],7,$row['description'],1,0,'L');
                    
                    $pdf->Ln();
                }
                

                $pdf->Cell(array_sum($w),0,'','T');

                }else {
                echo "failed";
                }
                $pdf->Output();
    }
    public function updateUser(){
      $newname=$this->input->post('name');
      $newdistrict=$this->input->post('district');
      $newsector=$this->input->post('sector');
      $data = array(
        'studentNames' => $newname,
        'districtId' => $newdistrict,
        'sectorId' => $newsector,
        );
      if($this->User_model->Update_user($data)){;
      $this->index();
      }
    }

}


?>