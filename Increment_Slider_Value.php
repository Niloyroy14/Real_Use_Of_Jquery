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
	<h2>Topics:Increment_Slider_Value with jQuery UI</h2>
	<div class="content">
     <label for="amount" title="select Price">Select Price:</label>
     <input type="text" id="amount" readonly style="font-weight:bold; color:green; margin-bottom: 20px;">
     <div id="slider">
     	
     </div>
	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
 	$("#slider").slider({
 
       value:100,
       min:0,
       max:500,
       step:50,
       slide:function(event,ui){
       	$("#amount").val("Tk."+ui.value);
       }
 	});

 		$("#amount").val("Tk. "+ $("#slider").slider("value"));
 
 });
	
</script>
</body>
</html>