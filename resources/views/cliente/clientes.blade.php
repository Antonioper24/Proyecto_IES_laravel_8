<!DOCTYPE html>
<html>
	<head>
    	<title>Consultas de Clientes</title>
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
  background: url(../imagen/fonclientes.png);
}

div {
  width: 1430px;
  height: 282px;
}

h2{
 text-align: center;
 font-family: 'Cursive','Lucida Handwriting';
 font-size: 38px;
 text-shadow: 2px 2px 5px lime;
}

.formu {
    background: url(https://i.pinimg.com/originals/00/86/14/008614696c547e027504e02329402ab8.jpg);
    margin-left: 230px;
    width: 950px;
    height: 300px;
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
 margin-left: 23px;
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


.pie1{
  float: right;
  font-family: 'Fantasy','Copperplate';
  font-size: 18px;
}

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
       		<h2>Formulario de Consultas</h2>
        	<br>
        	<div>
            		<blockquote class="formu">
                		<form action="{{ route('cliente.create') }}" method="POST">
                   			 @csrf
                    			<br>
                    			<br>
                    			<br>
                    			<label for="nombre">Nombre</label>&nbsp;
                    			<input class="texto"  type="text" name="nombre" id="nombre" placeholder="Escriba su nombre" required>
                    			<br>
                    			<br>
                    			<label for="expediente">Num. Expediente</label>
                    			<input class="texto1"  type="text" name="expediente" id="expediente" placeholder="numero de expediente" maxlength="15" required>
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
        	    		</em>
			</p>
		</div>
	</body>
</html>
