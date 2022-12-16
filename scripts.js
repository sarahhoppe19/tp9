//JavaScript for TP9

function loadFileInto(recipeID, listName, whereTo) {

	// creating a new XMLHttpRequest object
	ajax = new XMLHttpRequest();

  //to define the fromFile variable with the passed recipe name and list
  fromFile = "recipe.php?recipeID=" + recipeID + "&recipeList=" + listName;
  console.log("From URL: " + fromFile);
  
	// defines the GET/POST method, source, and async value of the AJAX object
	ajax.open("GET", fromFile, true);

	// provides code to do something in response to the AJAX request
	ajax.onreadystatechange = function() {
			if ((this.readyState == 4) && (this.status == 200)) {
				console.log("AJAX response: " + this.responseText);
				
        if (this.responseText != 0) {
          responseArray = JSON.parse(this.responseText);
          
          responseHTML = "";
          for (i = 0; i < responseArray.length; i++) {
            responseHTML += "<li>" + responseArray[i] + "</li>";
          }
          
          document.querySelector(whereTo).innerHTML = responseHTML;
        } else {
          console.log("Error: no recipe/list found.");
        }
			} else if ((this.readyState == 4) && (this.status != 200)) {
				console.log("Error: " + this.responseText);
			}
		
	} // end ajax.onreadystatechange function

	// initiate request and wait for response
	ajax.send();

}

//new recipe object
function Recipe(recipeTitle, recipeContributor, recipeImgSrc, recipeID) {
  this.title = recipeTitle;
  this.imgSrc = recipeImgSrc;
  this.contributor = recipeContributor;
  this.id = recipeID;
  
  this.displayRecipe = function() {
    layoutTitle = document.querySelectorAll("#recipeBanner h1");
    layoutTitle[0].innerHTML = this.title;
    
    layoutContributor = document.querySelectorAll("#contributor");
    layoutContributor[0].innerHTML = "Contributed by " + this.contributor;
   
    document.querySelector("#recipeBanner").style.backgroundImage = "url(" + this.imgSrc + ")";
    
    loadFileInto(this.id, "ingredients", "#ingredients ul");
    loadFileInto(this.id, "equipment", "#equipment ul");
    loadFileInto(this.id, "directions", "#directions ol");
  }
}

MushroomSalsaChili = new Recipe("Mushroom Salsa Chili", "Sarah Hoppe", "chiliPhoto2.jpg", "mushroomSalsaChili");
BasicCrepes = new Recipe("Basic Crepes", "Zakiya Pruitt", "crepesPhoto.jpg", "basicCrepes");
Pancakes = new Recipe("Old Fashioned Pancakes", "Maddy Szczypka", "pancakesPhoto.jpg", "pancakes");
