<?php
include "cliente.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bombilla LED</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="containerxa">
    <div class="d-grid gap-2" role="group">
        <button type="button" class="btn btn-light btn-lg" name="encender" onclick="document.body.style.background = '<?php $aplicacion->Encender(); ?>'">Encender</button>
        <button type="button" class="btn btn-dark btn-lg" name="apagar" onclick="document.body.style.background = '<?php $aplicacion->Apagar(); ?>'">Apagar</button>
        <button type="button" class="btn btn-warning btn-lg" name="onmedio" onclick="document.body.style.background = '<?php $aplicacion->EncenderMedio(); ?>'">Encender al 50%</button>
        <button type="button" class="btn btn-success btn-lg" name="verde" onclick="document.body.style.background = '<?php $aplicacion->LuzVerde(); ?>'">Color Verde</button>
        <button type="button" class="btn btn-danger btn-lg" name="rojo" onclick="document.body.style.background = '<?php $aplicacion->LuzRoja(); ?>'">Color Rojo</button>
        <button type="button" class="btn btn-primary btn-lg" name="azul" onclick="document.body.style.background = '<?php $aplicacion->LuzAzul(); ?>'">Color Azul</button>
    </div>
    </div>
    <style>
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>