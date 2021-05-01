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
    
    width: 600px;
    margin: 0 auto;
    text-align: center;
    
  }

  .accordian{
    font-size: 15px;
  }



 </style>


</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics:Accordion Widget </h2>
  <div class="content">
   
  <div class="maindiv">

    <div class="accordian" id="accordian">
      <h3>Tab One</h3>
      <div>
        <p>This is Tab One  This is Tab One This is Tab One This is Tab One This is Tab One This is Tab One This is Tab One This is Tab One This is Tab One This is Tab One This is Tab One This is Tab One This is Tab One This is Tab One This is Tab One This is Tab One</p>
      </div>

      <h3>Tab Two</h3>
      <div>
      <p> This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two This is Tab Two </p>
      </div>
    
     <h3>Tab Three</h3>
      <div>
      <p> This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three This is Tab three </p>
      </div>

    </div>
   
    
  </div>


  </div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
   
$("#accordian").accordion({

   collapsible:true
});
 

    
});

	
</script>
</body>
</html>