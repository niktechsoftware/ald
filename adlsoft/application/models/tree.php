<?php 
    class tree extends CI_Model{
        
        
    	public function selectlegleft($data1){
    	
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
    	
    	public function getPair($table,$cid){
    		$this->db->where("c_id",$cid);
    		$pair = $this->db->get($table);
    		return $pair;
    		
    	}
    	
    	public function update($table,$data,$cid){
    		$this->db->where("c_id",$cid);
    		$this->db->update($table,$data);
    		return true;
    	}
    	public function insert($table,$data){
    		$this->db->insert($table,$data);
    		return true;
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
     		$dt2=	$data[$po];
    	
    
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
    	
    	
    function mydownline($id,$pos,$table,$tabv){
    	if($tabv==1){
    $this->db->where($pos, $id);
    $dt= $this->db->get($table);
    return $dt;
    	}else{
    	$posl ="left";
    	$posr = "right";
    	$i=0;	
    	$getv = array();
    $dataleft=	$this->getRightData($id,$table,$i,$getv);
    return $dataleft;
    }
    }
    public function getRightData($cid,$table,$i,$getv){
    	 
    	$this->db->where('c_id', $cid);
    	$leftjoiner = $this->db->get($table);
    
    	if($leftjoiner->num_rows()>0){
    		foreach ($leftjoiner->result() as $query2)
    		{
    			 
    			if($query2->left){
    				//echo $query2->left.'left';
    				$this->db->where("id",$query2->left);
    			
    			$getci = 	$this->db->get("customer_info")->row();
    			if($getci->status){
    				$getv[$i]=$query2->left;
    				$leftv=$query2->left;
    				$this->getRightData($leftv,$table,$i++,$getv);
    			}else{
    			    	$getv[$i]=$query2->left;
    				$leftv=$query2->left;
    				$i=$i-1;
    				$this->getRightData($leftv,$table,$i++,$getv);
    			}
    				
    			}
    			if($query2->right){
    			    	$this->db->where("id",$query2->right);
    			
    			$getci = 	$this->db->get("customer_info")->row();
    				if($getci->status){
    				$getv[$i] = $query2->right;
    				//echo $query2->right.'right';
    				$rightv=$query2->right;
    				$this->getRightData($rightv,$table,$i++,$getv);
    				}else{
    				    	$getv[$i] = $query2->right;
    			$i=$i-1;
    				$rightv=$query2->right;
    				$this->getRightData($rightv,$table,$i++,$getv);
    				}
    			}
    			 
    		}
    	}
    	
    return $getv;
    
    
    }
    
    
    
    
    
    }
?>