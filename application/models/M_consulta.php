<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class M_consulta extends CI_Model
{
    
    public function getData($alfa)
		{
		//echo "<script>alert('ug".$alfa."');</script>";
		 $this->db->where('alfanum', $alfa);
        return $this->db->get('tb_folios');

		}
		
}
?>