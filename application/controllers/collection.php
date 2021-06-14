<?php 

class Collection extends CI_Controller{
    public function index() {
        $data['colls_data']=$this->collection_model->getCollections();
        $this->load->view('collections',$data);
    }

    public function addCollection(){

        $this->form_validation->set_rules('col_name','Collection name','required|trim|min_length[3]|max_length[40]' );

        $name=$this->input->post('col_name');
        $data=[
            'collectionName'=>$name
        ];
        $this->collection_model->saveCollection($data);
        redirect('collection');
    }

    public function deleteCollection(){
            $id=$this->input->get('id');
            $this->collection_model->deleteCollection($id);
            redirect('collection');
    }
    public function updateCollection($id){
        $name=$this->input->post('col_name');
        if($name != ''){
            $this->collection_model->updateCollection($id,$name);
            redirect('collection');
        }
    }


}


?>