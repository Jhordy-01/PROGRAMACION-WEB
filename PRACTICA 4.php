<!DOCTYPE html>
<html lang="es">
    <head>
         <meta charset="utf-8">
         <title>Numero Par e Impar en PHP</title>
    </head>
    <body>
          <?php
            $numero = 7;
            // VERIFICAR SI EL NUMERO EL PAR O IMPAR
            if ($numero % 2 == 0) {
            echo "El numero $numero es par."; 
            }else {
            echo " El numero $numero es impar.";
            }
          ?>    
    </body>
</html>