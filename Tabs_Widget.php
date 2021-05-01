<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
 
 <style>
   
#tabs h2 {
  border-bottom: 3px solid green;
  border-radius: 25px;
  border-top: 3px solid green;
  background: yellow;
  font-size: 20px;
  margin: 0;
  padding: 5px 0;
  text-align: center;
  color:black;
}

 </style>


</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics:Tabs Widget </h2>
  <div class="content">
   
  <div id="tabs">
    <ul>
      <li><a href="#one">One</a> </li>
      <li><a href="#two">Two</a> </li>
      <li><a href="#three">Three</a> </li>
    </ul>
    
 

  <div id="one">
    <h2>This is Item For One Tab</h2><br>
    <p>This is Item For One Tabs This is Item For One Tab This is Item For One Tab This is Item For One Tab This is Item For One Tab This is Item For One Tab This is Item For One Tab This is Item For One TabThis is Item For One TabThis is Item For One TabThis is Item For One Tab This is Item For One Tab</p>
  </div>
  <div id="two">
    <h2>This is Item For Two Tab</h2><br>
    <p>This is Item For Two Tab This is Item For Two TabThis is Item For Two Tab This is Item For Two Tab This is Item For Two Tab This is Item For Two Tab This is Item For Two Tab This is Item For Two Tab This is Item For Two Tab This is Item For Two Tab This is Item For Two Tab This is Item For Two Tab This is Item For Two Tab </p>
  </div>
  <div id="three">
    <h2>This is Item For Three Tab</h2><br>
    <p>This is Item For Three Tab This is Item For Three Tab This is Item For Three Tab This is Item For Three Tab This is Item For Three Tab This is Item For Three Tab This is Item For Three Tab This is Item For Three Tab This is Item For Three Tab This is Item For Three Tab This is Item For Three Tab This is Item For Three Tab</p>
  </div>

   </div>

  </div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){

  $("#tabs").tabs();
 
});

	
</script>
</body>
</html>