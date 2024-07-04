<?php 
  include_once './includes/header.php'; 
?>

<?php
  $estudiante = [
    'id' => 1,
    'nombre' => 'Enrique',
    'apellido' => 'Vinsmake',
    'pais' => 'Mexico',

  ];

  echo $estudiante['id'];
  
  echo '.- El estudiante ' 
  . $estudiante['nombre'] 
  . ' ' 
  . $estudiante['apellido'] 
  . ' Del pais ' 
  . $estudiante['pais'];
?>