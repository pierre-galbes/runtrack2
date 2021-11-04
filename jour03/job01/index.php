<?php

$chiffre=[200, 204, 173,98, 171, 404, 459];

for ($i = 0 ; isset($chiffre[$i]) ; $i++  ) {
      if ($chiffre[$i] %2 == 0){
        echo "$chiffre[$i] est paire <br>";
      }
      else{
        echo "$chiffre[$i] est impair <br>";
      }

}    