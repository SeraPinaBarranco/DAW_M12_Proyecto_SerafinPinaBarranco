<?php
    $s = "Hola";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/cuerpo.css">
    
    <title>Document</title>

</head>
<body>
    
<?php
    include_once("templates/cabecera.html"); 
?>

<div class="container">
    <div class="div1">
        
        <ul class="list-group list-group-flush mt-5">
            <li class="list-group-item fs-2"><a href="add_product.html">Mis alimentos</a></li>
            <li class="list-group-item fs-2"><a href="#">Mis recetas</a></li>
            <li class="list-group-item fs-2"><a href="#">Mis estadisticas</a></li> 
        </ul>
    
    </div>
    <div class="div2">
        <img src="assets/alimentos.gif" alt="">
    </div>

</div>

<!-- <div class="row">
    <div class="col-sm-6">
        <div class="card">
            
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Mis alimentos</li>
                    <li class="list-group-item">Mis recetas</li>
                    <li class="list-group-item">Mis estadisticas</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-6 position-relative card-imagen">
        <div class="card">
            <img src="assets/alimentos.gif" class="imagen-central card-img-top" alt="...">
        </div>
    </div>
</div> -->

<?php
    include_once("templates/footer.html");

?>
</body>
</html>


  