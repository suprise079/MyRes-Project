$(document).ready(function(){
   
$("#update_profile").click(function(){
    $("#edit_form").hide(500, "linear");
    $("#detailed_profile").show(500, "linear");
})

$("#detailed_profile").click(function(){
    $("#detailed_profile").hide(500, "linear");
    $("#edit_form").show(500, "linear");
})

$("#edit_file").change(function(evt) {
    var f=$(this).get(0).files[0];

    var myformData = new FormData();        
	myformData.append("file",f);


	$.ajax({
    url: "../database/profileImage.php", 
    type: 'POST',
    data: myformData,
    processData: false,
    contentType: false,
    success: function(data) {
        $("#profile_img").attr("src",data)
    }
});

$("#add_img").change(function(evt) {
    var f=$(this).get(0).files[0];

    var myformData = new FormData();        
	myformData.append("file",f);


	$.ajax({
    url: "../database/saveImage.php", 
    type: 'POST',
    data: myformData,
    processData: false,
    contentType: false,
    success: function(data) {
        $("#profile_img").attr("src",data)
    }
});
   
})



})