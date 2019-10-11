<?php 
    class Adminmodel extends CI_Model{

    function getcustomerdata($matchcon,$status,$tblname){

     $this->db->where($matchcon,$status);
     return  $this->db->get($tblname);


    }
    function getpaydetails(){

        return  $this->db->get("pay_details");
   
   
       }
      function activestatus($custid,$cid,$tblnm){
          $arr =array(
              "status" =>1
          );
          
        $this->db->where($custid,$cid);
        return  $this->db->update($tblnm,$arr);
      }
    

    }
    
    ?>