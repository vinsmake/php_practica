<?php
include_once './includes/header.php';
?>

<?php

$estudiante = [
  'id' => 1,
  'nombre' => 'Enrique',
  'apellido' => 'Vinsmake',
  'pais' => 'Mexico',
  'autenticado' => true
];

echo
'<h1>'

  . 'Hola '
  . $estudiante['nombre']
  . ' De '
  . $estudiante['pais']

  .
  '</h1>'


?>

<h1>
  Hola!
  <?php
  echo $estudiante['nombre'];
  ?>
  De
  <?php
  echo $estudiante['pais'];
  ?>
</h1>