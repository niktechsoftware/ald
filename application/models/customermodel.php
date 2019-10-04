<?php 
    class Customermodel extends CI_Model{
        function cust_max(){
            $this->db->select_max('id');
			$this->db->from('customer_info');
			$maxid=$this->db->get();
			if($maxid->num_rows()>0){
				return $maxid->row()->id;
			}else{
				return 0; 
			}
        }
        function insertCustomer($data){
            $query =$this->db->insert('customer_info',$data);
            return $query; 
        }
    }
?>