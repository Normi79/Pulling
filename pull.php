<?php
$persona = ["nombre" => "Pedro",
           "apellido" => "Sánchez",
           "edad" => 50
           ];
          
        foreach ($persona as $valor) {
            echo "$valor <br>";
          }
?>
$persona = ["Marca" => "Pedro",
            "Modelo" => "Sánchez",
           "Año" => 50
           ];
          
        foreach ($auto as $posicion=>$valor) {
            echo "$posicion: $valor <br>";
          }
