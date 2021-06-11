<!DOCTYPE html>
<html>
	<head>
    	<title>Solicitud De Citas</title>
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
  background: url(../imagen/foncitas.png);
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
    background: url(https://png.pngtree.com/thumb_back/fw800/back_our/20190621/ourmid/pngtree-dental-health-board-background-image_174798.jpg);
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
 margin-left: 8px;
 width: 490px;
}

.seleccion {
    margin-left: 120px;
    padding-right: 25px;
	height: 19px;
}

.envio {
    margin-left: 699px;
    border-color: brown;
    background-color: rgba(61, 226, 135, 0.925);
    width: 70px;
    height: 30px;
}

#piefun{
        background: rgba(0, 255, 46, 0.4);
        width: 1435px;
        height: 190px;
}

.pie{
        text-align:  center;
        font-family: 'Fantasy','Copperplate';
        font-size: 32px;
        color: green;

}

.pie1{
        float: right;
        font-family: 'Fantasy','Copperplate';
        font-size: 18px;}
#pie1 img{
        border-radius: 50%;
}
#pie2 img{
        border-radius: 50%;
}
#pie3 img{
        border-radius: 50%;
}

	</style>
	</head>
	<body>
        	<h2>Formulario de citas</h2>
        	<br>
        	<div>
		      <blockquote class="formu">
            		<form action="{{ route('contacto.store')}}" method="POST">
                	@csrf
                		<br>
                		<br>
                		<br>
                		<label for="nombre">Nombre</label>&nbsp;
                		<input class="texto"  type="text" name="nombre" id="nombre" placeholder="Escriba su nombre" required>
                		<br>
                		<br>
                		<label for="apellido">Apellido</label>
                		<input class="texto"  type="text" name="apellido" id="apellido" placeholder="Escriba su apellido"  required>
                		<br>
                		<br>
                		<label for="telefono">Telefono</label>
                		<input class="texto"  type="tel" name="telefono" id="telefono" placeholder="Numero de teléfono" required>
                		<br>
                		<br>
                		<label for="ciudad">Ciudad</label>
                		<select class="seleccion" name="ciudad" id="ciudad" required>
                    			<option></option>
                    			<option value="sevilla">Sevilla</option>
                    			<option value="madrid">Madrid</option>
                    			<option value="barcelona">Barcelona</option>
                		</select>
                		<br>
                		<br>
                		<label for="correo">Correo Electr&oacute;nico</label>&nbsp;
                		<input class="texto1" type="email" name="correo" id="correo" placeholder="tu correo">
                		<br>
                		<br>
                		<input class="envio" type="submit" name="Enviar" value="enviar">
            		</form>
		    </blockquote>
        	</div>
        	<br>
        	<br>
        	<br>
        	<br>
        	<div id="piefun">
            		<h4 class="pie">Siguenos en nuestras redes sociales</h4>&nbsp;&nbsp;&nbsp;
            		<a id="pie1" href="https://www.facebook.com/clinicafriedlanderbcn/">
                    	<img src="imagen/Facebook.png">
            		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            		<a  id="pie2" href="https://twitter.com/clinicaqboca">
                    	<img src="imagen/twitter.png">
            		</a>&nbsp;&nbsp;&nbsp;
            		<a id="pie3" href="https://es-es.facebook.com/clinicas.dentales.716">
                    	<img src="imagen/Instagram.png">
            		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            		<p class="pie1"><em>
                            Nos podras visitar en:
                            <br>
                            Sevilla:
                            <br>
                            Av. San Francisco Javier, 20, 41018
                            <br>
                            Barcelona:
                            <br>
                            C/ d'Aragó, 406, 408, 08013 Barcelona, B
                            <br>
                            Madrid:
                            <br>
                            Plaza del Callao, 2, 28013 Madrid
            		</em></p>
	        </div>
	</body>
</html>
