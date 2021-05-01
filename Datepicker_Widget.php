<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
 
 <style>
   


 </style>


</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics:Datepicker Widget </h2>
  <div class="content">
   

  <label for="date" id="date">Select Date:</label>
<input type="text" id="showdate" name="">

  </div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){

  $("#showdate").datepicker({
    // appendText:'mm/dd/yyy',
    showOn:'both',
    buttonText:'Show Date',
    dateFormat:'mm/dd/yy',
    // numberOfMonths:2
    changeMonth:true,
    changeYear:true,
  });
 
});

	
</script>
</body>
</html>