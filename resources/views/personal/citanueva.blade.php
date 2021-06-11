<!DOCTYPE html>
<html>
	<head>
    	<title>Creaci&oacute;n De Citas</title>
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
  background: url(https://thumbs.dreamstime.com/b/las-paredes-de-m%C3%A1rmol-del-piso-tienen-color-marr%C3%B3n-brillante-fondos-hermosos-120024552.jpg);
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
    background: url(https://cdn.shopify.com/s/files/1/2777/7328/files/utensilios_limpieza_interdental.jpg);
    margin-left: 330px;
    width: 950px;
    height: 565px;
	opacity: 0.85;
}

label {
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  font-size: 23px;
  padding-left: 70px;
  color: black;
}

input {
	height: 19px;
}
.texto {
 margin-left: 95px;
 width: 490px;
}

.texto1 {
 margin-left: 212px;
 width: 490px;
}

.texto2 {
 margin-left: 148px;
 width: 490px;
}

.seleccion {
    margin-left: 120px;
    padding-right: 25px;
	height: 19px;
}

.texto3 {
 margin-left: 58px;
 width: 490px;
}

button {
    margin-left: 720px;
    border-color: brown;
    background-color: rgba(153, 17, 17, 0.781);
    width: 85px;
    height: 40px;
}

textarea {
    margin-left: 305px;
	width: 490px;
}

	</style>
	</head>
	<body>
        	<h2>Formulario de Tratamientos</h2>
        	<br>
        	<div>
		      <blockquote class="formu">
            		<form action="{{ route('cita.edit')}}" method="POST">
                	@csrf

					@method('put')
                		<br>
                		<br>
                		<br>
						<label for="numero">Identificador</label>&nbsp;&nbsp;
                		<input class="texto"  type="text" name="numero" value="{{$cita->id}}" required>
                		<br>
						<br>
                        <label for="id">ID Cliente</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                		<input class="texto"  type="text" name="id" value="{{$busca->num_expe}}" required>
                		<br>
                		<br>
                		<label for="nombre">Nombre</label>&nbsp;
                		<input class="texto2"  type="text" name="nombre" value="{{$busca->nombre}} {{$busca->apellido1}}">
                		<br>
                		<br>
						<label for="radio">Nueva Radiogr&aacute;fia</label>
                		<input class="texto3"  type="text" name="radio" value="{{$cita->num_radiogra}}" required>
						<br>
						<br>
                		<label for="tratami">Tratamiento</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                		<input class="texto"  type="text" name="tratami" value="{{$cita->tratamiento}}" required>
                		<br>
                		<br>
						<label for="descripcion">Descripci&oacute;n</label>&nbsp;
						<br>
                		<textarea name="descripcion" id="descripcion" rows="10" required>
						{{$cita->descripcion}}
                        </textarea>
                		<br>
                		<br>
                		<button type="submit">Actualizar Expediente</button>
            		</form>
		    </blockquote>
        	</div>
	</body>
</html>