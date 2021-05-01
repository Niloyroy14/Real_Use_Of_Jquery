<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
 
 <style>
   
.boxone{
  height:150px;
  width:150px;
  text-align:center;
  padding:10px;
  color:#fff;
}
.ui-resizable-helper{
  border: 2px dotted;
}

.outeroption{
  border:2px solid #444;
  width:500px;
  height:300px;
  padding:5px;

}

 </style>


</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics:)Resizable Widget Options</h2>
	<div class="content">
   
 <div class="outeroption" id="outeroption">
      <div class="boxone" id="boxone" style="background:red">
      <p>Widget One</p>
   </div>
 </div>

 
<!--  <br>
 <br>
   <div class="boxone" id="bneoxtwo" style="background:green">
      <p>Widget Two</p>
   </div> -->

	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
  
  $("#boxone").resizable({
   
   // animate:true,  //If you set this option to TRUE, it enables a visual effect during resizing when the mouse button is released
    
    // aspectRatio:true,
   // alsoResize:'#boxtwo',
   containment:'#outeroption',
   // ghost: true,
   // maxHeight:150,
   });

 

 
 });
	
</script>
</body>
</html>