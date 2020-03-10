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
        <h1 class="text-uppercase">
            <?php echo $row->firstname ?> <?php echo $row->lastname ?>
        </h1>
    </div>
    <div class="container">


        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?php echo "/CrudController/update/$row->id" ?>">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre</label>
                                <input type="text" class="form-control" id="" placeholder="Nombre" value="<?php echo $row->firstname; ?>" name="firstname">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Apellido</label>
                                <input type="text" class="form-control" id="" placeholder="Apellido" name="lastname" value="<?php echo $row->lastname; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="" placeholder="Birthdate" name="birthdate" value="<?php echo $row->birthdate; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Numero de contacto</label>
                                <input type="text" value="<?php echo $row->contacto; ?>" class="form-control" id="" placeholder="Numero de contacto" name="contacto">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">descripcion</label>
                                <input type="text" class="form-control" value="<?php echo $row->bio; ?>" id="" placeholder="Bio" name="bio">
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="back">Volver</button>
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
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
            window.location='/CrudController'
        })
    </script>
</body>

</html>