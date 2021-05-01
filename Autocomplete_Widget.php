<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
 
 <style>
   


 </style>


</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics:Autocomplete Widget</h2>
  <div class="content">
   
   <p>Type Here p,c,s...</p><br>
   <label>Type Technology</label>
   <input type="text" id="gettech" name="">


  </div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
   
   var tech = [  
     
      "Asp",  
      "BASIC",  
      "C",  
      "C++",  
      "Clojure",  
      "COBOL",  
      "ColdFusion",  
      "Erlang",  
      "Fortran",  
      "Groovy",  
      "Haskell",  
      "Java",  
      "JavaScript",  
      "Lisp",  
      "Perl",  
      "PHP",  
      "Python",  
      "Ruby",  
      "Scala",  
      "Scheme"  
    ];  

  $("#gettech").autocomplete({
      source:tech ,
      autofocus:true,
      // minLength:2,    // for two character 
      delay:500,    
  });
 
});

	
</script>
</body>
</html>