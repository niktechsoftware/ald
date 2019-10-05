 <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> ALD <a href="#"></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url();?>assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="<?php echo base_url();?>assets/bundles/echart/echarts.js"></script>
  <script src="<?php echo base_url();?>assets/bundles/chartjs/chart.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url();?>assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
</body>
<script>
  $(document).ready(function(){
    $('#parent_nm').hide();
   $('#regForm').hide();
    $('#parent_id').keyup(function(){
      var parent_id= $('#parent_id').val();
      $.post("<?php echo site_url("clogin/checkID") ?>",{parent_id : parent_id}, function(data){
	//	$("#regForm").html(data);
  //alert(data);
    if(data){
      $('#regForm').show();
    }
    else{
      $('#regForm').hide();

      document.getElementById('#parent_idd').innerHTML = "Parent ID is Wroung";
    }
  
		
	});
    });
  });
</script>
</html>