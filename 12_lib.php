<?php 
  include_once './includes/header.php'; 
?>

<?php
    $frutas = ['manzana', 'naranja', 'melon', 'uvas'];

    /* Contar las frutas */
    echo count($frutas);

    echo "<br />";

    $mi_nombre = "Enrique Vinsmake";

    /* ToUpperCase */
    echo strtoupper($mi_nombre);
    echo "<br />";
    /* ToLowerCase */
    echo strtolower($mi_nombre);

    echo "<br />";

    $password = "      passwordpasswordpasswordpasswordpassword    ";

    /* trim - elimina espacios en blanco */
    /* strlen - obtiene el largo */
    if(strlen(trim($password)) < 10) {
      echo "El password es muy debil";
    } else {
      echo "el password es muy fuerte";
    }

?>