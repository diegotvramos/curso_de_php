<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $db_host="localhost";
        $db_nombre="pruebas";
        $db_usuario="root";
        $db_contra="vill$";

        $conexion= mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

        //pueden ocurrir todo tipo de erres,
       /* if (!$conexion) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
       // mysqli_close($conexion);*/


        //consultas
        $consulta="select * from datospersonales";
        //ejecutamos la consulta
        $resultados=mysqli_query($conexion,$consulta);
        //esta consulta se almacena en un resulced es como un tabla virtual en memoria
        //para poder ver la informacion de esta tabla virtual usamos la funcion mysql_fetch_row
        //lo ve linea por linea y lo almacena en un array
        $fila=mysqli_fetch_row($resultados);//esto es un array.
        //lo imprimimos.
        echo $fila[0]. " ";
        echo $fila[1]. " ";
        echo $fila[2]. " ";
        echo $fila[3]. " ";
    ?>
</body>
</html>