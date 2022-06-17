<html>

    <head>

        <title>QATAR</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="styles.css">

    </head>
    <div class="cssanimation sequence elevateRight">
        <h3  style="text-align: center; font-size:40px;">
    <?php 


    echo "Gracias ";
    echo $_POST["Nombre"]; 
    echo nl2br("\n");
    echo "Tu fecha de nacimiento es: ";
    echo $_POST["Fecha"] ;
    echo nl2br("\n");
    echo "Tu pais de origen es: ";
    echo $_POST["Pais"]; 
    echo nl2br("\n");
    echo "Tu seleccion favorita es: ";
    echo $_POST["Seleccion"]; 
    echo nl2br("\n");
    echo "¡Gracias por registrarte nos ayudas mucho con la infromacion que nos proporcionas!";
    ?>
    </div>
    <h3>

    <img src="img/mascota.jpg" height="300px" width="500px" style="margin-left: 20em;" class="jug1">

    <a class="btn btn-secondary" href="index.html">Regresar a la pagina de inicio</button>

</div>
</html>