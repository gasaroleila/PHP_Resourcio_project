<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ResourceHandler extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('resource_model');
    }

	public function fetchResources() {
		$data['resources'] = $this->resource_model->fetch_all_resouces();
		$this->load->view('list',$data);
		// var_dump($data);
	}

	public function fetchResource($id) {
		$data['resource'] = $this->resource_model->fetch_resource($id);
		$this->load->view('list',$data);
	}

	

	public function addResource()
	{
       $this->load->library('form_validation');
	   $this->form_validation->set_rules('resourceName','Resource_name','trim|required|min_length[2]|alpha_numeric');
	   $this->form_validation->set_rules('resourceDescription','Resource Description','trim|alpha_numeric');
	   $this->form_validation->set_rules('resourceLink','Resource Link','trim|required|valid_url');

	   if($this->form_validation->run() === FALSE) {
        echo validation_errors();
	}else {
		   $resourceData = array('resourceName'=>$this->input->post('resourceName'),
		                        'description'=> $this->input->post('resourceDescription'),
								 'link'=>$this->input->post('resourceLink') );

		   $this->resource_model->add_resource($resourceData);
           redirect(site_url('User/collections'));
	   }

	}

	public function editResource() {
	   
	}

	public function editResource($id) {
		$updateData = array('resourceName'=>$this->input->post('resourceName'),
		                        'description'=> $this->input->post('resourceDescription'),
								 'link'=>$this->input->post('resourceLink') );

        $this->resource_model->edit_resource($updateData,$id);
		
	}


}
