<?php 
  include_once './includes/header.php'; 
?>


<?php

$frutas = ['manzana', 'melon', 'sandia'];

$estudiante = [
  'id' => 1,
  'nombre' => 'Enrique',
  'apellido' => 'Vinsmake',
  'pais' => 'Mexico',
  'autenticado' => true
];

echo'<pre>';
var_dump($frutas);
echo '</pre>';

echo'<pre>';
var_dump($estudiante);
echo '</pre>';

?>