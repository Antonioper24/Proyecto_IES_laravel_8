<!DOCTYPE html>
<html>
   <head>
       <title>visualizaci&oacute;n de citas</title>
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
    margin-left: 150px;
    width: 1120px;
    border: 1px solid white;
}

th {
    width: 30px;
    height: 42.5px;
    text-align: center;
    font-family: monospace;
    font-size: 20px;
    color: red;
    background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));background-image: linear-gradient(to right, orange,yellow,chocolate);
}

td {
    width: 25px;
    height: 35px;
    
}

.input {
    width: 210px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    background-image: linear-gradient(to right, rgba(44, 255, 255, 0.6), rgba(39, 151, 255, 0.6));
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
         <h2>CITAS</h2>
        </div>
        <br>
        <br>
        <br>
        <table>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>MEDICO</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>STATUS</th>
            </tr>
            @foreach ($busca as $datos)
            <tr>
                    <td class="input">{{$datos->nombre}}</td>
                    <td class="input">{{$datos->apellido1}}</td>
                    <td class="input">{{$datos->id_personal}}</td>
                    @foreach ($cita[$datos->num_expe] as $nombre)
                    <td class="input">{{$nombre['fecha']}}</td>
                    <td class="input">{{$nombre['hora']}}</td>
                    <td class="input">{{$nombre['cita']}}</}<td>
                    @endforeach
            </tr>
            @endforeach
        </table>
        <br>
        <br>
        <br>
        <br>
        <form action="{{ route('cita.index') }}" method="POST">
        @csrf
                <button class="regresar">Volver a la pagina de inicio</button>
        </form>
        

    </body>
</html>