<!DOCTYPE html>
<html>
<style type="text/css">
	
	.card .imagen{
		margin-right: 10px;
		width: 40%
	}
	.card .imagen img{
		width: 100%
		height: 100%;
        object-fit: cover;
        object-position: center center;
	}

</style>
<head>
    <title>CanjeAr</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
</head>
<body>
	
	<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CanjeAr</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Controllers/cargarlogin.php">Iniciar sesion</a>
        <!--Agregar un menu desplegable de CATEGORIAS-->
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Qué estas buscando?" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
	</header>

			<div class="row">
				<div class="card-group">
				
					<?php foreach ($this->productos as $p) {?>
						<div class="col-md-3">			
						  <div class="card">
						    <img src="<?=$p['imagen']?>" class="card-img-top" alt="...">
						    <div class="card-body">
						      <h5 class="card-title"><?=$p['descripcion']?></h5>
						      <p class="card-text">$<?=$p['precio']?></p>
						      <a href="#" class="btn btn-primary">Comprar</a>
							  <a href="#" class="btn btn-primary">Canjear</a>
						    </div>
						  </div>
						</div>  
					<?php } ?>
				</div>
			</div>

	<script src="js/jquery.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>