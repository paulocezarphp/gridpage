/*
checkbox-visible-search
checkbox-visible-search-text
checkbox-visible-terms
checkbox-visible-terms-text
*/

function Validate_Checkbox_Search(){

	var item_checkbox_search = document.getElementById("checkbox-visible-search").checked;

	if(item_checkbox_search == false){
		document.getElementById("checkbox-visible-search").checked = true;
	}else{
		document.getElementById("checkbox-visible-search").checked = false;
	}

}

function Validate_Checkbox_Terms(){

	var item_checkbox_terms = document.getElementById("checkbox-visible-terms").checked;

	if(item_checkbox_terms == false){
		document.getElementById("checkbox-visible-terms").checked = true;
	}else{
		document.getElementById("checkbox-visible-terms").checked = false;
	}

}


try {
   document.getElementById("checkbox-visible-search-text").addEventListener("click", Validate_Checkbox_Search);   
}
catch (e) {
   console.log("Erro: non-existent item (checkbox-visible-search-text)");
}

try {
   document.getElementById("checkbox-visible-terms-text").addEventListener("click", Validate_Checkbox_Terms);
}
catch (e) {
   console.log("Erro: non-existent item (checkbox-visible-terms-text)");
}


