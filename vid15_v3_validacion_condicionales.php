<style>
        h1{
            text-align:center;
            }

        table{
            background-color:#FFC;
            padding:5px;
            border:#666 5px solid;
            }

        .no_validado{
            font-size:18px;
            color:#F00;
            font-weight:bold;
            }

        .validado{
            font-size:18px;
            color:#0C3;
            font-weight:bold;
            }
</style>

<?php
    if (isset($_POST["enviando"])) { // 'enviando' es el id del voton enviar.
        $edad=$_POST["edad_usuario"];

        if ($edad<=18) {
            echo "Eres menor de edad";
        }elseif ($edad<=40) {
            echo "Eres joven";
        }elseif ($edad<=65) {
            echo "Eres maduro";
        }else {
            echo "cuidate";
        }
    }
?>