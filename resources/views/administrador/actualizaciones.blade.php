<!DOCTYPE html>
<html>
    <head>
    <title>actualizaciones</title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <style>
                   * {
                margin: 0px 0px 0px 0px;
                padding: 0px 0px 0px 0px;
            }
            body, html {
                padding: 15px 15px 25px 25px;
            }
            body {
                background: url(https://supercurioso.com/wp-content/uploads/2019/11/Qu%C3%A9-son-las-nubes-_-Descubre-sus-clases.jpg);
            }

            div {
                    width: 1450px;
                    height: 42px;
            }

            h2{
                color: navy;
                text-align: center;
                font-family: 'Cursive','Lucida Handwriting';
                font-size: 58px;
                text-shadow: 2px 2px 5px red;
                
            }
            .formu {
                margin-left: 240px;
                width: 918px;
                height: 750px;
                background: url(https://thumbs.dreamstime.com/z/marco-abstracto-colorido-con-las-manchas-blancas-negras-del-chapoteo-27015616.jpg);
                opacity: 0.79;
            }

            .formu1 {
                margin-left: 240px;
                width: 918px;
                height: 810px;
                background: url(https://thumbs.dreamstime.com/z/marco-abstracto-colorido-con-las-manchas-blancas-negras-del-chapoteo-27015616.jpg);
                opacity: 0.79;
            }

            input {
                height: 26px;
                border-color: blue;
            }

            label {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 28px;
            
            }

            .titulo {
            margin-left: 115px;
            width: 250px;
            }

            .titulo1  {
            margin-left: 45px;
            width: 250px;
            }

            .titulo2  {
            margin-left: 140px;
            width: 250px;
            }

            .titulo3  {
            margin-left: 36px;
            width: 250px;
            }


            .titulo4  {
            margin-left: 139px;
            width: 250px;
            }

            .titulo5  {
            margin-left: 170px;
            width: 250px;
            }

            .titulo6  {
            margin-left: 105px;
            width: 250px;
            }

            .envio {
                margin-left: 529px;
                border-color: brown;
                background-color: rgba(63, 63, 66, 0.925);
                width: 170px;
                height: 32px;
                color: white;
            } 
   
             .seleccion1 {
                margin-left: 90px;
                padding-right: 25px;
                height: 25px;
                border-color: tomato;
            } 

            .seleccion {
                margin-left: 113px;
                padding-right: 25px;
                height: 25px;
                border-color: tomato;
            } 
       </style>
    </head>
    <body>
        <div>
            @include('administrador.buscador')
        </div>
        <br>
        <br>
        <br>
        <br>
        <div>
            <h2>ACTUALIZAR CUENTA DE {{$person->nombre}}</h2>
        </div>
        <br>
        <br>
        <br>
        @if ($tipos === 'personal')
        <blockquote class="formu">
            <form action="{{ route('personal.update')}}" method="POST">
            @csrf

            @method('put')
                <br>
                <br>
                <label for="idperson">ID. personal</label>
                <input class="titulo"  type="text" name="idperson" value="{{$person->id_personal}}" required>
                <br>
                <br>
                <label for="nombre">Nombre</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo2" type="text" name="nombre" value="{{$person->nombre}}" required>
                <br>
                <br>
                <label for="apellido1">Primer Apellido</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo1"  type="text" name="apellido1" value="{{$person->apellido1}}"required>
                <br>
                <br>
                <label for="apellido2">Segundo Apellido</label>&nbsp;&nbsp;
                <input class="titulo1" type="text" name="apellido2" value="{{$person->apellido2}}" required>
                <br>
                <br>
                <label for="telefono">Tel&eacute;fono</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo4" type="tel" name="telefono" value="{{$person->telefono}}"required>
                <br>
                <br>
                <label for="correo">Correo Electr&oacute;nico</label>&nbsp;
                <input class="titulo3"  type="text" name="correo" value="{{$person->correo}}" required>
                <br>
                <br>
                <label for="direccion">Direcci&oacute;n</label>&nbsp;
                <input class="titulo4" type="text" name="direccion" value="{{$person->direccion}}"  required>
                <br>
                <br>
                <label for="ciudad">Ciudad</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo4" type="text" name="ciudad" value="{{$person->ciudad}}"  required>
                <br>
                <br>
                <label for="tipo">Personal</label>&nbsp;&nbsp;
                <input class="titulo4" type="text" name="tipo" value="{{$person->personal}}">
                <br>
                <br>
                <label for="iddoctor">ID Doctor</label>&nbsp;&nbsp;
                <input class="titulo4" type="text" name="iddoctor" value="{{$person->id_doctor}}">
                <br>
                <br>
                <label for="pwd">Contrase&ntilde;a<label>&nbsp;
                <input class="titulo" type="password" name="pwd"  required>
                <br>
                <br>
                <label for="idadmin">Nom. Responsable<label>&nbsp;
                <input class="titulo3"  type="text" name="idadmin" value="{{$person->id_admin}}"  required>
                <br>
                <br>
                <input class="envio" type="submit" name="enviar" value="enviar Formulario">
            </form>
        </blockquote>

        @elseif ($tipos === 'clientes')
        <blockquote class="formu">
            <form action="{{route('cliente.update')}} "  method="POST">
            @csrf

            @method('put')
                <br>
                <br>
                <label for="expediente">Num. Expediente</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo3"  type="text" name="expediente" value="{{$person->num_expe}}"  required>
                <br>
                <br>
                <label for="nombre">Nombre</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo2" type="text" name="nombre" value="{{$person->nombre}}" required>
                <br>
                <br>
                <label for="apellido1">Primer Apellido</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo1" type="text" name="apellido1" value="{{$person->apellido1}}" required>
                <br>
                <br>
                <label for="apellido2">Segundo Apellido</label>
                <input class="titulo1"  type="text" name="apellido2" value="{{$person->apellido2}}" required>
                <br>
                <br>
                <label for="telefono">Tel&eacute;fono</label>&nbsp;&nbsp;
                <input class="titulo4" type="tel" name="telefono" value="{{$person->telefono}}" required>
                <br>
                <br>
                <label for="dni">DNI</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo5"  type="text" name="dni" value="{{$person->DNI}}" required>
                <br>
                <br>
                <label for="direccion">Direcci&oacute;n</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo6" type="text" name="direccion" value="{{$person->direccion}}"  required>
                <br>
                <br>
                <label for="ciudad">Ciudad</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo4"  type="text" name="ciudad" value="{{$person->ciudad}}"  required>
                <br>
                <br>
                <label for="tratami">Tratamiento</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <select class="seleccion1" name="tratami" id="tratami" required>
                        <option>{{$person->tratamiento}}</option>
                        <option value="Endodoncia">Endodoncia</option>
                        <option value="Ortodoncia">Ortodoncia</option>
                        <option value="Protesis Dental">Pr&oacute;tesis Dental</option>
                        <option value="Implante">Implante</option>
                        <option value="Caries">Caries</option>
                        <option value="Estetica Dental"> ESt&eacute;tica Dental</option>
                </select>
                <br>
                <br>
                <label for="radio">Num. Rad&iacute;ografia</label>&nbsp;&nbsp;
               <input class="titulo1" type="text" name="radio" value="{{$person->num_radiogra}}" requiere> 
                <br>
                <br>
                <label for="doctor">ID. Doctor/a</label>
                <select class="seleccion" name="doctor" id="doctor" required>
                        <option></option>
                        @foreach ($nombre as $apellido)
                            <option value="{{$apellido->id_personal}}">{{$apellido->apellido1}},{{$apellido->nombre}}</option>
                        @endforeach
                </select>
                <br>
                <br>
                <input class="envio" type="submit" name="enviar" value="enviar">
            </form>
        </blockquote>

        @else
       <blockquote class="formu">
            <form action="{{ route('administrador.update') }}" method="POST">
            @csrf

            @method('put')
                <br>
                <br>
                <label for="idadmin">ID. administrador</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo1"  type="text" name="idadmin" value="{{$person->id_admin}}" required>
                <br>
                <br>
                <label for="nombre">Nombre</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo5" type="text" name="nombre" value="{{$person->nombre}}" required>
                <br>
                <br>
                <label for="apellido1">Primer Apellido</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo1" type="text" name="apellido1" value="{{$person->apellido1}}" required>
                <br>
                <br>
                <label for="apellido2">Segundo Apellido</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo1"  type="text" name="apellido2" value="{{$person->apellido2}}" required>
                <br>
                <br>
                <label for="telefono">Tel&eacute;fono</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo5"  type="tel" name="telefono" value="{{$person->telefono}}" required>
                <br>
                <br>
                <label for="correo">Correo Electr&oacute;nico</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo1"  type="text" name="correo" value="{{$person->correo}}" required>
                <br>
                <br>
                <label for="direccion">Direcci&oacute;n</label>
                <input class="titulo5"  type="text" name="direccion" value="{{$person->direccion}}" required>
                <br>
                <br>
                <label for="ciudad">Ciudad</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="titulo5"  type="text" name="ciudad" value="{{$person->ciudad}}" required>
                <br>
                <br>
                <label for="pwd">Contrase&ntilde;a<label>&nbsp;
                <input class="titulo4" type="password" name="pwd" id="pwd" required>
                <br>
                <br>
                <input class="envio" type="submit" name="enviar" value="enviar"></button>
            </form>
        </blockquote>
        @endif

    </body>
<html>