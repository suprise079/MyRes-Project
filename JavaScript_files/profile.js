$(document).ready(function(){
   
$("#update_profile").click(function(){
    $("#edit_form").hide(500, "linear");
    $("#detailed_profile").show(500, "linear");
})

$("#detailed_profile").click(function(){
    $("#detailed_profile").hide(500, "linear");
    $("#edit_form").show(500, "linear");
})

})