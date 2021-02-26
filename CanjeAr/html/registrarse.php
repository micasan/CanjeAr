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
	<title>Registrarse - CanjeAr</title>
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
                    <h3>Registrarse</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre de Usuario *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Contraseña *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Registrarse" />
                        </div>
                        <div class="form-group col-center">
                            <a href="#" class="Iniciar Sesion">Iniciar Sesion</a>
                        </div>
                    </form>
                </div>
            </div>
 </div>		
</body>
</html>