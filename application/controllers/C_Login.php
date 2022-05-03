<?php defined('BASEPATH') OR exit('No direct script access allowed');
class C_Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }
    public function index()
    {
      $this->load->view('v_login');
    }
    public function loging()
    {
    $user=$this->input->post('user');
    $pass=$this->input->post('pass');
    $fila=$this->M_login->user($user);
      if ($fila != null) {
        $con= $fila -> contraseña_us ;
        if ($con == $pass) {
           $data['user']=$user;
           $data['tipo']=$fila-> tipo_us;
           $data['login']=true;
           $this->session->set_userdata($data);         
         //echo "Redireccionando..........";
          //echo "<script>setTimeout(function(){window.location.href='".base_url('index.php/Principal')."'},0001);</script>";
        }else{
            // echo "Redireccionando..........";
           // echo "<Script> alert('Contraseña Incorrecta');</Script>";
         //echo "<script>setTimeout(function(){window.location.href='".base_url()."'},0001);</script>";
        }
      }else{
         // echo "Redireccionando..........";
        //echo "<Script> alert('Usuario Inexistente');</Script>";
        // echo "<script>setTimeout(function(){window.location.href='".base_url()."'},0001);</script>";
      }
    }
  public function eliminasesion()
  {
      $this->session->sess_destroy();
      $this->load->view();
  }

  public function sessionOK()
  {
    $data['user']=$this->input->post('user');
    $data['uid']=$this->input->post('UID');
    $data['islogin']=true;
    $this->session->set_userdata($data);
   
  }
}
?>