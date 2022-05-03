<?php defined('BASEPATH') OR exit('No direct script access allowed');
class C_Consulta extends CI_Controller
{
    function __construct()
    {
		parent::__construct();
			
		if(!$this->session->userdata('islogin')){
			redirect(base_url());
		}
    }
    public function index()
	{
        $this->load->model('M_consulta');
        //$data['folio']=$this->input->post('CB');
        $data['alfa']=$this->input->post('alfanum');

        //echo "<script>alert('ug".$data['alfa']."');</script>";
        
        $consulta=$this->M_consulta->getData($data['alfa']);      
		

        
        if ($consulta -> result()) {
                        
            foreach($consulta -> result() as $row){
                echo '<center><h4>Producto auténtico :</h4> </center>';
                echo "<center> <img class='responsive-img' style='' oncopy='return false;'   src='".$row -> url.".png'></center>";
            }
            
            foreach($consulta -> result() as $row){
                 $datos['folio']=$row -> folio;
            }
            
        }
        else{
            echo "<center><h2>Producto no válido</h2></center>";
            echo "<center><img class='responsive-img' width='250px' oncontextmenu='return false' src='".base_url('assets/img/System/none.svg')."'></center>";
        }     
	}
}
?>