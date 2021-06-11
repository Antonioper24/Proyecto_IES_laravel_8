<!DOCTYPE html>
<html>
   <head>
       <title>Actualizaci&oacute;n de Citas</title>
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
    margin-left: 80px;
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
    width: 205px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    background-image: linear-gradient(to right, rgba(44, 255, 255, 0.6), rgba(39, 151, 255, 0.6));
    border: 0.2px solid white;
    height: 30.5px;
    
}

.input1 {
    width: 155px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    background-image: linear-gradient(to right, rgba(44, 255, 255, 0.6), rgba(39, 151, 255, 0.6));
    border: 0.2px solid white;
    height: 30.5px;
    
}

select {
    width: 120px;
    height: 30px;
    background-image: linear-gradient(to right, rgba(44, 255, 255, 0.6), rgba(39, 151, 255, 0.6));
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
         <h2>CREACI&Oacute;N DEL DIA DE LA CITA</h2>
        </div>
        <br>
        <br>
        <br>
        <table>
            <tr>
                 <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>IDENTIFICADOR</th>
                <th>EXPEDIENTE</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>CITA</th>
            </tr>
                @foreach ($busca as $data)
                <form action="{{ route('cita.update')}}" method="POST">
                @csrf

                @method('put')
            <tr>
                    <td><input class="input1" type="button" name="id" value="{{$data->nombre}}" require></td>
                    <td><input class="input" type="button" name="apellido" value="{{$data->apellido1}} {{$data->apellido2}}"></td>
                    @foreach ($cita[$data->num_expe] as $nombre)
                    <td><input class="input1" type="text" name="id" value="{{$nombre['id']}}"></td>
                    <td><input class="input" type="text" name="expediente" value="{{$nombre['num_expe']}}"></td>
                    <td><input class="input1" type="date" name="fecha" value="{{$nombre['fecha']}}"></td>
                    <td><select name="hora">
                            <option>{{$nombre['hora']}}</option>
                            <option value="09:30">09:30</option>
                            <option value="10:15">10:15</option>
                            <option value="11:00">11:00</option>
                            <option value="11:45">11:45</option>
                            <option value="12:30">12:30</option>
                            <option value="13:15">13:15</option>
                            <option value="17:30">17:30</option>
                            <option value="18:15">18:15</option>
                            <option value="19:00">19:00</option>
                        </select>
                    </td>
                    <td><select name="cita">
                            <option>{{$nombre['cita']}}</option>
                            <option value="Confirmado">Confirmado</option>
                            <option value="Anulado">Anulado</option>
                        </select>
                    </td>
                    <td><button class="input1"  type="submit">Crear Cita</button></td>
                    @endforeach
                </form>
            </tr>
                @endforeach
        </table>
        <br>
        <br>
        <br>
        <br>
        <form action="{{ route('cita.create') }}" method="POST">
        @csrf
                <button class="regresar">Volver a la pagina de inicio</button>
        </form>
        

    </body>
</html>