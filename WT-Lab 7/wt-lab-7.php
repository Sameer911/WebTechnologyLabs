

<?php 

for($i=1;$i<=50;$i++){

if($i%3==0 && $i%5!=0){

	print($i."STAR"."<br>");
}
if($i%5==0 && $i%3!=0){

	print($i."STRUCK"."\n <br>");
}

if($i%3==0 && $i%5==0){

	print($i."STAR STRUCK"."<br>");
}


}


$var = 'A00';
  for ($i=0; $i<5; $i++)
{
echo ++$var ."<br>";
}



function sum($num) { 
    $sum = 0; 
    for ($i = 0; $i < strlen($num); $i++){ 
        $sum += $num[$i]; 
    } 
    return $sum; 
} 
  


$var = "Sameer";

$alphabetarray = array("hello","man","how","are","you","fish","goku","horse","ink","jug","kite","lamp","map","net","orange","parrot","quit","reboot","sun","televsion","umbrella","vanilla","wampserver","xoro","yellow","zebra");


for($i = 0;$i<6;$i++){
   $st = substr($var, $i,1); 
   
      for($y = 0;$y<26;$y++){
   $wt = substr($alphabetarray[$y],0,1);
     if($st==$wt){
   	echo "<b>$st</b>"." ".$alphabetarray[$y]."<br>";
   }
}
}

    for($i=1;$i<=10;$i++)
    {
        if($i%2==0){
            print($i."<br>");
			if($i=="10"){goto loop;}     }
    }   
	loop:
	print("odd numbers loop <br>");
    for($i=1;$i<=10;$i++)
    {
	if($i%2!=0){ 
	 print($i."<br>");
	}}




for ( $i = 1; $i <= 6; $i++) {
for ( $j = 1; $j <= 6; $j++) {
print(($i * $j) ." ");
}
print("<br>");

}


?>



