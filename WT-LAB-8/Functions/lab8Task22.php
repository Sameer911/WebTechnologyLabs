 <?php

echo "<br>";


if(array_key_exists('valid',$_POST)){ 
  $email = $_POST['email'];

  if(strlen($email) >= 18){
     echo"only 20 characters are allowed - try again"; }

  else{

  $var1 = explode('@', $email);

  if (sizeof($var1) > 2)
    echo "Email should only contain a single \"@\" - try again!";
  elseif(sizeof($var1) <= 1 )
    echo "Email must contain \"@\" - try again! ";

  else{

    if( is_numeric(substr($var1[0], 0, 1)))
      echo "First character should always be an alphabet - try again!";

    else{
      
      if(preg_match('/\s/', $email))
        echo "Email shouldn't contain spaces - try again!";

      else{
        
        $var2 = explode(".", $email);
        if(sizeof($var2) > 3)
          echo "Incorrect domain - use .com, .edu.pk, or co.uk instead.";
        elseif(sizeof($var2) <= 1)
          echo "Email contains no domain - try agan!";
        elseif(sizeof($var2) == 2){
          if($var2[1] == "com"){
            echo "<h2>Email is correct!</h2>";
          }
          else
            echo "Incorrect domain - use .com, .edu.pk, or co.uk instead.";
        }
        elseif(sizeof($var2) == 3){
          if($var2[1] == "edu" && $var2[2] == "pk")
            echo "<h2>Email is correct!</h2>";
          elseif($var2 == "co" && $var2 == "uk")
            echo "<h2>Email is correct!</h2>";
          else{
            echo "Incorrect domain - use .com, .edu.pk, or co.uk instead.";
          }

        }

      }

    }

}

} 
}


?>

<!DOCTYPE html>
<html>
<head>
  <title>
  Email
  </title>
</head>
<body>

  <form method="POST" >
    <input type="text" placeholder="Enter Your Email" name="email" required>
    <input type="submit" value="validate" name="valid">
  </form>
</body>
</html>