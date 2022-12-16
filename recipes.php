<?

//recipe response PHP file for TP9

$recipes = array();

//first recipe - mushroom salsa chili ----------------------------------------------------------------

$recipes["MushroomSalsaChili"] = array();
$recipes["MushroomSalsaChili"]["ingredients"] = array();
$recipes["MushroomSalsaChili"]["equipment"] = array();
$recipes["MushroomSalsaChili"]["directions"] = array();

$recipes["MushroomSalsaChili"]["ingredients"][] = "1 pound ground beef";
$recipes["MushroomSalsaChili"]["ingredients"][] = "1 pound bulk pork sausage";
$recipes["MushroomSalsaChili"]["ingredients"][] = "2 cans, 16oz each, kidney beans, rinsed and drained";
$recipes["MushroomSalsaChili"]["ingredients"][] = "3 cups chunky salsa";
$recipes["MushroomSalsaChili"]["ingredients"][] = "1 can, 14.5oz, dice tomatoes, undrained";
$recipes["MushroomSalsaChili"]["ingredients"][] = "1 large onion, chopped";
$recipes["MushroomSalsaChili"]["ingredients"][] = "1 can, 8oz, tomato sauce";
$recipes["MushroomSalsaChili"]["ingredients"][] = "1 can, 4oz, mushroom stems and pieces, drained";
$recipes["MushroomSalsaChili"]["ingredients"][] = "1/2 cup each chopped green, sweet red, and yellow peppers";
$recipes["MushroomSalsaChili"]["ingredients"][] = "1/2 tsp dried oregano";
$recipes["MushroomSalsaChili"]["ingredients"][] = "1/4 tsp garlic powder";
$recipes["MushroomSalsaChili"]["ingredients"][] = "1/8 tsp dried thyme";
$recipes["MushroomSalsaChili"]["ingredients"][] = "1/8 tsp dried marjoram";
$recipes["MushroomSalsaChili"]["ingredients"][] = "Shredded sharp chedder cheese";
$recipes["MushroomSalsaChili"]["ingredients"][] = "Sour cream";
$recipes["MushroomSalsaChili"]["ingredients"][] = "Thinly sliced green onions";
  
$recipes["MushroomSalsaChili"]["equipment"][] = "Large Skillet";
$recipes["MushroomSalsaChili"]["equipment"][] = "Slow cooker";
$recipes["MushroomSalsaChili"]["equipment"][] = "Spatula";
$recipes["MushroomSalsaChili"]["equipment"][] = "Measuring cups";
$recipes["MushroomSalsaChili"]["equipment"][] = "Can opener";
$recipes["MushroomSalsaChili"]["equipment"][] = "Knife";
$recipes["MushroomSalsaChili"]["equipment"][] = "Cutting board";

$recipes["MushroomSalsaChili"]["directions"][] = "In a large skillet, cook beef and sausage over medium heat 6-8 minutes or until no longer pink, breaking into crumbles.";
$recipes["MushroomSalsaChili"]["directions"][] = "Drain all the meat and transfer to a 5- or 6-quart slow cooker.";
$recipes["MushroomSalsaChili"]["directions"][] = "Stir in beans, salsa, tomatoes, onion, tomato sauce, mushrooms, peppers and seasonings.";
$recipes["MushroomSalsaChili"]["directions"][] = "Cook, covered, on low 8-10 hours or until flavors are blended.";
$recipes["MushroomSalsaChili"]["directions"][] = "Add toppings of your choice and serve!";

//second recipe - basic crepes -----------------------------------------------------------------------------

$recipes["BasicCrepes"] = array();
$recipes["BasicCrepes"]["ingredients"] = array();
$recipes["BasicCrepes"]["equipment"] = array();
$recipes["BasicCrepes"]["directions"] = array();

$recipes["BasicCrepes"]["ingredients"][] = "½ cup of milk";
$recipes["BasicCrepes"]["ingredients"][] = "½ cups of water";
$recipes["BasicCrepes"]["ingredients"][] = "¼ teaspoon salt";
$recipes["BasicCrepes"]["ingredients"][] = "1 cup of all purpose flour";
$recipes["BasicCrepes"]["ingredients"][] = "2 tablespons of melted better";
$recipes["BasicCrepes"]["ingredients"][] = "2 Eggs";

$recipes["BasicCrepes"]["equipment"][] = "Oven";
$recipes["BasicCrepes"]["equipment"][] = "Spatula";
$recipes["BasicCrepes"]["equipment"][] = "Cooking pan";
$recipes["BasicCrepes"]["equipment"][] = "Bowl";
$recipes["BasicCrepes"]["equipment"][] = "Spoon";

$recipes["BasicCrepes"]["directions"][] = "In a large mixing bowl, whisk together the flour and the eggs. Gradually add in the milk and water, stirring to combine. Add the salt and butter; beat until smooth.";
$recipes["BasicCrepes"]["directions"][] = "Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each crepe. Tilt the pan with a circular motion so that the batter coats the surface evenly.";
$recipes["BasicCrepes"]["directions"][] = "Cook the crepe for about 2 minutes, until the bottom is light brown. Loosen with a spatula, turn and cook the other side. Serve hot.";

//third recipe - pancakes -------------------------------------------------------------------------------------

$recipes["Pancakes"] = array();
$recipes["Pancakes"]["ingredients"] = array();
$recipes["Pancakes"]["equipment"] = array();
$recipes["Pancakes"]["directions"] = array();

$recipes["Pancakes"]["ingredients"][] = "1½ cups all-purpose flour";
$recipes["Pancakes"]["ingredients"][] = "3½ teaspoons baking powder";
$recipes["Pancakes"]["ingredients"][] = "1¼ teaspoons salt, or more to taste";
$recipes["Pancakes"]["ingredients"][] = "1¼ cups milk";
$recipes["Pancakes"]["ingredients"][] = "1 tablespoon white sugar";
$recipes["Pancakes"]["ingredients"][] = "3 tablespoons butter, melted";

$recipes["Pancakes"]["equipment"][] = "Stove";
$recipes["Pancakes"]["equipment"][] = "Frying pan";
$recipes["Pancakes"]["equipment"][] = "Measuring cups";
$recipes["Pancakes"]["equipment"][] = "Spatula";
$recipes["Pancakes"]["equipment"][] = "spoon";
$recipes["Pancakes"]["equipment"][] = "Large bowl";
$recipes["Pancakes"]["equipment"][] = "Sifter";

$recipes["Pancakes"]["directions"][] = "In a large bowl, sift together the flour, baking powder, salt and sugar. Make a well in the center and pour in the milk, egg and melted butter; mix until smooth.";
$recipes["Pancakes"]["directions"][] = "Heat a lightly oiled griddle or frying pan over medium-high heat. Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each pancake. Brown on both sides and serve hot.";

/*recipe loader for tp9 php*/

$requestedID = $_GET["recipeID"];
$requestedID = htmlspecialchars($requestedID);
$requestedID = filter_var($requestedID, FILTER_SANITIZE_STRING);

$requestedList = $_GET["recipeList"];
$requestedList = htmlspecialchars($requestedList);
$requestedList = filter_var($requestedID, FILTER_SANITIZE_STRING);

$requestedOutput = $recipes[$requestedID][$requestedList];

$requestedJSON = "0";

if ($requestedOutput != null) {
  $requestedJSON = json_encode($requestedOutput);
}

echo $requestedJSON;


