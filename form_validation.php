
<?php include('partial/header.php'); ?>

<section class="maincontent">

<h2>Topics: From Validation</h2>
<div class="content">
<form id="myform" action="" method="post">
	<table>
		<tr>
			<td>UserName:</td>
			<td><input type="text" name="UserName" id="UserName" required></td>
			<td><span style="color: red" class="error_from" id="user_error"></span></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" name="email" id="email" required></td>
			<td><span style="color: red" class="error_from" id="email_error"></span></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" id="password" required></td>
			<td><span style="color: red" class="error_from" id="pass_error"></span></td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			<td><input type="password" name="confirm_password" id="confirm_password" required></td>
			<td><span style="color: red" class="error_from" id="con_pass_error"></span></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit"></td>
			<td></td>
		</tr>
	</table>
</form>
</div>
 </section>

<?php include('partial/footer.php'); ?>

</div>


<script>
	
$(document).ready(function(){

 $("#user_error").hide();
 $("#email_error").hide();
 $("#pass_error").hide();
 $("#con_pass_error").hide();
 
 var error_username      = false;
 var error_email         = false;
 var error_password      = false;
 var error_conf_password = false;

$("#UserName").focusout(function(){
  check_username();
});

$("#confirm_password").focusout(function(){
  check_confirm_password();
});

$("#password").focusout(function(){
  check_password();
});

$("#email").focusout(function(){
  check_email();
});


//for username
function check_username(){

var username_length = $("#UserName").val().length;

if(username_length < 5 || username_length > 20){
  $("#user_error").html("Should Be Between 5-20 character");
  $("#user_error").show();
  error_username=true;
}
else{

	$("#user_error").hide();
}

}

//for email

function check_email(){

var pattern= new RegExp(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/);



if(pattern.test($("#email").val())){     //check email match with pattern 
  $("#email_error").hide();
}
else{

  $("#email_error").html("Invalid Email Address !!");
  $("#email_error").show();
    error_email=true;
}

}

//for password

function check_password(){

var password_length = $("#password").val().length;

if(password_length < 8){
  $("#pass_error").html("Should Be 8 character");
  $("#pass_error").show();
   error_password=true;
}
else{

	$("#pass_error").hide();
}

}


//for confirm password

function check_confirm_password(){

var password = $("#password").val();
var confirm_password = $("#confirm_password").val();

if(password != confirm_password){
  $("#con_pass_error").html("Password And Confirm Password Did not Match!");
  $("#con_pass_error").show();
  error_password=true;
}
else{

	$("#con_pass_error").hide();
}

}




$("#myform").submit(function(){

 var error_username      = false;
 var error_email         = false;
 var error_password      = false;
 var error_conf_password = false;

if(error_username==false && error_email==false && error_password==false && error_conf_password==false ){

	return true;
}
else{
  return false;
}

})



});

</script>

</body>
</html>