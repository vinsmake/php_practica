<?php 
  include_once './includes/header.php'; 
?>

<?php
  class Cliente {
      public function __construct($nombre)
      {
        $this->nombre = $nombre;
      }

      public function mostrar_nombre() {
        echo "El nombre es " . $this->nombre;
      }
  }

  $cliente = new Cliente("Vinsmake");
  $cliente->mostrar_nombre();

  $cliente2 = new Cliente("Enrique");
  $cliente2->mostrar_nombre();
?>