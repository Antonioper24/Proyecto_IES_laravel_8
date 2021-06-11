<!DOCTYPE html>
<html>
   <head>
       <title>Consultas de cita</title>
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
    background-image: linear-gradient(to right, orange,yellow,chocolate);
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

.input1 {
    width: 135px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    background-image: linear-gradient(to right, rgba(44, 255, 255, 0.6), rgba(39, 151, 255, 0.6));
    border: 0.2px solid white;
    height: 30.5px;
    
}

option {
    background-color: #008CBA;
    color: black;
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
         <h2>DATOS DE CLIENTES</h2>
        </div>
        <br>
        <br>
        <br>
        <table>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>MEDICO</th>
                <th>CITA</th>
                <th>EXPEDIENTE</th>
                <th>NUEVA CITA</th>
            </tr>
                @foreach($datos as $data)
                <form action="{{ route('cita.show')}}" method="POST">
                @csrf
            <tr>
                    <td><input class="input1" type="text" name="id" value="{{$data->num_expe}}" require></td>
                    <td><input class="input" type="button" name="nombre" value="{{$data->nombre}}"></td>
                    <td><input class="input" type="button" name="apellido" value="{{$data->apellido1}}"></td>
                    <td><input class="input" type="button" name="doctor" value="{{$data->id_personal}}"></td>
                    <td><button class="input1"  type="submit">Primera Cita</button></td>
                </form>
                <form action="{{ route('cita.buscador')}}" method="POST">
                    @csrf
                    <td><input class="input" type="text" name="expediente" value="{{$data->num_expe}}"></td>
                    <td><button class="input1"  type="submit">Cita Siguiente</button></td>
                </form>
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