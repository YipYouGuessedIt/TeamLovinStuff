 var number;
$(document).ready(function()
{
$('input[name=adder]').click(function (e){
			var m = {"Name":$('input[name=fname]').val(),"Unit":$('select[name=unit]').val(),"Ama":$('input[name=amount]').val()};
	var strin = JSON.stringify(m);
	//alert(strin);
	$.ajax({
		type:"post",
		datatype:"json",
		url:"addFridge.php",
		async:true,
		data:{obj3:strin},
		success:function(data)
		{
			//alert(data);
			window.location = "Fridge.php";
			
		},
		error:function(data)
		{
			alert("boo");
		},
	});
});
});