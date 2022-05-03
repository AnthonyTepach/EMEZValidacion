<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class M_login extends CI_Model
{
    public function user($value='')
    {
      $this->db->where('nombre',$value);
        $result= $this->db->get('usuario');
        if ($result->num_rows()>0) {
          return $result->row();
        }else{
          return null;
        }
    }
}
?>