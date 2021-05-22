/* sign in pop */
$("#back").hide();
$("#pass_submit").hide();
$("#errors").hide();
/* use jquery document fully loaded*/
$(document).ready(function(){
/* return button starts hidden */


$("#next").click(function(){

	email = $("#email").val();
	pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	console.log("email is: " +email);
	console.log(email.match(pattern));
	console.log(email);
	if (email.match(pattern)!=null){
		$("#email_next").hide(500, "swing");
		$("#pass_submit").show(500, "swing");
		$("#back").show(500, "swing");
		$("#email_show").empty().css({"margin-left": "30%", "margin-top":"20px"});
		$("#email_show").append(email);
		$("#errors").empty();
	}
	else{
		$("#errors").empty().append("Please enter a valid Email to continue");
		$("#errors").show(800, "swing");
	}
	

})

$("#back").click(function(){
	$("#pass_submit").hide(500, "swing");
	$("#email_next").show(500, "swing");
	$("#back").hide(500, "swing");
})

$("#close").click(function(){
	$("#signIn").hide(500, "swing");
})

})