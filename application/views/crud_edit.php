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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add User
        </button>
    </div>
    <div class="container">


        <form method="post" action="<?php echo "/CrudController/update/$row->id"?>">
            <div class="form-group">
                <label for="exampleFormControlInput1">Firstname</label>
                <input type="text" 
                class="form-control" 
                id="" placeholder="Firstname" 
                value="<?php echo $row->firstname; ?>"
                name="firstname">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">LastName</label>
                <input 
                type="text" 
                class="form-control"
                id="" placeholder="lastName"
                name="lastname"
                value="<?php echo $row->lastname; ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Birthdate</label>
                <input type="date" 
                class="form-control" 
                id=""
                placeholder="Birthdate"
                name="birthdate"
                value="<?php echo $row->birthdate; ?>"
                >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Contacto info</label>
                <input type="text"
                value="<?php echo $row->contacto; ?>"
                class="form-control" id="" placeholder="Contact" name="contacto">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Bio</label>
                <input type="text" class="form-control" 
                value="<?php echo $row->bio; ?>"
                id="" placeholder="Bio" name="bio">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

        </form>



    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>