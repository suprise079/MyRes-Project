$(document).ready(function(){

//global variable to determine which price is selected
priceSelector = true;	//true edits min and false edits max 
console.log('javascript');


//set range input to edit min price
$("#minPrice").mousedown(function(){
	priceSelector = true;
	console.log("min selected");
});

//set range input to edit max price
$("#maxPrice").mousedown(function(){
	priceSelector = false;
	console.log("max selected");
});

//change min and max prices using the range input
function rangeInput(){
	min = document.getElementById("minPrice");
	max = document.getElementById("maxPrice");
	rangeValue = document.getElementById("priceRange").value;

	if (priceSelector){
		min.value = rangeValue;
	}
	else{
		max.value = rangeValue;
	}
}

/* login button click funtionality */
$("#login").click(function(){
	$("#signIn").show(600, 'swing');
})


/* enable each filter change to refersh the reses container*/
inputs = document.querySelectorAll(".load");



console.log(inputs);
inputs.forEach((element) =>{
	element.click(function(){
		console.log("clicked");
		campus = $(".campus:checked").val();
		min_price = $('#minPrice').val();
		max_price = $('#maxPrice').val();
		rooms = $("input[name='rooms']").val();
		ratings = $("input[name='ratings']").val();

		$.post("./database/Filters.php",
			{'campus':campus, 'minPrice':min_price, 'maxPrice': max_price, 'rooms':rooms, 'ratings':ratings},
			function(data){
				results = JSON.parse(data);
				
				for (var i = 0; i < results[0].length; i++) {
					photo_specs = "src="+results[4][0]+" alt='ResPicture' class='displayPic'"
					photo = "<img "+photo_specs+" >"
					Dname = "<div class='res_title'>"+results[1][i]+"</div>";
					Drooms = "<div class='res_info'>"+results[2][i]+"</div>";
					Dcampus = "<div class='res_info'>"+results[3][i]+"</div>";
					link = "href=php_files/resPage.php?ID=$id"+results[0][i];
					Dview = "<div class='view_acc'><a "+link+"class='view_acc'>View Accomodation</a></div>";

					accomodation = document.createElement("article");
					accomodation.className = 'res_container col-lg-4 col-md-4 col-sm-6 col-xs-12'
					accomodation.append(Dname);
					accomodation.append(Drooms);
					accomodation.append(Dcampus);
					accomodation.append(Dview);
					$("searchResults").append(Accomodation);
				}
			}
		)
	})

	})
})
	
