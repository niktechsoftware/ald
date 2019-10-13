<?php 
    class tree extends CI_Model{
        
        
    	public function selectlegleft($data1){
    		//  $returndata = array();
    	
    		$this->db->where("c_id", $data1);
    		$rowdata = $this->db->get("silver_tree")->row();
    		if ($rowdata) {
    	
    			if ($rowdata->left) {
    				$returndata= $this->selectlegleft($rowdata->left);
    			} else {
    				$returndata= $rowdata->c_id;
    	
    			}
    			return $returndata;
    	
    		}
    	
    	}
    	
    	public function selectlegright($data1){
    		// $returndata = array();
    	
    		$this->db->where("c_id", $data1);
    		$rowdata = $this->db->get("silver_tree")->row();
    		if ($rowdata) {
    			if ($rowdata->right) {
    				$returndata= $this->selectlegright($rowdata->right);
    			} else {
    				$returndata = $rowdata->c_id;
    			}
    			return $returndata;
    		}
    	}
    	
    	public function position($data, $id ,$po)
    	{
    			$this->db->where("c_id", $id);
    			$fty =$this->db->get("silver_tree")->row();
    			
    			if(!$fty->$po){
    				$this->db->where("c_id", $id);
    				$this->db->update("silver_tree", $data);
    			$datainsert = array(
    					"c_id"=>$data[$po]
    			);
    			$this->db->insert("silver_tree",$datainsert);
    			$this->db->insert("silver_mbalance",$datainsert);
    			}
    			return true;
    	}
    	
    	
    function mydownline($id,$pos,$table){
    $this->db->where($pos, $id);
    $dt= $this->db->get($table);
    return $dt;
    }
    }
?>