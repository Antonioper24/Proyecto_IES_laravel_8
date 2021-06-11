<!DOCTYPE html>
<html>
   <head>
       <title>Nuestros Clientes</title>
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
    margin-left: 10px;
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
    width: 175px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    background-image: linear-gradient(to right, rgba(44, 255, 255, 0.6), rgba(39, 151, 255, 0.6));
    border: 0.2px solid white;
    height: 30.5px;
    
}

.input1 {
    width: 115px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    background-image: linear-gradient(to right, rgba(44, 255, 255, 0.6), rgba(39, 151, 255, 0.6));
    border: 0.2px solid white;
    height: 30.5px;
    
}

button {
    width: 120px;
    height: 30px;
    background-image: linear-gradient(to right, rgba(44, 255, 255, 0.6), rgba(39, 151, 255, 0.6));
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
         <h2>NUESTROS CLIENTES</h2>
        </div>
        <br>
        <br>
        <br>
        <table>
            <tr>
                <th>EXPEDIENTE</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>TEL&Eacute;FONO</th>
                <th>DIRECCI&Oacute;N</th>
                <th>CIUDAD</th>
                <th>TRATAMIENTO</th>
                <th>DOCTOR</th>
                <th>COSTE</th>
                <th>ID</th>
                <th>REVISAR COSTE</th>
            </tr>
                @foreach ($data as $datos)
                <form action="{{ route('tratamiento.create')}}" method="POST">
                @csrf
            <tr>
                    <td><input class="input1" type="text" name="id" value="{{$datos->num_expe}}" require></td>
                    <td><input class="input1" type="button" name="nombre" value="{{$datos->nombre}}" require></td>
                    <td><input class="input" type="button" name="apellido" value="{{$datos->apellido1}} {{$datos->apellido2}}"></td>
                    <td><input class="input1" type="button" name="telefono" value="{{$datos->telefono}}"></td>
                    <td><input class="input" type="button" name="direccion" value="{{$datos->direccion}}"></td>
                    <td><input class="input1" type="button" name="ciudad" value="{{$datos->ciudad}}"></td>
                    <td><input class="input1" type="button" name="tratamiento" value="{{$datos->tratamiento}}"></td>
                    <td><input class="input1" type="button" name="doctor" value="{{$datos->id_personal}}"></td>
                    <td><button type="submit">Crear Coste</button></td>
                </form>
                    <form action="{{ route('tratamiento.show') }}" method="POST">
                    @csrf
                    <td><input class="input1" type="text" name="expediente" value="{{$datos->num_expe}}" require></td>
                    <td><button type="submit">Revisar Coste</button></td>
                    </form>
            </tr>
                @endforeach
        </table>
        <br>
        <br>
        <br>
        <br>
        <form action="{{ route('administrador.index') }}" method="POST">
        @csrf
                <button class="regresar">Volver a la pagina de inicio</button>
        </form>
        

    </body>
</html>