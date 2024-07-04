<?php 
  include_once './includes/header.php'; 
?>

<?php

  $frutas = array('manzana', 'melon', 'sandia');
  $verduras = ['calabaza', 'brocoli', 'zanahoria'];

   
  /* 3 productos */
  echo'<pre>';
  var_dump($frutas);
  echo '</pre>';

  /* primer producto */
  echo $frutas[0];

  /* push de producto */
  array_push($frutas, 'pepino');

  /* 4 productos */
  echo'<pre>';
  var_dump($frutas);
  echo '</pre>';

  /* eliminar producto */
  unset($frutas[2]);

  /* 3 productos */
  echo'<pre>';
  var_dump($frutas);
  echo '</pre>';

  /* segundo array */
  echo'<pre>';
  var_dump($verduras);
  echo '</pre>';
?>