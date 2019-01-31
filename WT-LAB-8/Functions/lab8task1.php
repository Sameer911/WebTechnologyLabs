<!-- /apachi is linux server  -->

<!-- // $_SERVER -->

<?php 

function fact($a){
       
       for ($i=$a; $i>0; --$i) { 
       	       $a = $a*$i;
       }

       return $a;

}


function power($num1,$num2){
     $result = 0;
for ($i=1; $i<$num2 ; $i++) { 
            
            if ($result!=0) {
            	$result = $result*$num1;
            }
            else  {
            $result =  $num1*$num1;
            }
                        
}
       return $result;
}

function digitConvert($digit)
{
    switch ($digit)
    {
        case "0":
            return "zero";
        case "1":
            return "one";
        case "2":
            return "two";
        case "3":
            return "three";
        case "4":
            return "four";
        case "5":
            return "five";
        case "6":
            return "six";
        case "7":
            return "seven";
        case "8":
            return "eight";
        case "9":
            return "nine";
    }}



function sum($num1=null,$num2=null,$num3=null){
 $sum = $num1 + $num2 + $num3;
 return $sum;
}

function mult($num1=null,$num2=null,$num3=null){
 $mult = $num1 * $num2 * $num3;
 return $mult;
}

function sub($num1=null,$num2=null,$num3=null){
 $sub = $num1 - $num2 - $num3;
 return $sub;
}

function division($num1=null,$num2=null,$num3=1){
 $div = $num1 / $num2 / $num3;
 return $div;
}
  
  



function armstrongCheck($num){ 
    $sum = 0;   
    $x = $num;   
    while($x != 0)   
    {   
        $rem = $x % 10;   
        $sum = $sum + $rem*$rem*$rem;   
        $x = $x / 10;   
    }   
      
    // if true then armstrong number 
    if ($num == $sum) 
        return 1; 
      
    // not an armstrong number     
    return 0;     
} 



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <h1>Factorial Resut : </h1>
 <br>
 <h2><?php echo "".fact(5); ?></h2>
 <br>
 <br>
 <br>
<h1>Power Function </h1>

<h2><br><?php echo "".power(2,3); ?></h2>

<br>
<h1> Armstrong Check</h1> <br>
<h2> <?php
$num = 407; 
$flag = armstrongCheck($num); 
if ($flag == 1) 
    echo "True"; 
else
    echo "False"

  ?></h2>

  <h1><?php 
echo " Sum is ".sum(120,12); 
echo " Substraction is ".sub(25,10,10);
echo " Multiplication is ".mult(200,2,1);
echo " Division is ".division(10,2);

   ?></h1>

   <br>
   <h1><?php 
   $int=13579;
$array = str_split($int);
$count=sizeof($array);
for($i=0; $i<$count; $i++){
	echo digitConvert($array[$i]);
} ?> </h1>



  <form method="post">
  	 <label>Name</label> <br>
  	 <input type="text" placeholder="Enter name" name="name"> <br>
  	 <label>Phone Number</label> <br>
  	 <input type="number" placeholder="Enter phone number" name="number"> <br>
  	 <input type="submit" name="submit">
  </form>

  <?php
  if (array_key_exists('submit',$_POST)) {
  	  $name = $_POST['name'];
      $number = $_POST['number'];

      echo "Name : $name <br>"; 
      echo "Phone Number: $number";
  }


  ?>
 </body>
 </html>