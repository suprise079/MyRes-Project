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

/* enable each filter change to refersh the reses container*/
filters = document.getElementsByClassName('refresh');
console.log(filters);

for (i of filters) {
  i.addEventListener('change', function() {
    document.getElementById("searchResults").innerHTML.reload;
    console.log("reloaded")
  });
}

$(document).ready(function(){
	$("#submit").click(function(){
		console.log("clicked");
		results = array();
		campus = $(".campus:checked").val();
		$.post("./database/Filters.php",
			{name:campus},
			function(data){
				results = data;
				console.log(data);
			})
		console.log("saved results: "+results);
	})
})
	
