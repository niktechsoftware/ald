<?php 
    class Adminmodel extends CI_Model{
function getrecord(){
        	$record = $this->db->get("general_settings");
        	return $record;
	     	}
   

    }
    
    ?>