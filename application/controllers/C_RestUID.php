<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class C_RestUID extends REST_Controller{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('M_consulta');
    }
    public function index_get()
	{
      
            $data = $this->M_consulta->getAuthorizationUID();
        
     
        $this->response($data, REST_Controller::HTTP_OK);
    
	}

    
}

	