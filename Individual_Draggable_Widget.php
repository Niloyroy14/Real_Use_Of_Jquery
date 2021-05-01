<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
 
 <style>
   
.ourdiv{
  height:100px;
  width:100px;
  color: #fff;
  display:table-cell;
  vertical-align: middle;
  text-align: center;
}

.outerinnerdivision{
  width: 200px;
  height: 200px;
  margin: 0 auto;
  border:2px solid #666;
}

 </style>


</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics:Individual Draggable Widget</h2>
	<div class="content">
   
    <div id="draggable" class="ourdiv" style="background:green">Green</div>
    <div id="draggable" class="ourdiv" style="background:red">Red</div>
    <div id="draggable" class="ourdiv" style="background:blue">Blue</div>
    <div id="draggable" class="ourdiv" style="background:yellow">Yellow</div>
 <br>

   <div id="outerdraggable" class="outerinnerdivision">
   
   </div>


	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
  
  $(".ourdiv").draggable({
   
   snap:'#outerdraggable',
   snaptolerance:50,
   cancel:'#outerdraggable',


  });

 
 });
	
</script>
</body>
</html>