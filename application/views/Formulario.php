<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de Asistencia</title>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/estilos/principal.css"); ?>" />
    </head>
    <body>
        <section class="jumbotron">
            <div class="container">
                <center><h2>Registro de una Persona </h2></center>
            </div>
        </section>
        <br>
        <div class="container">
            <form action="http://localhost/PruebaCodeigniter/index.php/RegistroPersona/registrar" method="post">
                <div class="row">
                    <div class="col-md-9">
                        <div class ="form-group formulario">
                            <div class="input-group">
                                <label class="input-group-addon addonGroup required" for="Nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" required="required" placeholder="Ingrese el nombre" 
                                       class="form-control input-inline form" title="Nombre del empleado" pattern=".*[A-Z]{1}[a-zñáéíóú]{2,20}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class ="form-group formulario">
                            <div class="input-group">
                                <label class="input-group-addon addonGroup required" for="Nombre">Apellido:</label>
                                <input type="text" id="apellido" name="apellido" required="required" placeholder="Ingrese el apellido" 
                                       class="form-control input-inline form" title="Ingrese el apellido" pattern=".*[A-Z]{1}[a-zñáéíóú]{2,20}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class ="form-group formulario">
                            <div class="input-group">
                                <label class="input-group-addon addonGroup required" for="Nombre">Edad:</label>
                                <input type="text" id="edad" name="edad" required="required" placeholder="Ingrese la edad" 
                                       class="form-control input-inline form" title="Ingrese la edad de la persona">
                            </div>
                        </div>
                    </div>
                </div>
                <div class ="form-group formulario">
                    <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"> Registrar</button>
                </div>
            </form>
        </div>
    </body>
</html>