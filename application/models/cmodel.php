<?php 
    class Cmodel extends CI_Model{
        function cust_max(){
            $this->db->select_max('id');
			$this->db->from('customer_info');
			$maxid=$this->db->get();
			if($maxid->num_rows()>0){
				return $maxid->row()->id;
			}else{
				return 1; 
			}
        }
        function insertCustomer($data){
            $query =$this->db->insert('customer_info',$data);
            return $query; 
        }
        
        function checkStatus($table,$user){
        	$this->db->where('username',$user);
        	$c_ID=$this->db->get($table);
        	if($c_ID->num_rows()>0){
        		$data = array(
        		'msg' =>  '<div class ="alert alert-success">'.$c_ID->row()->customer_name.'</div>',
        		'checkv'=>true		
        	);
        	}else{
        		$data=array(
        		'msg'=> '<div class ="alert alert-danger">Wrong sponsor UserID. </div>',
        		"checkv"=>false		
        		);
        			}
        			return $data;	
        }
    }
?>