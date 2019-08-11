<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-type" content="text/html" charset="utf-8">
<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("h3").bind("click",function(event){
			ajax({'func':1});
		});
	});

	function ajax(data){
		$.ajax({
			url:'api.php',
			type:"POST",
			data:data,
			dataType:"text",
			error:error,
			success:success
		});
	}

	function error(){
		alert('Error loading data');
	}
	
	function success(result){
		var result =$.parseJSON(result);
		var str='';
		for(var i in result){
			str += '<b>'+ i + '</b>: ' + result[i] + '</br>';
		}
		$('#result').empty();
		$('#result').append(str);
	}
</script>
</head>
<body>
<div>
	<h3 style="cursor: pointer;">Get random user from DB</h3>
</div>
<div id="result"></div>
</body>
</html>