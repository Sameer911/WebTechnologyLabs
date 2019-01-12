<!DOCTYPE html>
<html>


<?php 

echo "This Message Is From Php Code ";



 ?>
<head>
	<title></title>

<style type="text/css">
		*{
		box-sizing: border-box;
		margin: 0;
		padding: 0;
	}


.container{
	position: fixed;
	  top: 25%;
    left: 35%;
    width:30em;
    height:18em;
    border: 1px solid blue;
}

</style>



<script type="text/javascript">

var marks ="";



function onClick(){



var marks = document.getElementById('text').value;

if (marks>=85) {
	alert("Your marks Are "+marks+" Grade Is A+");
}
else if(marks>=80 && marks<=84){
alert("Your marks Are "+marks+" Grade Is A");	
}
else if(marks>=75 && marks<=79){
	alert("Your marks Are "+marks+" Grade Is B");
}else if(marks>=70 && marks<=74){
	alert("Your marks Are "+marks+" Grade Is B+");
}else if(marks>=65 && marks<=69){
	alert("Your marks Are "+marks+" Grade Is C+");
}else if(marks>=55 && marks<=64){
	alert("Your marks Are "+marks+" Grade Is C");
}else if(marks>=50 && marks<=54){
	alert("Your marks Are "+marks+" Grade Is D+");
}
else {
         alert("Your are Fail with "+marks+" marks");	
}


}

function AgeCal(){
var age = document.getElementById('agetext').value;
echo(age);
// switch(age){

// case "1":
// case "2":document.getElementById('label').innerHtml = "You Are Child" break;
// default:
// document.getElementById('label').innerHtml = "i dont know"; break;

// }


}



</script>



</head>
<body>
<div class = "container">
<h1>  Grade Calculator  </h1>
<br>	
<label>Enter Your Marks :</label>
<input type="text" id="text"/>
<input type="button" value="Submit" onclick="onClick()">
<br>
<br>
<br>	
<h1>Age Calculator</h1>
<br>
<label>Enter Your Age :</label>
<input type="text" id="agetext"/>
<input type="button" value="Submit" onclick="AgeCal()">
<label id="label"></label>
</div>
</body>
</html>