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
  height:100px;
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
	<h2>Topics:)Resizable Widget Event</h2>
	<div class="content">
   
 <table border="1" style="border-collapse: collapse;" cellpadding="5px">
  <tr>
    <td>Start</td>
     <td><div id="start"></div></td>
  </tr>
   <tr>
    <td>Resizing</td>
     <td><div id="Resizing"></div></td>
  </tr>
   <tr>
    <td>Stop</td>
     <td><div id="stop"></div></td>
  </tr>
 </table>
<br>
<br>
  <div class="boxone" id="boxone" style="background:red">
      <p>Widget One</p>
  </div>

	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
  
  $("#boxone").resizable({

  start: function(event,ui){
        $("#start").html(livedim(event,ui));
  },


  resize: function(event,ui){
        $("#Resizing").html(livedim(event,ui));
  },
   

  stop: function(event,ui){
        $("#stop").html(livedim(event,ui));
  }
   
   
 });


   function livedim(event,ui){
   var ele ="Height: "+ui.size.height+"<br>";
   ele +=   "Width: "+ui.size.width;
   return ele;
   }

});

	
</script>
</body>
</html>