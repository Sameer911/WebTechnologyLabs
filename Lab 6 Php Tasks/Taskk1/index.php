<?php 

  echo mb_convert_encoding(
    file_get_contents('http://www.tvrage.com/quickinfo.php?show=Surviver&ep=20x02&exact=0'),
    "HTML-ENTITIES",
    "UTF-8"
  );
// prints e.g. 'Current PHP version: 4.1.1'
echo 'Current PHP version: ' . phpversion();
echo "<br>";
echo php_uname();
echo "<br>";
echo PHP_OS;

echo '<br> Path Of Script  '.getcwd();
echo '<br> Current script owner: ' . get_current_user();

$a = 10;
$b = 5;
echo "<h3> Swapping </h3>";
echo "<br> Before";
echo "<br> Var a : ".$a;
echo "<br> Var b : ".$b;

$c = $a;
$a = $b;
$b = $c;
echo "<br> after";

echo "<br>Var a : ".$a;
echo "<br> Var b : ".$b;

echo "<h3> Link </h3>";
echo  "<a href='www.google.com'>";
echo "Www.google.com</a>";




echo "<br>Tomorrow 'I’ll' learn something new.
This is a bad command: del c:\*.*\$.
";
$var1 = 10;
$var2 = 20;
$var3 = 30;

echo "<br>";
for ($i=0; $i < 50; $i++) { 
	if ($i > $var1 & $i<$var2) {
		echo "".$i;
	}
}


$url = "http://sw.muet.edu.pk/faculty/cvs/sample.pdf";
$scheme = "http";
$host = "www.sw.muet.edu.pk";
$path = "/faculty/cvs/sample.pdf";









echo phpinfo();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
</html>