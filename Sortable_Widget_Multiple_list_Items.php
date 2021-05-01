<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
 
 <style>
   
ul{
  float: left;
}
 .ui-sortable-handle{
  background: orange;
  color: black;
 }

 li{
  background: red;
  border: 2px solid green;
  padding: 10px 20px;
  cursor: pointer;
  margin: 3px;
  width: 300px;
  color: #000;
  list-style: none;

 }

 </style>


</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics:Sortable Widget[Multiple list Items] </h2>
	<div class="content">
   
  <ul id="phpitem" data-value="conect">
    <li>Laravel</li>
    <li>Drupal</li>
    <li>CakePHP</li>
    <li>SilverStripe</li>
    <li>Symphony</li>
    <li>Kohana</li>
  </ul>
   
  <ul id="cms" data-value="conect">
    <li>Wordpress</li>
    <li>Codeigniter</li>
    <li>Joomla</li>
    <li>FuelPHP</li>
  </ul>


	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
  
   $("#phpitem, #cms").sortable({
     //connectWith:'#phpitem ,#cms',          //same  work
     connectWith:'ul[data-value="conect"]',   //same  work
   });  
});

	
</script>
</body>
</html>