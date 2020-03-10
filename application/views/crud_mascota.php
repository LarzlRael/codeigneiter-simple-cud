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
        <a href="" class="navbar-brand">Simple Crud</a>
    </nav>
    <br>

    <div class="container">

        <h3>Esta mascota pertenece a <span class="text-uppercase">
                <i> <?php echo $usuario->firstname . ' ' . $usuario->lastname ?></i>
            </span> </h3>






        <div class="row">
            <div class="col-md-5 offset-3">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?php echo "/CrudController/update_mascota/$row->idmascota" ?>">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre mascota</label>
                                <input type="text" class="form-control" id="" placeholder="Firstname" value="<?php echo $row->nombre_mascota; ?>" name="nombre_mascota">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Direccion</label>
                                <input type="text" class="form-control" id="" placeholder="lastName" name="direccion" value="<?php echo $row->direccion; ?>">
                            </div>
                            <label for="">Cambiar a </label>
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <!-- comenzar aqui -->

                                    <?php foreach ($usuarios as $row) { ?>

                                        <option value="<?php echo $row->id ?>">
                                            <?php echo $row->firstname . ' ' . $row->lastname ?>
                                        </option>

                                    <?php } ?>

                                </select>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="back">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script>
        let back = document.querySelector('#back');
        back.addEventListener('click', () => {
            window.location = '/CrudController'
        })
    </script>
</body>

</html>