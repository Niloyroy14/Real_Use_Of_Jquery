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
  height:200px;
  width:200px;
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
	<h2>Topics:Individual Draggable Widget Priority(More)</h2>
	<div class="content">
   
    <div  class="ourdiv" style="background:green">Green</div>
    <div  class="ourdiv" style="background:red">Red</div>
    <div  class="ourdiv" style="background:blue">Blue</div>
    <div  class="ourdiv" style="background:yellow">Yellow</div>
 <br>

	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
  
  // $(".ourdiv").draggable({
   
  // stack:'.ourdiv',   //It controls the z-index of the set of elements that match the selector, always brings the currently dragged item to the front. It is very useful in things like window managers. By default its value is "false".
  
  // });

$(".ourdiv").draggable();

$(".ourdiv").mousedown(function(){
  var maxZindex =0;
  $(this).siblings('.ourdiv').each(function(){
   
   var currentZindex =Number($(this).css('z-index'));
   maxZindex = currentZindex > maxZindex ? currentZindex : maxZindex;   // 1 line if else
  });
  $(this).css('z-index',  maxZindex+1);
});


 
 });
	
</script>
</body>
</html>