<?php 
  include_once './includes/header.php'; 
?>

<?php

  for ($i=0; $i <= 100; $i++) { 
  
    if($i == 10) {
      echo 'El numero es DIEZ' . '</br>';
      continue;
    }

    echo 'El numero es ' . $i . '</br>';
    
    if($i == 99) {
      echo 'El 99 es el numero maximo a iterar' . '</br>';
      break;
    }
  }

?>