<!DOCTYPE html>
<html>
	<head>
    	<title>Dental Clean&Fresh</title>
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
  background: url(../imagen/portadas.png);
}

#encabezado{
        background: url(../imagen/encabezado.png);
        position: relative;
        z-index: 100;
        float: center;
        width: 1428px;
        height: 190px;
}

nav{
        float: right;

}

nav ul{
        margin: 0px;
       padding-top: 150px;
}

nav ul li{
        display: inline-block;
        font-family: 'Muli', sans-serif;
        font-size: 18px;
        line-height: 20px;
        margin-right: 50px;
}

nav ul li a{
        text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: lima;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: yellow;}

.dropdown:hover .dropdown-content {
  display: block;
}

#cuerpo1{
        background: url(../imagen/imagenes.png);
        width: 1428px;
        height: 198px;
}

.titulo {
        color: navy;
        font-family: 'Fantasy','critter';
        font-size: 28px;
        text-align: center;
}

p{
        color: black;
        font-family: 'Fantasy','critter';
        font-size: 19px;
        text-align: center;
}


.mostrar {
        font-family: 'Monospace','courier';
        font-size: 19px;
        text-align: center;
        text-decoration: none;
}

blockquote{
  width: 702px;
  height: 350px;
  background: url(../imagen/instalacion.png);
  animation-name: imagenes;
  animation-duration: 8s
}

@keyframes imagenes{
   0%     {background: url(../imagen/instalacion.png);}
   25%    {background: url(../imagen/instalacion1.png);}
   50%    {background: url(../imagen/instalacion2.png);}
   75%     {background: url(../imagen/instalacion1.png);}
   100%    {background: url(../imagen/instalacion2.png);}
}

.cuerpo2 {
        text-align:  center;
        font-family: 'Fantasy','Copperplate';
        font-size: 19px;
        width: 700px;
        padding-left: 720px;
        color: blue;


}


.cuerpo3 {
        text-align: justify;
        font-family: 'Cursive','Lucida Handwriting';
        font-size: 19px;
        width:700px;
        padding-left: 720px;
}
.cuerpo4 {
	width:1430px;
}
.tabla1 img {
    width: 98px;
    height: 100px;
    border-radius: 50%;
}

.sintaxis {
        text-align:  center;
        font-family: 'Fantasy','Copperplate';
        font-size: 19px;
        color: blue;
        border: 3px solid red;
	background-color: rgba(255, 99, 71, 0.4);
}

#piefun{
        background: rgba(0, 255, 46, 0.4);
	width: 1435px;
	height: 190px;
}

