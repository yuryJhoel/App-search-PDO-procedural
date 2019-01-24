<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO</title>
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
</head>
<body>
<div class="navbar navbar-dark bg-dark mb-5">
        <a href="./" class="navbar-brand">Search Country to Database</a>
    </div>
    <table class="table bordered w-50 m-auto mt-5">
        <thead>
            <th>Usuario</th>
            <th>Edad</th>
            <th>País</th>
        </thead>
        <tbody>
    <?php
        $pais = $_POST['pais'];
        try {
            $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');    
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");
            $sql = "SELECT nombre,edad,pais FROM usuarios WHERE pais=?";
            $resultado = $base->prepare($sql); #de tipo PDOStatement
            $resultado->execute(array($pais));
            while($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
?>
                <tr>
                    <td><?=$registro['nombre']?></td>
                    <td><?=$registro['edad']?></td>
                    <td><?=$registro['pais']?></td>
                </tr>

<?php }
            $resultado->closeCursor();

        }catch(Exception $e){
            die('Error: '. $e->GetMessage());
        }finally{
            $base = null;
        }

    ?>
</body>
</html>