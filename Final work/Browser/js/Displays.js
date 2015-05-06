

function GetAllRecipes()
{
    //var object = new Object;
    //var j;
    
    //$.ajax({
    //    type: "GET",
    //    url: "../XML/Recipe-main.xml",
    //    dataType: "xml",

    //    success: function (xml)
    //    {
    //        //alert("fish");
    //        $(xml).find("recipe").each(function ()
    //        {
    //            var ingredients;
    //            $(this).find("ingredients").each(function () {
    //                var tempIngredient = new Object();
    //                tempIngredient.ingredient = $(this).find("ingredient").text();
    //                tempIngredient.quantity = $(this).find("quantity").text();
    //            });
    //            var i=0;
    //            var prep = new Object();
    //            $(this).find("ingredients").each(function () {
    //                prep[i] = $(this).find("step").text();
    //                i++;
    //            });

    //            object.id = $(this).attr("id");
    //            object.name = $(this).find("name").text();
    //            object.image = $(this).find("imageLink").text();
    //            object.description = $(this).find("description").text();
    //            object.mealTime = $(this).find("mealTime").text();
    //            object.ingredients = ingredients;
    //            object.ingredientCount = i;
    //            object.prep = prep;
    //            object.rating = $(this).find("score").text();
    //            j++;
    //            alert(object.description);
    //        });
    //        DisplayRecipes(object, j);
    //    },
    //    error: function () { alert("pew"); }
    //});


	var recipes;
	var i = 0;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "Recipes-main.xml", false);
    xmlhttp.setRequestHeader("Access-Control-Allow-Origin", "*");
    xmlhttp.setRequestHeader("Access-Control-Allow-Headers", "*");
	xmlhttp.send();
	var xmlDoc = xmlhttp.responseXML;
	var xml = $.parseXML(xmlDoc);

	xml.find("recipe").each(function()
	{
		//get all ingredients
		var ingredients;
		$(this).find("ingredients").each(function()
		{
			var ingredientTemp;
			ingredientTemp.ingredient = $(this).find("ingredient").text();
			ingredientTemp.quantity = $(this).find("quantity").text();
			ingredients[i] = ingredientTemp;
		});

		//get all preperation steps
		var prep;
		$(this).find("ingredients").each(function()
		{
			prep[i] = $(this).find("step").text();
		});

		//build objects
		var object;
		object.id = $(this).attr("id").text();
		object.name = $(this).find("name").text();
		object.image = $(this).find("imageLink").text();
		object.description = $(this).find("description").text();
		object.mealTime = $(this).find("mealTime").text();
		object.ingredients = ingredients;
		object.prep = prep;
		object.rating = ($(this).find("name").text())/($(this).find("name").text());
		recipes[i] = object;
		i++;
	});
	
	//Call next function
	DisplayRecipes(recipes, i);
	//$("#listRecipes").append("<li>pew</li>");
}

function SearchRecipes(ingredients, mealTime)
{

}

function GetTrending()
{
	//not needed right now
}

function DisplayRecipes(RecipeList, i)
{
	for(var j = 0; j < i; j++)
	{
		$("#listRecipies").append("<li><a href='" + RecipeList[j].id + "'>" + RecipeList[j].name + "</a>");
	}
}

function AddToFavourites(Recipe)
{
	$.ajax({
		type: "GET",
		url: "./XML/Favourite.xml",
		dataType: "xml",

		success:function(xml){
			xml.find('Recipes').append($(Recipe));
		}
	});
}

function ReadFavourites()
{
	$.ajax({
		type: "GET",
		url: "./XML/favourites.xml",
		dataType: "xml",

		success:function(xml){
			var object;
			$(xml).find("recipe").each(function () {
				var ingredients;
				$(this).find("ingredients").each(function () {
				   var tempIngredient;
					tempIngredient.ingredient=$(this).find("ingredient").text();
					tempIngredient.quantity=$(this).find("quantity").text();
				});
				var i=0;
				var prep;
				$(this).find("ingredients").each(function () {
				   prep[i]=$(this).find("step").text();
					i++;
				});

				object.id = $(this).attr("id").text();
				object.name = $(this).find("name").text();
				object.image = $(this).find("imageLink").text();
				object.description = $(this).find("description").text();
				object.mealTime = $(this).find("mealTime").text();
				object.ingredients = ingredients;
				object.prep = prep;
				object.rating = $(this).find("score").text()
			});

			DisplayRecipes(object);
		}
	});
}

function RateRecipe(Recipe) //missing parameter?
{
	Recipe.rating = rating;
	UpdateRecipe(Recipe);
}

function UpdateRecipe(Recipe)
{
	$.ajax({
		type: "GET",
		url: "./XML/Recipe-main.xml",
		dataType: "xml",

		success:function(xml){
			$(xml).find("recipe").each(function () {
				if ($(this).find("name")==Recipe.name)
					$(this).find("rating").text(Recipe.rating);
			});
		}
	});
}
