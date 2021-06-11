<!DOCTYPE html>
<html>
   <head>
       <title>Visualizaci&oacute;n de Costes</title>
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
  background: url(https://dentalrancagua.cl/wp-content/uploads/2019/11/tooth-2874551_1920-1.jpg);
}

div {
    width: 1450px;
    height: 45px;
}

h2{
 text-align: center;
 font-family: 'Cursive','Lucida Handwriting';
 color: green;
 font-size: 68px;
 text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;
}

table { 
    margin-left: 240px;
    width: 990px;
    border: 1px solid white;
}

th {
    width: 30px;
    height: 42.5px;
    text-align: center;
    font-family: monospace;
    font-size: 20px;
    color: red;
    background-image: linear-gradient(to right, orange,yellow,green);
}

td {
    width: 50px;
    height: 35px;
    background-image: linear-gradient(to right, rgba(44, 255, 255, 0.6), rgba(39, 151, 255, 0.6));
}

.input {
    width: 135px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    background-color: rgb(0, 255, 0);
    border: 0.2px solid white;
    height: 30.5px;
    
}

.input1 {
    width: 175px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    background-color: rgb(0, 255, 0);
    border: 0.2px solid white;
    height: 30.5px;
    
}


.regresar {
    background-image: linear-gradient(red, yellow, red);
    margin-left: 550px;
    width: 205px;
    height: 35px;
}

   </style> 
    <body>
        <div>
         <h2>Coste Del Tratamiento</h2>
        </div>
        <br>
        <br>
        <br>
        <table>
            <tr>
                <th>IDENTIFICADOR</th>
                <th>TRATAMIENTO</th>
                <th>COSTE</th>
            </tr>
                @foreach($datos as $data)
            <tr>
                    <td class="input">{{$data->num_expe}}</td>
                    <td class="input">{{$data->tratamiento}}</td>
                    <td class="input1">{{$data->precio}} €</td>
            </tr>
                @endforeach
        </table>
        <br>
        <br>
        <br>
        <br>
        <form action="{{ route('cliente.show') }}" method="GET">
                <button class="regresar">Volver a la pagina de clientes</button>
        </form>
        

    </body>
</html>