.pie{
        text-align:  center;
        font-family: 'Fantasy','Copperplate';
        font-size: 29px;
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
	    <header id="encabezado">
          	<nav>
              	<ul>
                    <li><a href="{{ route('clientes') }}">Zona Cliente</a></li>
                    <li class="dropdown">
					<a  href="{{ route('doctores') }}" class="dropbtn">Zona Doctores</a>
					<div class="dropdown-content">
						<a href="{{ route('administrador') }}">Administrador</a>
					</div>
		    		</li>
                    <li><a  href="{{ route('contactos') }}">Contactos</a></li>
               	</ul>
            </nav>
        </header>
        </br>
        </br>
        <div id="cuerpo1">
            <h2 class="titulo">Porque sabemos que sonreir es salud</h2>
            </br>
            <p>Por lo que este a&ntilde;o tienes un 30% de descuento en todo los tratamiento.</p>
            </br>
            <p class="mostrar"><b><a href="{{ route('citas') }}"> Solicita una cita </a></b></p>
            </br>
            <p> Y recuerda cuida de los tuyos utilizando mascarilla, ya que con tu ayuda saldremos adelante.</p>
        </div>
        </br>
        </br>
        <blockquote>
        	<h2 class="cuerpo2">¿Quienes somos?</h2>
        	<p class="cuerpo3">
        		Somos una empresa especializada en servicios dentales integrales que ofrece los tratamientos m&aacute;s innovadores.
			Nos comprometemos con nuestros clientes, para mejorar su salud dental,
        		contamos con un equipo cualificado y comprometido para hacer de sus sonrisas una felicidad. Ofrecemos 
        		tratamientos con calidad garantizada y personalizadas. En Clean&Fresh queremos que confien plenamente en
        		nosotros, ayud&aacute;ndote y acompa&ntilde;&aacute;ndote.
			<br>
			<br>
			En Clean&Fresh trabajamos desde el primer d&iacute;a que contratas uno de nuestros servicios, llevando un control
     			de todos tus tratamientos, adem&aacute;s podras consultar en todo momento tus tratamientos, fechas de citas, entre otras cosas, en 
			nuestra p&aacute;gina web.
			<br>
			<br>
			Ven y Vis&iacute;tanos en nuestra sucursales Sevilla, Madrid o Barcelona.
        	</p>
        </blockquote>
        </br>
    	</br>
        <table class="cuerpo4">
        	<tr>
        		<td>
        			<table>
        				<tr>
        					<th class="tabla1"><img src="imagen/parte1.png"></th>
        					<th>
        						<table class="sintaxis">
        							<tr> 
        								<th><h2> Endodoncia </h2></th>
        							</tr>
        							<tr>
			        					<td> Utilizamos la m&aacute;s avanzada tecnolog&iacute;a en nuestros tratamientos.<td>
        							</tr>
        							<tr>
       									<td><a href="{{ route('endodoncia') }}"> + Informaci&oacute;n </a></td>
       								</tr>
        						</table>
	    					</th>
	    				</tr>
        			</table>
        		</td>
        		<td>
        			<table>
                            <tr>
                                <th class="tabla1"><img src="../imagen/parte2.png"></th>
               	                <th>
                                    <table class="sintaxis">
       									<tr>
        									<th><h2> Ortodoncia </h2></th>
        								</tr>
        								<tr>
        									<td> Consigue una sonrisa fel&iacute;z con nuestro tratamiento.</td>
        								</tr>
        								<tr>
        									<td><a href="{{ route('ortodoncia') }}"> + Informaci&oacute;n </a></td>
        								</tr>
        							</table>
								</th>
							</tr>
					</table>
        		</td>
        		<td>
        			<table>
                        <tr>
                 	        <th class="tabla1"><img src="../imagen/parte3.png"></th>
                            <th>
                                <table class="sintaxis">
        							<tr>
        								<th><h2> Pr&oacute;tesis Dental </h2></th>
        							</tr>
        							<tr>
        								<td> Utiliza cualquiera de nuestras dos pr&oacute;tesis fijas o removibles.</td>
        							</tr>
        							<tr>
        								<td><a href="{{ route('protesis') }}"> + Informaci&oacute;n </a></td>
       								</tr>
        						</table>
							</th>
						</tr>
					</table>
        		</td>
        	</tr>
        	<tr>
        		<td>
    				<table>
                        <tr>
                            <th class="tabla1"><img src="../imagen/parte4.png"></th>
                            <th>
                                <table class="sintaxis">
      				  				<tr>
        								<th><h2> Implante </h2></th>
        							</tr>
        							<tr>
        								<td> La mejor tecnolog&iacute;a de vanguardia al servicio de nuestros clientes.</td>
        							</tr>
        							<tr>
        								<td><a href="{{ route('implantes') }}"> + Informaci&oacute;n </a></td>
        							</tr>
        						</table>
							</th>
						</tr>
					</table>
        		</td>
        		<td>
        			<table>
                        <tr>
                            <th class="tabla1"><img src="imagen/parte5.png"></th>
                            <th>
                                <table class="sintaxis">
        							<tr>
        								<th><h2> Caries </h2></th>
        							</tr>
        							<tr>
        								<td> Ven y vis&iacute;tanos no esperes a que aumente el dolor de tus dientes.</td>
        							</tr>
        							<tr>
        								<td><a href="{{ route('caries') }}"> + Informaci&oacute;n </a></td>
        							</tr>
        						</table>
							</th>
						</tr>
					</table>
        		</td>
        		<td>
        			<table>
                        <tr>
                            <th class="tabla1"><img src="imagen/parte6.png"></th>
                            <th>
                                    <table class="sintaxis">
        								<tr>
        									<th><h2> Est&eacute;tica Dental </h2></th>
        								</tr>
        								<tr>
        									<td> Utilizamos los mejores materiales para que presumas de una buena sonrisa.</td>
        								</tr>
        								<tr>
        									<td><a href="{{ route('estetica') }}"> + Informaci&oacute;n </a></td>
        								</tr>
        							</table>
							</th>
						</tr>
					</table>
        		</td>
        	</tr>
        </table>
        <br>
        <br>
        <div id="piefun">
        	<h4 class="pie">Siguenos en nuestras redes sociales</h4>&nbsp;&nbsp;&nbsp;
        	<a id="pie1" href="https://www.brandandhealth.com/facebook-para-clinicas-dentales/">
			<img src="imagen/Facebook.png">
		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a  id="pie2" href="">
			<img src="imagen/twitter.png">
		</a>&nbsp;&nbsp;&nbsp;
		<a id="pie3" href="">
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
