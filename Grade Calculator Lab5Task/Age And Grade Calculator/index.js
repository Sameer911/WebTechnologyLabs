<!DOCTYPE html>
<html>

<head>
	<title></title>
<script type="text/javascript">
	
function onClick(){

var marks = document.getElementById('text').value;

document.getElementById("text").innerHTML = marks + 10;

}



</script>



</head>
<body>
<input type="text" id="text"/>
<input type="button" value="Submit" onclick="onClick();">
<input type="text" name="" >
</body>
</html>