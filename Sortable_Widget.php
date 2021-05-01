<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
 
 <style>
   
 li{
  border: 2px solid green;
  padding: 10px;
  cursor: pointer;
  margin: 3px;
  height: 15px;
  width: 300px;
  color: #000;
  list-style-type: none;

 }

 .ui-sortable-handle{
  background: orange;
  color: black;
 }

 .selecteditem{
  background: red;
  border: 2px solid green;
  padding: 10px;
  cursor: pointer;
  margin: 3px;
  height: 15px;
  width: 300px;
  color: #000;
  list-style-type: none;

 }

 </style>


</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics:Sortable Widget</h2>
	<div class="content">
   
  <ul id="phpitem">
    <li data-value="php">Laravel</li>
    <li data-value="php">Codeigniter</li>
    <li data-value="php">CakePHP</li>
    <li data-value="php">FuelPHP</li>
    <li data-value="php">Symphony</li>
    <li data-value="php">Kohana</li>

    <li data-value="cms">Wordpress</li>
    <li data-value="cms">Drupal</li>
    <li data-value="cms">Joomla</li>
    <li data-value="cms">SilverStripe</li>
  </ul>

  <br>
 <p>You Selected:</p><br>
  <div id="state"> 

  </div>

	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
  
   $("#phpitem").sortable({
    placeholder:'selecteditem',
    // axis:'y',
    opacity:.5,
    items:'li[data-value="php"]',     // handle which value is selectable
   });  
});

	
</script>
</body>
</html>