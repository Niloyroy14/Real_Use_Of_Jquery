<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>

	<style>
#gotoup{
  bottom: 10px;
  right: 100px;
  position: fixed;
  cursor: pointer;
}

	</style>
</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent"  style="height: 1000px;">
	<h2>Topics: Scroll_To_Top_Down</h2>
	<div class="content">
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
		<p>This is Sroll TO Top Function to Test our program </p>
	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>

<div id="gotoup">
<img src="image/button.png" height="50px" width="50px">
</div>

<script>
	$(document).ready(function(){

      $(window).scroll(function(){
      	if($(this).scrollTop()>200){
      		$("#gotoup").fadeIn();
      	}else{
      		$("#gotoup").fadeOut();
      	}
      });


      $("#gotoup").click(function(){
        $("html,body").animate({scrollTop:0},500);
      });

	});
</script>
</body>
</html>