var number;
$(document).ready(function()
{
$('a.main').click(function (e){
	
	var m = {"id":$(this).attr("id")};
	var strin = JSON.stringify(m);
	$.ajax({
		type:"post",
		datatype:"json",
		url:"showRecipe.php",
		async:true,
		data:{obj:strin},
		success:function(data)
		{
			//alert(data);
			window.location = "instruction.php";
		},
		error:function(data)
		{
			alert("boo");
		},
	});
});

});