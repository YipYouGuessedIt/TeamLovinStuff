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
    Recipe.rating=rating;
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