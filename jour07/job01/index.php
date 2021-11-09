<?php
session_start();

if(isset($_GET['reset'])){
  session_destroy();
  echo '0';
}
else{
  if (!isset($_SESSION['nbvisites'])){
      $_SESSION['nbvisites'] = 0;
    }
    else {
      $_SESSION['nbvisites']++;
    }
    echo $_SESSION['nbvisites'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="" method="get">
<input type="submit" name="reset">
</form>
</body>
</html>

