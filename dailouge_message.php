<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics: Dialogue Message with jQuery UI</h2>
	<div class="content">
     <div id="dailouge_message" title="This is my Message">
     	Just For Test
     </div>
	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
 	$("#dailouge_message").dialog();
 });
	
</script>
</body>
</html>