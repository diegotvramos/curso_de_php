<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
    <form action="comprueba_login.php" method="post"> <!--se escribe method-->
        <div class="text-center text-primary mb-4 col">
            <h5 class="fw-bold">INICIO DE SECIÓN</h5>
        </div>
        <div class="row mb-3">  
            <label for="username" class="col-sm-2 col-form-label">USUARIO</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username">
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">PASSWORD</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="enviar">CONTINUAR</button>
    </form>
    </div>
    
</body>
</html>

<!-- 
    PARA ALINEACION DE TEXTO
    https://getbootstrap.com/docs/5.2/utilities/text/#text-alignment

    PARA EL FORMULARIO
    https://getbootstrap.com/docs/5.0/forms/layout/ 

    PARA COLOR DE TEXTO
    https://getbootstrap.com/docs/5.2/utilities/colors/#conveying-meaning-to-assistive-technologies

    KIKO YOUTUBE
    https://www.youtube.com/watch?v=jGcMtvTYsGg

    ROW significa FILA
     2 +10 = 12 EL TOPE ES 12

    PARA EL CONTENEDOR
    https://getbootstrap.com/docs/5.2/layout/containers/#default-container

    BARA DE NAVEGACION.
    https://getbootstrap.com/docs/5.2/components/navbar/#external-content

-->