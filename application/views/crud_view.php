<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Codeingneiter crud</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="/" class="navbar-brand">Simple Crud</a>
    </nav>
    <br>
    <div class="container">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevo_usuario_mascota">
            Añadir Usuario y Mascota
        </button>

        
        

    </div>
    <div class="container">
        <div class="col-md-10 offset">
            <table class="table">
                <br><br>
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Nombre mascota</th>
                        <th>Direccion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuario_mascota as $row) { ?>
                        <tr>

                            <td><?php echo $row->lastname; ?></td>
                            <td><?php echo $row->firstname; ?></td>
                            <td><?php echo $row->nombre_mascota; ?></td>
                            <td><?php echo $row->direccion; ?></td>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- tabla de mascotas -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>
                    Mascotas
                </h3>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mascota">
                    Añadir nueva Mascota
                </button>

                <hr>
                <table class="table">
                    <br><br>
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre Mascota</th>
                            <th>Direccion</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mascota as $row) { ?>
                            <tr>

                                <td><?php echo $row->idmascota; ?></td>
                                <td><?php echo $row->nombre_mascota; ?></td>
                                <td><?php echo $row->direccion; ?></td>
                                <td>
                                    <a class="btn btn-info" href="<?php echo "/CrudController/editMascota/$row->idmascota/$row->idusuario" ?>">
                                        EDITAR</a>
                                    <a class="btn btn-danger" href="<?php echo "/CrudController/delete_mascota/$row->idmascota" ?>">Eliminar</a>
                                    
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h3>Usuarios</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevo_usuario">
                    Agregar usuarios
                </button>
                <hr>
                <table class="table">
                    <br><br>
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Fecha de nacimento</th>
                            <th>Numero de contacto</th>
                            <th>Accion</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>

                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->lastname; ?></td>
                                <td><?php echo $row->firstname; ?></td>
                                <td><?php echo $row->birthdate; ?></td>
                                <td><?php echo $row->contacto; ?></td>

                                <td>
                                    <a class="btn btn-info" href="<?php echo "/CrudController/edit/$row->id" ?>">
                                        EDITAR</a>
                                    <a id="eliminar_usuario" class="btn btn-danger" href="<?php echo "/CrudController/delete_user/$row->id" ?>">Eliminar</a>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="nuevo_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form method="post" action="/CrudController/create">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control" id="" placeholder="Nombre" name="firstname">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Apellido</label>
                            <input type="text" class="form-control" id="" placeholder="Apellido" name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="" placeholder="Fecha de nacimiento" name="birthdate">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Numero de contacto</label>
                            <input type="text" class="form-control" id="" placeholder="Numero de contacto" name="contacto">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Descripcion</label>
                            <input type="text" class="form-control" id="" placeholder="Descripcion" name="bio">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>

                    </form>


                </div>

            </div>
        </div>
    </div>
    <!-- inicio del formulario -->

    <!-- modal del la mascota -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="mascota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form method="post" action="<?php echo "/CrudController/nueva_mascota/" ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre de la mascota</label>
                            <input type="text" class="form-control" id="" placeholder="Mascota " name="nombre_mascota">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Direccion</label>
                            <input type="text" class="form-control" id="" placeholder="Direccion" name="direccion">
                        </div>

                        <!-- accion para seleccion un usuarios -->

                        <h5>Pertenece a : </h5>
                        <select name="idusuario" id="" class="form-control">
                            <?php foreach ($result as $row) { ?>
                                <option value="<?php echo $row->id ?>">
                                    <?php echo $row->firstname.' '.$row->lastname ?>
                                </option>
                            <?php } ?>
                        </select>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
                            <button type="submit" class="btn btn-primary">Guardar Datos</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


    <!--  -->

    <div class="modal fade" id="nuevo_usuario_mascota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="/CrudController/agregar_mascota_usuario">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control" id="" placeholder="Nombre" name="firstname">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Apellido</label>
                            <input type="text" class="form-control" id="" placeholder="Apellido" name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="" placeholder="Fecha de nacimiento" name="birthdate">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Informacion de contacto</label>
                            <input type="text" class="form-control" id="" placeholder="Contacto" name="contacto">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Descripcion</label>
                            <input type="text" class="form-control" id="" placeholder="Descripcion" name="bio">
                            <hr>
                            <h2>Datos mascota</h2>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre mascota</label>
                                <input type="text" class="form-control" id="" placeholder="Nombre de la mascota" name="mascota">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Direccion</label>
                                    <input type="text" class="form-control" id="" placeholder="direccion" name="direccion">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                    </form>

                </div>

            </div>
        </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <script>
        let eliminar_usuario = document.querySelector("#eliminar_usuario");
        eliminar_usuario.addEventListener('click', function(e) {
            
            if((confirm('¿Esta seguro que quiere eliminar este registro?\n(se van a borrar tambien sus mascotas)'))){
                alert('Usuario eliminado')
            }else{
                e.preventDefault();
            }
        });
    </script>
</body>

</html>