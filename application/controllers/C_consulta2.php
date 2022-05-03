<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
class C_Consulta2 extends CI_Controller
{
    //function __construct()
    //{
		//parent::__construct();
			
		//if(!$this->session->userdata('islogin')){
			//redirect(base_url());
		//}
    //}
    public function index()
	{
        $this->load->model('M_consulta');
        $data['folioI']=$this->input->post('CB');
        $data['folioE']=$this->input->post('CB2');
        
        $consulta=$this->M_consulta->getInfo2($data['folioI'], $data['folioE']);      
		
        if ($consulta -> result()) {
            echo "<center><h4>Letras Flotantes Correctas </h4></center>";       
            
            foreach($consulta -> result() as $row){
                echo '<h4>'.$row -> flotantes.'</h4>';
            }          
        }
        else{
            echo "<center><span class='card-title grey-text text-darken-4'>Letras Flotantes Invalidas<span data-feather='archive'></span></span>";
            echo "
                <span class='card-title grey-text text-darken-4'><img class='responsive-img' width='80px' oncontextmenu='return false' src='".base_url('assets/img/Gif/source.gif')."'><span data-feather='archive'></span></span></center>";
            
                foreach($consulta -> result() as $row){
                echo $row -> folio;
              echo "hola";
            }
        }       
	}
    
   
    
}
?>