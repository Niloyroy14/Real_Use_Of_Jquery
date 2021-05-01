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
	<h2>Topics:Control Dimension with Multiple Sliders</h2>
	<div class="content">
   <div id="image_height">

   </div><br>
   <div  id="image_width">
     
   </div><br>

   <div id="state"> </div><br>

   <img id="liveimage" src="image/s.jpg" height="100px" width="200px">

	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
  
  $('#image_height, #image_width').slider({
    min:100,
    max:500,
    slide:controlImage
  });

  function controlImage(){
        
        var height = $("#image_height").slider('value');
        var width  = $("#image_width").slider('value');

        $("#liveimage").css({
          height:height ,
          width:width,
        });

        $("#state").html("Height: "+height+" pixes <br>" + "Width: "+width+" pixes")
  }
 
 });
	
</script>
</body>
</html>