<!DOCTYPE html>
<html>
    <head>
    <title>Altas de administradores</title>
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
                height: 650px;
                background: url(https://thumbs.dreamstime.com/b/marco-horizontal-de-las-ramas-de-%C3%A1rbol-de-abeto-para-la-tarjeta-de-navidad-79968468.jpg);
                opacity: 0.79;
            }

            input {
                height: 26px;
                border-color: green;
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

            .texto4 {
            margin-left: 97px;
            width: 490px;
            }

            .seleccion {
                margin-left: 220px;
                padding-right: 25px;
                height: 25px;
                border-color: green;
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
            <h2>Altas de administradores</h2>
        </div>
        <br>
        <br>
        <blockquote class="formu">
            <form action="{{ route('administrador.store') }}" method="POST">
                @csrf
                <br>
                <br>
                <label for="idadmin">ID. administrador</label>&nbsp;&nbsp;&nbsp;
                <input class="texto"  type="text" name="idadmin" id="idadmin" required>
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
                <label for="correo">Correo Electr&oacute;nico</label>&nbsp;
                <input class="texto4"  type="text" name="correo" id="correo" required>
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
                <label for="pwd">Contrase&ntilde;a<label>&nbsp;&nbsp;&nbsp;
                <input class="texto4"  type="password" name="pwd" id="pwd" required>
                <br>
                <br>
                <input class="envio" type="submit" name="enviar" value="enviar"></button>
            </form>
        </blockquote>
    </body>
<html>