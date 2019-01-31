<?php 

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($ceu) ;
foreach($ceu as $country => $capital)
{
	echo "<br>";
echo "The capital of $country is $capital"."\n" ;
echo "<br>";
}


// Second task

$stack=array("1", "2","3","4","5","6");
for($i=0; $i<6; $i++)
echo ($stack[$i]);
array_push($stack, "$", "@","%");
array_shift($stack)."<br>";
echo '<pre>'; print_r($stack); echo '</pre>';


// implode function 

 echo implode(",",range(200,250,4))."\n";

//

 $input = array(8, "8", "3", 5, 3, "3",6,"6",3);
$output = array_unique($input);
print_r($output);


//

$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6),
"holes" => array ( "Second", 5 => "First", "Third"));
echo $color["holes"][5]."\n"; 
echo $color["color"]["c"]."\n";
echo $color["numbers"][1]."\n"; 



//


echo "<br>"."
 Ascending order sort by value
"."<br>";
$array2=array("Sameer"=>"22","usama"=>"41","haider"=>"39","vijay"=>"40"); asort($array2);
foreach($array2 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
"."<br>";
}
echo "<br>";
echo "
 Ascending order sort by Key
";
$array3=array("Sameer"=>"22","usama"=>"41","haider"=>"39","vijay"=>"40"); ksort($array3);
foreach($array3 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
"."<br>";
}
echo "<br>";
echo "
 Descending order sorting by Value
";
$age=array("Sameer"=>"22","usama"=>"41","haider"=>"39","vijay"=>"40");
arsort($age);
foreach($age as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
"."<br>";
}
echo "<br>";
echo "
Descending order sorting by Key
";
$array4=array("Sameer"=>"22","usama"=>"41","haider"=>"39","vijay"=>"40"); krsort($array4);
foreach($array4 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
"."<br>";
} 



 ?>