<!DOCTYPE html>
<html>
	<head>
    	<title>coste tratamiento</title>
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
  background: url(https://www.fotosdelanaturaleza.es/wp-content/uploads/2016/08/atardeceres-fondos-4k-Fotosdelanaturaleza.es-1.jpg);
}

div {
  width: 1430px;
  height: 382px;
}

h2{
 text-align: center;
 font-family: 'Cursive','Lucida Handwriting';
 font-size: 38px;
 text-shadow: 2px 2px 5px lime;
}

.formu {
    background: url(https://image.freepik.com/foto-gratis/pared-azul-cemento-sala-exposicion-fondo-producto-presentacion_28629-876.jpg);
    margin-left: 330px;
    width: 950px;
    height: 400px;
}

label {
  font-family: 'Fantasy','Copperplate';
  font-size: 23px;
  padding-left: 70px;
}

input {
	height: 19px;
}
.texto {
 margin-left: 105px;
 width: 490px;
}

.texto1 {
 margin-left: 168px;
 width: 490px;
}

.texto2 {
 margin-left: 134px;
 width: 490px;
}

button {
    margin-left: 699px;
    border-color: brown;
    background-color: rgba(61, 226, 135, 0.925);
    width: 110px;
    height: 35px;
}
	</style>
	</head>
	<body>
        	<h2>Formulario de Coste del Tratamiento</h2>
        	<br>
        	<div>
		      <blockquote class="formu">
            		<form action="{{ route('tratamiento.store')}}" method="POST">
                	@csrf
                		<br>
                		<br>
                        <label for="id">EXPEDIENTE</label>&nbsp;
                		<input class="texto"  type="text" name="id" value="{{$datos->num_expe}}" required>
                		<br>
                		<br>
                		<label for="nombre">Nombre</label>&nbsp;
                		<input class="texto1"  type="text" name="nombre" value="{{$datos->nombre}}">
                		<br>
                		<br>
                		<label for="apellido">Apellido</label>
                		<input class="texto1"  type="text" name="apellido" value="{{$datos->apellido1}}">
                		<br>
                		<br>
                		<label for="tratamiento">Tratamiento</label>
                		<input class="texto2"  type="text" name="tratamiento" value="{{$datos->tratamiento}}" required>
                		<br>
                		<br>
                		<label for="precio">Precio</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                		<input class="texto1" type="text" name="precio" required>
                		<br>
                		<br>
                		<button type="submit">Guardar Coste</button>
            		</form>
		    </blockquote>
        	</div>
	</body>
</html>
