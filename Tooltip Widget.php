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
	<h2>Topics:Tooltip Widget with jQuery UI</h2>
	<div class="content">
     <label id="labelname" title="Full Name">Name:</label>
     <input type="text" id="name" title="Your Name Will Be Here">
	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
 	$("#name").tooltip(
 	{
 		track:true,
 		show:{delay:100,duration:500, effect:'slideDown'},
 		hide:{delay:100,duration:500, effect:'slideUp'},
 	});
 });
	
</script>
</body>
</html>