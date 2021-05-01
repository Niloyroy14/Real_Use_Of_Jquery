<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
 
 <style>

  .maindiv{
    
    width: 300px;
    margin: 0 auto;
    text-align: center;
    margin-top: 50px;
  }

  .box{
    width: 150px;
    height: 150px;
    background: blue;
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
	<h2>Topics:Effects of jQueryUI</h2>
  <div class="content">
   
  <div class="maindiv" id="">
    <div class="box" id="box">Click Here...</div>
    
  </div>


  </div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
   
    $("#box").click(function(){

    //for only shaking effect

       // $("#box").effect("shake", {
       //  time: 10, 
       //  distance: 100
       //  }, 3000, function(){
       //   $(this).css("background","red");
       // });

    //for piece effect

      // $("#box").effect({ 
      //   effect: "explode",  
      //   easing: "easeInExpo",  
      //   pieces: 4,  
      //   duration: 4000 
                  
      //  });

  //for bounce effect

      $("#box").effect("bounce", {
        time: 10, 
        distance: 150
        }, 3000, function(){
         $(this).css("background","green");
       });

    });  
 
});

	
</script>
</body>
</html>