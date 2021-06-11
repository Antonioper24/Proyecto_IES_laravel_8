<!DOCTYPE html>
<html>
   <head>
       <title>Tus Citas</title>
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
    margin-left: 30px;
    width: 1320px;
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
    width: 215px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    background-color: rgb(0, 255, 0);
    border: 0.2px solid white;
    height: 30.5px;
    
}

select {
    width: 150px;
    height: 29.50px;
    background-color: #008CBA;
}

option {
    background-color: #008CBA;
    color: white;
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
         <h2>VUESTRAS CITAS</h2>
        </div>
        <br>
        <br>
        <br>
        <table>
            <tr>
                <th>APELLIDO</th>
                <th>FECHA</th>
                <th>HORA</th>
            </tr>
            <tr>
                    <td class="input">{{$nombre->apellido1}}</td>
                    <td class="input">{{$cita->fecha}}</td>
                    <td class="input">{{$cita->hora}}</td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <br>
        <form action="{{ route('index') }}" method="GET">
                <button class="regresar">Volver a la pagina de inicio</button>
        </form>
        

    </body>
</html>
