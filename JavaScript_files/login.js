/* sign in pop */
$("#back").hide();
$("#pass_submit").hide();
/* use jquery document fully loaded*/
$(document).ready(function(){
/* return button starts hidden */


$("#next").click(function(){
	$("#email_next").hide(500, "swing");
	$("#pass_submit").show(500, "swing");
	$("#back").show(500, "swing");
	email = $("#email").val();
	$("#email_show").empty().css({"margin-left": "30%", "margin-top":"20px"});
	$("#email_show").append(email);

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