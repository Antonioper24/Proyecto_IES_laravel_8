<!DOCTYPE html>
<html>
    <head>
    <title>Actualizaci&oacute;n de cuentas</title>
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
                    height: 35px;
            }

            h2{
                color: navy;
                text-align: center;
                font-family: 'Cursive','Lucida Handwriting';
                font-size: 58px;
                text-shadow: 2px 2px 5px red;
                
            }

            h3 {
                color: yellowgreen;
                text-align: center;
                font-family: 'Cursive','Lucida Handwriting';
                font-size: 38px;
                text-shadow: 2px 2px 5px red;
            }

            .formu {
                margin-left: 240px;
                width: 918px;
                height: 267px;
                background: url(https://st4.depositphotos.com/13349494/22466/i/600/depositphotos_224662932-stock-photo-close-up-view-of-white.jpg);
                opacity: 0.82;
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

            .texto3 {
            margin-left: 192px;
            width: 490px;
            }

            .texto4 {
            margin-left: 97px;
            width: 490px;
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
            <h2>Actualizaci&oacute;n de Cuentas</h2>
        </div>
        <br>
        <br>
        <div>
            <h3> Administradores </h3>
        </div>
        <br>
        <br>
        <blockquote class="formu">
            <form action="falla" method="POST">
                @csrf
                <br>
                <br>
                <label for="idadmin">ID. administrador</label>&nbsp;&nbsp;&nbsp;
                <input class="texto"  type="text" name="idadmin" id="idadmin" required>
                <br>
                <br>
                <label for="pwd">Contrase&ntilde;a<label>&nbsp;&nbsp;&nbsp;
                <input class="texto4"  type="password" name="pwd" id="pwd">
                <br>
                <br>
                <input class="envio" type="submit" name="enviar" value="enviar"></button>
            </form>
        </blockquote>
        <br>
        <br>
        <div>
            <h3> Doctores </h3>
        </div>
        <br>
        <br>
        <blockquote class="formu">
            <form action="falla" method="POST">
                @csrf
                <br>
                <br>
                <label for="idperson">ID. personal</label>
                <input class="texto3"  type="text" name="idperson" id="idperson" required>
                <br>
                <br>
                <label for="pwd">Contrase&ntilde;a<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="texto4"  type="password" name="pwd" id="pwd">
                <br>
                <br>
                <input class="envio" type="submit" name="enviar" value="enviar"></button>
            </form>
        </blockquote>

    </body>
<html>