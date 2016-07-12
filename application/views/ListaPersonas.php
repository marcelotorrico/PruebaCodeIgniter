<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista</title>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/estilos/principal.css"); ?>" />
    </head>
    <body>
        <section class="jumbotron">
            <div class="container">
                <center><h2>Lista de las Personas </h2></center>
            </div>
        </section>
        <br>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($personas as $persona){?>
                        <tr>
                            <td><?php echo $persona->nombre ?></td>
                            <td><?php echo $persona->apellido ?></td>
                            <td><?php echo $persona->edad ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>    
                </table>
            </div>
        </div>
    </body>
</html>