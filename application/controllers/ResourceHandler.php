<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ResourceHandler extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('resource_model');
    }

	public function fetchResources($collectionId) {
		$data['resources'] = $this->resource_model->fetch_all_resouces($collectionId);
		$data['parentId'] = array('collectionId'=>$collectionId);
		$this->load->view('resources',$data);
		
	}

	public function fetchResource($id) {
		$data['resource'] = $this->resource_model->fetch_resource($id);
		return $data;
	}

	

	public function addResource($collectionId)
	{
       $this->load->library('form_validation');
	   $this->form_validation->set_rules('resourceName','Resource_name','trim|required|min_length[2]|alpha_numeric');
	   $this->form_validation->set_rules('resourceDescription','Resource Description','trim|required|alpha_numeric_spaces|min_length[2]');
	   $this->form_validation->set_rules('resourceLink','Resource Link','trim|required|valid_url');

	   if($this->form_validation->run() === FALSE) {
        die(validation_errors());
	}else {
		   $resourceData = array('resourceName'=>$this->input->post('resourceName'),
		                        'description'=> $this->input->post('resourceDescription'),
								 'link'=>$this->input->post('resourceLink') ,
								 'collectionId' => $collectionId
								);

		   $this->resource_model->add_resource($resourceData);
		redirect('ResourceHandler/fetchResources/'.$collectionId, 'refresh');
           
	   }

	}

	public function editResource($id) {
	    $data['resource'] = $this->resource_model->fetch_resource($id);
		$this->load->view('resource_edit',$data);
	}

	public function updateResource($id) {
		$updateData = array('resourceName'=>$this->input->post('resourceName'),
		                        'description'=> $this->input->post('resourceDescription'),
								 'link'=>$this->input->post('resourceLink') );
					
		$this->resource_model->update_resource($updateData,$id);
		$resourceData = $this->fetchResource($id);
		$collectionId = $resourceData['resource'][0]['collectionId'];

		redirect('ResourceHandler/fetchResources/'.$collectionId, 'refresh');
					
	}


	public function deleteResource($id) {
		$this->resource_model->delete_resource($id);
		$resourceData = $this->fetchResource($id);
		$collectionId = $resourceData['resource'][0]['collectionId'];
		redirect('ResourceHandler/fetchResources/'.$collectionId, 'refresh');
       
	}


}
