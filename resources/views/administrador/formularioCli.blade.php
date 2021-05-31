<!DOCTYPE html>
<html>
    <head>
    <title>Altas de Clientes</title>
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
                background: url(https://thumbs.dreamstime.com/b/fondo-de-madera-horizontal-de-la-textura-de-la-pared-66273851.jpg);
            }


            div {
                    width: 1450px;
                    height: 45px;
            }
            
            h2{
                color: lime;
                text-align: center;
                font-family: 'Cursive','Lucida Handwriting';
                font-size: 58px;
                text-shadow: 2px 2px 5px #f705058c;
            }

            .formu {
                margin-left: 240px;
                width: 918px;
                height: 600px;
                background: url(https://previews.123rf.com/images/barbaliss/barbaliss1210/barbaliss121000018/15690786-marco-con-manchas-de-color-aisladas-sobre-fondo-blanco-ilustraci%C3%B3n-.jpg);
                opacity: 0.82;
            }

            input {
                height: 26px;
                border-color: tomato;
            }

            label {
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 28px;
            padding-left: 70px;
            }

            .texto {
            margin-left: 105px;
            width: 490px;
            }

            .texto1 {
            margin-left: 198px;
            width: 490px;
            }

            .texto2 {
            margin-left: 241px;
            width: 490px;
            }

            .texto3 {
            margin-left: 192px;
            width: 490px;
            }

            .seleccion {
                margin-left: 220px;
                padding-right: 25px;
                height: 25px;
                border-color: tomato;
            }

            .seleccion1 {
                margin-left: 123px;
                padding-right: 25px;
                height: 25px;
                border-color: tomato;
            }

            .envio {
                margin-left: 789px;
                border-color: brown;
                background-color: rgba(63, 63, 66, 0.925);
                width: 70px;
                height: 32px;
                color: white;
            }        

       </style>
    </head>
    <body>
        <div>
            <h2>Altas de Clientes</h2>
        </div>
        <br>
        <br>
        <blockquote class="formu">
            <form action="{{ route('cliente.store') }} " method="POST">
                @csrf
                <br>
                <br>
                <label for="expediente">Num. Expediente</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="texto"  type="text" name="expediente" id="expediente" required>
                <br>
                <br>
                <label for="nombre">Nombre</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="texto1"  type="text" name="nombre" id="nombre" required>
                <br>
                <br>
                <label for="apellido1">Primer Apellido</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="texto"  type="text" name="apellido1" id="apellido1" required>
                <br>
                <br>
                <label for="apellido2">Segundo Apellido</label>&nbsp;&nbsp;
                <input class="texto"  type="text" name="apellido2" id="apellido2" required>
                <br>
                <br>
                <label for="telefono">Tel&eacute;fono</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="texto1"  type="tel" name="telefono" id="telefono" required>
                <br>
                <br>
                <label for="dni">DNI</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="texto2"  type="text" name="dni" id="dni" required>
                <br>
                <br>
                <label for="direccion">Direcci&oacute;n</label>&nbsp;&nbsp;&nbsp;
                <input class="texto3"  type="text" name="direccion" id="direccion" required>
                <br>
                <br>
                <label for="ciudad">Ciudad</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <select class="seleccion" name="ciudad" id="ciudad" required>
                        <option></option>
                        <option value="sevilla">Sevilla</option>
                        <option value="madrid">Madrid</option>
                        <option value="barcelona">Barcelona</option>
                </select>
                <br>
                <br>
                <label for="doctor">NOM. DOCTOR/A</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <select class="seleccion1" name="doctor" id="doctor" required>
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
    </body>
<html>