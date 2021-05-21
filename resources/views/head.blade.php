<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
.pie{
  float: right;
  display: block;
  width: 295px;
  height: 228px;
  border: 2px solid #00CC00;
  padding: 7px;
  border-radius: 15px;
}
.pie2{
  float: left;
  width: 295px;
  height: 228px;
  border: 2px solid #00CC00;
  padding: 9px;
  border-radius: 15px;
}

h2{
 text-align: center;
 font-family: 'Cursive','Lucida Handwriting';
 font-size: 39px;
text-shadow: 2px 2px 5px red;
}

a:link {
  background-color: red;
  text-align: center;
  font-family: 'Fantasy','Copperplate';
  font-size: 17px;
  padding-left: 361px ;
  padding-right: 295px ;
}

a:visited {
  background-color: white;
}

a:hover {
  background-color: rgba(35, 255, 104, 0.1);
}

#parrafo {
  text-align: center;
  font-family: 'Fantasy','Copperplate';
  font-size: 16.5px;
  padding-left: 325px ;
  padding-right: 325px ;

}

	</style>
	</head>
	<body>
			<h2> ¿ Sabias que? </h2>
                	<img class="pie" src="https://i.pinimg.com/originals/71/fb/e5/71fbe5205c512f1df517832be3fdd6ec.png">
                	<img class="pie2" src="https://www.lifeder.com/wp-content/uploads/2019/06/Dentistas-Lifeder-18.jpg">
               		 <p>
                		Cualquier infecci&oacute;n en el diente temporal que progrese por la ra&iacute;z creara una bolsa de pus que 
                		afectar&aacute; al diente permanente. Por lo que una caries en un diente de leche se puede transferir a una permanente.
                	</p>
                	<br>
                	<p id="parrafo">
                		<b> Algunas frases con las que nos sentimos caracterizados: </b>
                		<br>
                		<br>
	                	&quot; El arte de nuestra profesi&oacute;n es amar las sonrisas de los dem&aacute;s, por eso solicita
	                	tu cita y vis&aacute;tanos te ofreceremos lo mejor de nuestro servicio. &quot;
	                	<br>
	                	<br>
	                	<a href="{{ route('citas') }}"> Solicita tu cita </a>
	                	<br>
	                	<br>
	                	&quot; El resultado final, se traduce en sonrisas hermosas y pacientes que ya no le temen al ortodoncista. &quot;
        		</p>
	</body>
</html>
