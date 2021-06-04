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
    background-color: rgb(8, 12, 233);
}

td {
    width: 50px;
    height: 35px;
    background-color: #008CBA;
}

.input {
    width: 190px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    background-color: #008CBA;
    border: 0.2px solid white;
    height: 30.5px;
    
}

.input1 {
    width: 125px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    background-color: #008CBA;
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
         <h2>DATOS DE SOLICITUD DE CITAS</h2>
        </div>
        <br>
        <br>
        <br>
        <table>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>TELEFONO</th>
                <th>CIUDAD</th>
                <th>CORREO ELECTR&Oacute;NICO</th>
                <th>CITA</th>
                <th>APROBAR</th>
            </tr>
                @foreach($datos as $cita)
                <form action="{{ route('contacto.update')}}" method="POST">
                @csrf
                @method('put')
            <tr>
                    <td><input class="input1" type="text" name="id" value="{{$cita->id}}"></td>
                    <td><input class="input" type="text" name="nombre" value="{{$cita->nombre}}"></td>
                    <td><input class="input" type="text" name="apellido" value="{{$cita->apellido}}"></td>
                    <td><input class="input1" type="text" name="telefono" value="{{$cita->telefono}}"></td>
                    <td><input class="input1" type="text" name="ciudad" value="{{$cita->ciudad}}"></td>
                    <td><input class="input" type="email" name="correo" value="{{$cita->correo}}"></td>
                    <td><input class="input" type="button" name="aprobado" value="{{$cita->cita}}"></td>
                    <td><select name="cita">
                            <option></option>
                            <option value="Confirmado">Confirmado</option>
                            <option value="Anulado">Anulado</option>
                        </select>
                    </td>
                    <td><button class="input1"  type="submit">Actualizar</button></td>
            </tr>
                </form>
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
