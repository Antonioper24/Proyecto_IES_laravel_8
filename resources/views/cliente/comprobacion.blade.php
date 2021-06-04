<!DOCTYPE html>
<html>
   <head>
       <title>Creaci&oacute;n de cita</title>
       <meta charset="utf-8">
   </head>
   <style>
* {
   margin: 0px 0px 0px 0px;
   padding: 0px 0px 0px 0px;

}
body, html {
    padding: 15px 15px 25px 25px;
}

body {
  background: url(https://www.gratistodo.com/wp-content/uploads/2017/09/Fondo-playa-paradisiaca-bora-bora-35.jpg);
}

div {
    width: 1450px;
    height: 45px;
}

h2{
 text-align: center;
 font-family: 'Cursive','Lucida Handwriting';
 color: red;
 font-size: 68px;
 text-shadow: 2px 2px 5px lawngreen;
}

h3{
 text-align: center;
 font-family: 'Cursive','Lucida Handwriting';
 font-size: 42px;
 color:saddlebrown;
 text-shadow: 2px 2px 5px green;
}

blockquote {
    padding-top: 30px;
    margin-left: 280px;
    margin-right: 350px;
}

form {
    padding-top: 135px;
    width: 1450px;
    height: 45px;
}

img {
    width: 850px;
    height: 550px;
    border-radius: 70%;
    opacity: 0.75;
}

button {
    margin-left: 550px ;
    color: white;
    border-color: black;
    background-color: rgb(255, 0, 0);
    height: 45px ;
    
}

   </style> 
    <body>
        <div>
         <h2>Tus datos han sido Registrados</h2>
         <br>
         <h3>Gracias por preferirnos <br>  
         Nos pondremos en contacto contigo para concretar la cita.</h3>
        </div>
        <br>
        <br>
        <form action="{{ route('index') }}" method="GET">
        
                <button>Volver a la pagina de inicio</button>
        </form>
        <br>
        <br>
        <blockquote>
            <img src="https://image.freepik.com/vector-gratis/diente-dibujos-animados-dando-pulgar_29190-372.jpg">
        </blockquote>
    </body>
</html>