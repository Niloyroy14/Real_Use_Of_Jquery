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
	<h2>Topics: Spinner Widget  </h2>
  <div class="content">
   
  <div class="maindiv">

  
  <input type="text" id="spinner" value="0">

  </div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
   
$("#spinner").spinner({
  step:5,
  min:-10,
  max:20
});
 

    
});

	
</script>
</body>
</html>