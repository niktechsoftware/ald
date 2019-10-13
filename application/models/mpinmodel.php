<?php
class mpinmodel extends CI_Model{
	function getPinDetails($id){
		if($id){
		$this->db->where("customer_id",$id);
		$result = $this->db->get("mpin_master");
		return $result;
		}else{
			$result = $this->db->get("mpin_master");
			return $result;
		}
	}
	
	function pin_max(){
		$this->db->select_max('id');
		$this->db->from('mpin_master');
		$maxid=$this->db->get();
		if($maxid->num_rows()>0){
			return $maxid->row()->id;
		}else{
			return 1;
		}
	}
	
	function genSavePin($cid,$nopin,$id){
		$this->db->where("id",$id);
		$oldcheck = $this->db->get("mpin_master");
		if(!$oldcheck->num_rows()>0){
		$data = array(
				"id" 			=>$id,
				"nop" 			=>$nopin,
				"customer_id"	=>$cid,
				"date"			=>date('Y-m-d H:i:s')
		);
		$this->db->insert("mpin_master",$data);
		for($i=0;$i<$nopin;$i++){
			$pin= random_string('numeric',6);
			$checkpv = $this->checkDubPin($pin);
			$datapin=array(
					"id"=>$id,
					"mpin"=>$checkpv,
					"status"=>0
			);
			$this->db->insert("mpin",$datapin);
		}
		
		return true;
		}else{
			echo "Try AFter Some time Network Problem";
		}
	}
	function checkDubPin($pin){
		$this->db->where("mpin",$pin);
		$checkmpins = $this->db->get("mpin");
		if($checkmpins->num_rows()>0){
			$pin= random_string('numeric',6);
			$checkpv = $this->checkDubPin($pin);
		}
		else{
		return $pin;
		}
		}

		function gettotalPin($pinid){
			$this->db->where("id",$pinid);
			$tot = $this->db->get("mpin");
			return $tot;
		}
}