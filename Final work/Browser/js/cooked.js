$(document).ready(function()
{
$('input[name=cooked]').click(function (e){

	$.ajax({
		type:"post",
		url:"cooked.php",
		async:true,
		success:function(data)
		{
			//alert(data);
			window.location = "index.php";
			
		},
		error:function(data)
		{
			alert("boo");
		},
	});
});
});