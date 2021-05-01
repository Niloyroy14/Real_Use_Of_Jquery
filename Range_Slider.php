<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics:Handle Values with Range Slider with jQuery UI</h2>
	<div class="content">
     <table>
     	<tr>
     		<td> <label for="max_amount" title="max amount">Maximum Amount:</label></td>
     		<td> <input type="text" id="max_amount"></td>
     	</tr>
        <tr>
        	<td> <label for="minimum_amount" title="max amount">Minimum Amount:</label></td>
        	<td> <input type="text" id="minimum_amount"></td>
        </tr>
    </table>
    <br>
 <label>Amount:<span id="state"> </span></label>
 <br>
 <br>
     <div id="slider">
     	
     </div>
	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){

 	var getslider= 	$("#slider");

 	$("#slider").slider({
      range:true,
      min:10,
      max:100,
      values:[20,40],
      slide: function(event,ui){
      	$("#state").html(ui.values[0]+' - '+ui.values[1]+'Tk');
      	$("#minimum_amount").val(ui.values[0]);
      	$("#max_amount").val(ui.values[1]);
      }
 	});

 			$("#state").html(getslider.slider('values',0)+' - '+getslider.slider('values',1)+'Tk');

            $("#minimum_amount").val(getslider.slider('values',0));
            $("#max_amount").val(getslider.slider('values',1));
 });
	
</script>
</body>
</html>