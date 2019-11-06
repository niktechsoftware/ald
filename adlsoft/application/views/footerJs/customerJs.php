

<script>
  //alert("rahul");
 //$('#regForm').hide();
  $('#parent_id').keyup(function(){
    var parent_id= $('#parent_id').val();
    $.post("<?php echo site_url("clogin/checkID") ?>",{parent_id : parent_id}, function(data){
    	var d = jQuery.parseJSON(data);
		$("#custoStatus").html(d.msg);
 if(d.checkv==true){
	 $('#regForm').show();
 }else{
	 $('#regForm').show();
 }
   
  
  
	});
  });

</script>