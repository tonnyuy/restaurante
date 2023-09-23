<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
      background-image: url('https://th.bing.com/th/id/R.f7647c31cbd87bf83918d5f498a8ad10?rik=nmTTP13CPXsSdg&pid=ImgRaw&r=0');
      background-size: cover; 
      background-repeat: no-repeat; 
    }
   
  </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>



        <div id="wrapper" class="container">
  
                
                 <center>

                    <h1>BIENVENIDOS A RESTAURANTE LA DINASTIA DEL SABOR</h1><hr>
                        <form  method="POST" name="form-work" action="/RESTAURANTES/Restaurante/registrar.php">
                    
                                <fieldset>

                                <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nome">identificacion</label>
                                      <input name="id" class="form-control" placeholder="tu identificacion" type="text">
                                      </div>
                                    </div>


                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nome">Nombre</label>
                                      <input name="nombre" class="form-control" placeholder="Tu nombre" type="text">
                                      </div>
                                    </div>
                          
                                  <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Apellido</label>
                                        <input name="apellido" class="form-control" placeholder="Tu apellido" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">tipo de usuario</label>
                                        <input name="tipo_usuario" class="form-control" placeholder="cliente o admin" type="text">
                                      </div>
                                    </div>
               
                                    <div class="form-group">
                                      <div class="actualizar">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block info">registrarse</button>
                                       
                                      </div>
                                    </div>    
           
                                </fieldset> 
                              </form>
                            
                              <button onclick=location.href="/RESTAURANTES/Restaurante/LOGGIN/entrada.html" type="submit" class="btn btn-primary btn-lg btn-block info">iniciar sesion</button>
                              
                 </center>
              </div>
    




</body>
</html>