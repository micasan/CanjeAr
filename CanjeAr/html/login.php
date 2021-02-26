<?php
    session_start();
    
    

    if(count($_POST) > 0){
            
            //while ($post = each($_POST))
            //{
            //echo $post[0] . " = " . $post[1];
            //}
                
            //validacion
            if(!isset($_POST['usuario'])) die("No ingreso usuario");
            if(strlen($_POST['usuario']) > 60) die("Error de Usuario");
            $usuario = $this->usuario->escape($_POST['usuario']);
            $usuario = str_replace("%", "\%", $usuario);
            $usuario = str_replace("_", "\_", $usuario);

            if(!isset($_POST['password'])) die("No ingreso contraseña");
            if(strlen($_POST['password']) > 12) die("Error de Contraseña");
            $password = $this->usuario->escape($_POST['password']);
            $password = str_replace("%", "\%", $password);
            $password = str_replace("_", "\_", $password);
            $password= sha1($password);

             $this->usuario->query("SELECT *
                                        FROM usuarios
                                        WHERE nombre_usuario = '$usuario'
                                        AND password = '$password'
                                        LIMIT 1");

            if($this->usuario->numRows() == 1){
                $datos = $this->usuario->fetch();
                $_SESSION['login'] = true;
                $_SESSION['nombre_usuario'] = $datos['nombre_usuario'];
                header("location: indexUsuario.php");
                exit;
            }
           
    }
    
?>



<!DOCTYPE html>
<html>
<style type="text/css">

.login-container{
    margin-top: 5%;
    margin-bottom: 5%;
    padding-right: 10%;
   
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 100%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}

.login-form-1 .Registrarse{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
    text-align: center;
}

.col-center{
  float: none;
  margin-left: auto;
  margin-right: auto;
}

</style>
<head>
	<title>Inicio de Sesion</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>



<div class="container login-container">
            <div class="row">
                <div class="col-md-6 col-center login-form-1">
                    <h3>Iniciar Sesion</h3>
                    <form method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Usuario *" value="" name="usuario" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Contraseña *" value="" name="password" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Ingresar" name="Ingresar" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="Registrarse">Registrate</a>
                        </div>
                    </form>
                </div>
            </div>
 </div>		
</body>
</html>