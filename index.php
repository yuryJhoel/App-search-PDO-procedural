<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
</head>
<body>
    <div class="navbar navbar-dark bg-dark mb-5">
        <a href="./" class="navbar-brand">Search Country to Database</a>
    </div>
    <div class="card w-25 mx-auto m-auto">
        <div class="card-body">
            <form action="pagina_busquedaPDO.php" method="POST">
                <div class="form-group">
                    <input type="text" placeholder="insert a Nombre" name="pais" class="form-control">
                </div>
                    <input type="submit" value="Search" class="btn btn-success btn-block">
            </form>
        </div>
    </div>
</body>
</html>