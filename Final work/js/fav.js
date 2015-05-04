var number;
$(document).ready(function()
{
$('a[name=moop]').click(function (e){
			var m = {"id":$(this).attr("id")};
	var strin = JSON.stringify(m);
	$.ajax({
		type:"post",
		datatype:"json",
		url:"addfav.php",
		async:true,
		data:{obj2:strin},
		success:function(data)
		{
			//alert(data);
			
		},
		error:function(data)
		{
			alert("boo");
		},
	});
});
});