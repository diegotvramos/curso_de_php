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
    setcookie("nombre_usuario","juan", time()-1); //esta cookie solo destruye al usuario juan
        session_start(); //reanudamos la session q tenemos abierta.
        session_destroy();
        header("location:login.php");
    ?>
</body>
</html>