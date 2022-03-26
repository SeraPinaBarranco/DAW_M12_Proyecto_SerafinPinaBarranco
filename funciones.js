let form = document.getElementById("formulario");



form.addEventListener('submit', function(e){
    e.preventDefault();

    datos = new FormData(form);

    //datos.get('nombre');


    //URL de la peticion
    let url= "controller/guardar_producto.php";
    
    //configurar la peticion
    let configFetch={
        method:"POST",
        body:datos,
        headers:{'Content-Type': 'application/x-www-form-urlencoded'}
    };
    
    //mandar la peticion
    let promesa = fetch(url,configFetch);

    promesa.then( res=> res.json())
            .then(data=>{
                console.log(data.hola)
                
            })
    })

