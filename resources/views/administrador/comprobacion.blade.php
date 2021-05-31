<!DOCTYPE html>
<html>
   <head>
       <title>Comprobaciones</title>
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
  background: url(https://image.freepik.com/vector-gratis/conjunto-dibujos-animados-herramientas-dentales-cuidado-bucal-dental-cepillo-dientes-pasta-dientes-hilo-dental-etc-sobre-fondo-blanco_277625-62.jpg);
}

div {
    width: 1450px;
    height: 45px;
}

h2{
 text-align: center;
 font-family: 'Cursive','Lucida Handwriting';
 font-size: 68px;
 text-shadow: 2px 2px 5px lawngreen;
}
blockquote {
    margin-left: 280px;
    margin-right: 350px;
}

form {
    width: 1450px;
    height: 45px;
}

img {
    width: 850px;
    height: 550px;
    opacity: 0.75;
}

button {
    margin-left: 550px ;
    color: white;
    border-color: black;
    background-color: rgb(255, 0, 0);
    height: 25px;
    
}

   </style> 
    <body>
        <div>
         <h2>Los datos han sido introducidos</h2>
        </div>
        <br>
        <br>
        <blockquote>
            <img src="https://i.pinimg.com/originals/a1/21/10/a12110617932b1b6fcc698267118d383.jpg">
        </blockquote>
        <br>
        <br>
        <form action="{{ route('administrador.index') }}" method="POST">
        @csrf
                <button>Volver a la pagina de inicio</button>
        </form>

    </body>
</html>