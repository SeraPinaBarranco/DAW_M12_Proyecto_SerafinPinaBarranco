<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <!-- <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/cuerpo.css"> -->
    <link rel="stylesheet" href="styles/style_add_product.css">
    <script src="scripts/funciones.js"></script>
</head>
<body>
    <?php include_once("templates/cabecera.html"); ?>


    
        
        <div class="div-form">
            <div class="fila">
                <h2>Añadir producto</h2> 
            </div>
        </div>
        
    
        <div class=" container">
            <form id="formulario" class="form-control" onsubmit="evitarEnvio(event)">
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Nombre" name="nombre">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Calorias" name="calorias">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Grasas" name="grasas">                    
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Hidratos" name="hidratos">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Proteinas" name="proteinas">
                </div>
                <div class="">
                    <button id="guardar" name="guardar">Guardar</button>
                </div>
            </form>    
       </div>
      
    

    <?php include_once("templates/footer.html"); ?>
    
</body>
</html>