function changeContent(){
	var xmlHttp = new XMLHttpRequest();		
	xmlHttp.open('POST', '../model/filter_product.php', true);
	var data = new FormData();
	//gets the value of filterProduct
	data.append('filterProduct', this.value);
	//send the form data to model/filter_product.php
	xmlHttp.send(data);

	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4){
			//get the response and change the value in the html
			var furnitureAll = document.getElementById('allFurniture');
			furnitureAll.innerHTML = xmlHttp.responseText;		
		}
	}
}
function changeFurniture(){
	//when the filter product is changed then loads the changeContent function
	var ele = document.getElementsByClassName('filterProduct')[0];
	ele.addEventListener('change', changeContent);
}
//dom content
document.addEventListener('DOMContentLoaded', changeFurniture);