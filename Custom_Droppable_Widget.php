<!doctype html>
<html>
<head>
	<title>Real Use Of Jquery</title>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.min.css">
<!-- 	<link rel="stylesheet" href="css/main.css"> -->
	<script src="jquery_ui/jquery.js"></script>
	<script src="jquery_ui/jquery-ui.min.js"></script>
 
 <style>
   
 .box{

  width:250px;
  background:#eee;
  border:2px solid #666;
  display:inline-table;
  font-size: 18px;
  padding:5px;
}

li{
  font-size:18px;
}






 .project{width:900px; margin: 0 auto;background:#D4826A}

 .headeroption, .footeroption{background:#802D15;color:#fff;text-align:center;padding:20px;overflow:hidden;}
 .headeroption h2, .footeroption h2{margin:0;font-size:30px;color:#FFBDAA;}

.maincontent {
  font-size: 18px;
  min-height: 430px;
  padding: 10px 20px 20px;
}
.maincontent h2 {
  border-bottom: 3px solid #fff;
  border-radius: 25px;
  border-top: 3px solid #fff;
  font-size: 20px;
  margin: 0;
  padding: 5px 0;
  text-align: center;
  color:#fff;
}
 .content{width:828px;min-height:380px;background:#fff;border:1px solid #802D15;margin-top:10px;padding:15px;overflow:hidden;}

.widgethover{
  background:green;
  border:2px solid #000;
  color:#fff;
}


 </style>


</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>Real Use Of Jquery</h2>
	</section>
<section class="maincontent">
	<h2>Topics: Custom Droppable Widget  </h2>
	<div class="content">
   
   <div class="box">
     <p>PHP & Java FrameWork</p><hr>
     <ul id="techlist">
       <li data-value="PHP">Laravel</li>
       <li data-value="PHP">Codeigniter</li>
       <li data-value="PHP">CakePHP</li>

       <li data-value="Java">Spring</li>
       <li data-value="Java">Hibernet</li>
       <li data-value="Java">Struts 2</li>
     </ul>
   </div>
 
  <div class="box" id="PHP_FrameWork"> 
    <p>PHP FrameWork</p><hr>

     <ul id="PHP">
   
    </ul>
  </div>

   <div class="box" id="Java_FrameWork">
    <p>Java FrameWork</p><hr>

    <ul id="Java">
 
    </ul>

    </div>

	</div>
</section>
<?php include('partial/footer.php'); ?>
</div>



<script>
 
 $(document).ready(function(){
  
 $("#techlist li").draggable({

     // helper : 'clone',
     helper : function(){
      return "<ul> <b>" +$(this).text()+"</ul></b>";
     },
     revert : 'invalid'

 });

 $("#PHP_FrameWork").droppable({
   
   accept: 'li[data-value="PHP"]',
   // hoverClass:'widgethover',   //same work
   activeClass:'widgethover',

   drop:function(event, ui){
    $("#PHP").append(ui.draggable);
   }
 });


$("#Java_FrameWork").droppable({
   
   accept: 'li[data-value="Java"]',
   activeClass: 'widgethover',
   drop:function(event, ui){
    $("#Java").append(ui.draggable);
   }
 });
 
 });
	
</script>
</body>
</html>