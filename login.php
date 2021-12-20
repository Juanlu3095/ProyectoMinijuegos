<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>

<?php
    if($_POST){
        var_dump($_POST);
        $servidor = "localhost";
        $usuario = "root";
        $contrasena = "";
        $db = new mysqli($servidor,$usuario,$contrasena,"usuarios");
        $db->set_charset('utf8');

        if ($db -> connect_errno) {
            echo "Failed to connect to MySQL: " . $db -> connect_error;
            exit();
          }

        $name = $_POST["nombre"]; // se refiere al name
        $password = $_POST["contrasena"];
        if($name != "" && $password != ""){// si se introduce algo
            $user = $db->query("SELECT Nombre FROM logueo WHERE Nombre = '$name'");
            $contra = $db->query("SELECT Contraseña FROM logueo WHERE Contraseña = '$password'");
            $row_user = $user->num_rows;
            $row_contra = $contra->num_rows;
            if($row_user !=0 && $row_contra !=0){
              echo 'Usuario existente';
            }else{
              echo 'Usuario no existente';
            }
        
        }
        }
        else{
    
?>

    <form name="registro" id="registro" action="" method="post">
        <p>Formulario de registro</p>
        Nombre: <input type="text" name="nombre" id="nombre">
        <br><br>
        Contraseña: <input type="password" name="contrasena" id="contrasena">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        }
        ?>

</body>
</html>
