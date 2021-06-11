<!DOCTYPE html>
<html>
	<head>
    	<title>Zona De Administradores</title>
    	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
* {
   margin: 0px 0px 0px 0px;
   padding: 0px 0px 0px 0px;

}
body, html {
    padding: 15px 15px 25px 25px;
}
body {
  background: url(../imagen/Fonadmin.png);
}

div {
  width: 1430px;
  height: 182px;
}

#encabezado {
  background: url(../imagen/title1.png);
}

.titulo {
  color: black;
  font-family: 'Fantasy','critter';
  font-size: 20px;
  text-align: justify;
  padding-left: 180px;
  padding-right: 450px;
}


#parte1 {
  margin-left: 350px;
  background: url(https://www.midepositodental.com/media/amasty/jet_theme/placeholder/default/istockphoto-1141062141-612x612.jpg);
  width: 730px;
  height: 275px;
}

h2{
 text-align: center;
 font-family: 'Cursive','Lucida Handwriting';
 font-size: 28px;
 text-shadow: 2px 2px 5px lime;
}

label {
 padding-left: 125px;
 font-family: 'Cursive','Lucida Handwriting';
 font-size: 24px;
}

.texto {
  width: 290px;
  height: 18px;
}


#enter {
  margin-left: 510px;
  border-color: brown;
  background-color: rgba(61, 226, 135, 0.925);
}

.regresar {
	margin-top: 150px;
    background-image: linear-gradient(red, yellow, red);
    margin-left: 550px;
    width: 205px;
    height: 35px;
}

	</style>
	</head>
	<body>
		<div id="encabezado">
                        <br>
                        <br>
            		<p class="titulo">
                		Grac&iacute;as por formar parte de nuestro personal de profesionales comprometidos con nuestros clientes.
                		<br>
				<br>
				Es un honor y una alegria tener un equipo de trabajo como vosotros, gracias por su
				ayuda y apoyo en nuestro trabajo y la importante labor en la prevenci&oacute;n de la salud
				bucodental.
            		</p>

        	</div>
		<br>
		<br>
		<br>
		<br>
        	<div>
            		<div id="parte1">
                		<br>
                		<br>
                		<h2> INICIA SESION CON TUS CREDENCIALES</h2><br>
                		<form method="POST" action="{{ route('administrador.login') }}">
                        		@csrf
                        		<label>Usuario</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        		<input type="text" name="user" id="user" required maxlength="14" class="texto">
                        		<br>
                        		<br>
                        		<label>Contrase&ntilde;a</label>&nbsp;&nbsp;&nbsp;
                        		<input type="password" name="pwd" id="pwd" required class="texto">
                        		<br>
                        		<br>
                        		<button id="enter" type="submit">Iniciar Sesi&oacute;n</button>
                		</form>
            		</div>
        	</div>
			<br>
			<br>
			<br>
			<br>
			<form action="{{ route('index') }}" method="GET">
					<button class="regresar">Volver a inicio</button>
			</form>
</html>
