//global variable to determine which price is selected
priceSelector = true;	//true edits min and false edits max 

//funtionality for By town button in filters
function byTown() {
	town = document.getElementById('towns');
	campuses = document.getElementById("campuses");

	town.className = "show";
	campuses.className = "hide";
}

//funtionality for By campuses button in filters
function byCampus() {
	town = document.getElementById('towns');
	campuses = document.getElementById("campuses");

	town.className = "hide";
	campuses.className = "show";
}

//set range input to edit min price
function minPrice(){
	priceSelector = true;
	console.log("min selected");
}

//set range input to edit max price
function maxPrice(){
	priceSelector = false;
	console.log("max selected");
}

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