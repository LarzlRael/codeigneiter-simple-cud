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


        <div class="row">
            <div class="col-md-5 offset-3">
                <form method="post" action="<?php echo "/CrudController/update_mascota/$row->idmascota" ?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre mascota</label>
                        <input type="text" class="form-control" id="" placeholder="Firstname" value="<?php echo $row->nombre_mascota; ?>" name="nombre_mascota">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Direccion</label>
                        <input type="text" class="form-control" id="" placeholder="lastName" name="direccion" value="<?php echo $row->direccion; ?>">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                </form>

            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>