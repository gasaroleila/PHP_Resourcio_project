<?php 

class Collection extends CI_Controller{
    public function index() {
        $userId = $this->session->userdata('studentId');
        // $this->load->view('collections',$data);
        $data['colls_data']=$this->collection_model->getCollections();
        $data['notification']=$this->notification_model->get_notifications($userId);
        $this->load->view('collections',$data);
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
  $pdf->Ln();
  $pdf->Ln();
  $pdf->Cell(280,7,'LIST OF ALL RESOURCES',0,0,'C');
  $pdf->Ln();
  $pdf->setLeftMargin(180);
  $image = base_url('undraw_chore_list_re_2lq8.png');
  $pdf->Cell( 40, 40, $pdf->Image($image, $pdf->GetX(), $pdf->GetY(), 100.78), 0, 0, 'L', false );
  $pdf->setLeftMargin(20);
  $pdf->SetFont('Arial','',12);
  $header = array('Resource Names','Description');
{
    
    // Closing line
}
 $this->db->select('*');
 $rows = $this->db->get_where('resource',array('status'=>'Active'))->result_array();
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


}


?>