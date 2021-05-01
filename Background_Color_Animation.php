<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
 
 <style>
   


.mydiv{
  background:yellow;
  border: 2px solid green;
  padding: 5px 10px;
  cursor: pointer;
  margin:0 auto;
  width: 600px;
  font-size: 15px;
  color: #000;
 text-align: justify;


 }

 </style>


</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics:Background Color Animation</h2>
	<div class="content">
   
   <div class="mydiv" id="animate">
      <p>Real Use Of Jquery Real Use Of Jquery Real Use Of Jquery Real Use Of JqueryReal Use Of JqueryReal Use Of Jquery Real Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of JqueryReal Use Of jquery Real Use Of Jquery Real Use Of jquery Real Use Of Jquery Real Use Of Jquery Real Use Of Jquery Real Use Of Jquery Real Use Of Jquery </p>
   </div>

<button id="showAnimate">Animate</button>

	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
  var colorHandle= false;

  $("#showAnimate").click(function(){
     if(colorHandle){
       $("#animate").animate({
        'font-size':'15',
        'background-color':'green',
        'color':'black',
        'border-color':'yellow',
        'border-width':'4',

       });
     }else{

       $("#animate").animate({
        'font-size':'20',
        'background-color':'red',
        'color':'black',
        'border-color':'black',
        'border-width':'5',
        'border-radius':'15',

       });

     }
     colorHandle = !colorHandle;  //when get false then true, again opposite 
  });
   
});

	
</script>
</body>
</html>