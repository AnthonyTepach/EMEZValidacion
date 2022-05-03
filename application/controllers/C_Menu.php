<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
class C_Menu extends CI_Controller
{
  function __construct()
  {
parent::__construct();
    
  if(!$this->session->userdata('islogin')){
    redirect(base_url());
  }
  }
  public function index(){
		$this->load->view('V_Scan');
	}

    
}
?>