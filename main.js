//
// Place any custom JS here
//
//initializes tooltip functionality
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

	function includeHTML() {
	  var z, i, elmnt, file, xhttp;
	  /* Loop through a collection of all HTML elements: */
	  z = document.getElementsByTagName("*");
	  for (i = 0; i < z.length; i++) {
		elmnt = z[i];
		/*search for elements with a certain atrribute:*/
		file = elmnt.getAttribute("htmlInclude");
		if (file) {
		  /* Make an HTTP request using the attribute value as the file name: */
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			if (this.readyState == 4) {
			  if (this.status == 200) {elmnt.innerHTML = this.responseText;}
			  if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
			  /* Remove the attribute, and call this function once more: */
			  elmnt.removeAttribute("htmlInclude");
			  includeHTML();
			}
		  }
		  xhttp.open("GET", file, true);
		  xhttp.send();
		  /* Exit the function: */
		  return;
		}
	  }
	}
	
	includeHTML();
	
	/* returns a random element of an array */
	function chooseArrElement(array) {
		return array[Math.floor(Math.random() * array.length)];
	}


	function capitalizeFirstLetter(string) {
		return string.charAt(0).toUpperCase() + string.slice(1);
	}
