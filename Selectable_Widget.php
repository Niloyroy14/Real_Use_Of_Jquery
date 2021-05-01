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
  display: inline-block;
  padding: 15px;
  border: 2px solid #666;
  cursor: pointer;
 }

 .ui-selected{
   background: #666;
   color: #fff;
 }

 .ui-selecting{
  background: red;
  color: #fff;
 }

 </style>


</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics:Selectable Widget</h2>
	<div class="content">
   
  <ul id="javaitem">
    <li>Servlets</li>
    <li>JSP</li>
    <li>JSTL</li>
    <li>Struts 2.0</li>
    <li>Spring</li>
    <li>Jasper Report</li>
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
  
   $( "#javaitem" ).selectable({
    stop:function(){
      var output="";
      $(".ui-selected").each(function(){
        output+=$(this) .text() + "<br>";
      });
      $("#state").html(output);
    }
   });  
});

	
</script>
</body>
</html>