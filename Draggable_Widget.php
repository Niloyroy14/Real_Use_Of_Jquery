<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
 
 <style>
   
.innerdivision{

  height: 200px;
  width:200px;
  background: green;
  color: #fff;
  display: table-cell;
  vertical-align: middle;
  text-align: center;

}

.outerinnerdivision{
  width: 300px;
  height: 300px;
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
	<h2>Topics:Draggable Widget</h2>
	<div class="content">
   

   <div id="outerdraggable" class="outerinnerdivision">
    <div id="draggable" class="innerdivision">
     <p>Draggable Widget</p>
   </div>
   </div>


	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
  
  $("#draggable").draggable({
   
  // axis:'x' ,     //This option constrains dragging to either the horizontal (x) or vertical (y) axis. Its possible values are:"x", "y".
  containment:'parent',  //Constrains dragging to within the bounds of the specified element or region. By default its value is "false".
  cursor:'pointer',
  opacity:.5,
  revert:true,     //It indicates whether the element is moved back to its original position at the end of the move.By default its value is "false".



  });

 
 });
	
</script>
</body>
</html>