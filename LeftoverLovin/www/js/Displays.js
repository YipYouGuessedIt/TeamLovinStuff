$(document).ready(function () {
    //var xmlDoc = $.parseXML("//XML/Recipe-main.xml");
    //$xml = $(xmlDoc);
    function GetAllRecipes()
    {
        var recipes;
        var i = 0;
        $xml = $( $.parseXML("../XML/Recipe-main.xml"));
        $xml.find("recipe").each(function()
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
            object.rating = $(this).find("name").text()/$(this).find("name").text();
            recipes[i] = object;
        });
        
        //Call next function
        DisplayRecipes(recipes);
        //$("#listRecipes").append("<li>pew</li>");
    }

    function SearchRecipes(ingredients, mealTime)
    {

    }

    function GetTrending()
    {
        //not needed right now
    }

    function DisplayRecipes(RecipeList)
    {
        
    }

});
