<!DOCTYPE html>
<html>
    <head>
        <style>

            form {
                margin-left: 130px;
                margin-right: 130px;
                background-color: rgba(60, 255, 0, 0.308);
                height: 95px;

            }

            .texto1 {
                margin-left: 30px;
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                font-size: 28px;
            }

            .texto2 {
                margin-left: 50px;
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                font-size: 28px;
            }

            select {
                margin-left: 16px;
                border-color: green;
                height: 20px;
            }

            .texto {
            margin-left: 25px;
            width: 180px;
            height: 20px;
            }

            button {
                margin-left: 100px;
                border-color: brown;
                background-color: rgba(63, 63, 66, 0.925);
                width: 70px;
                height: 32px;
                color: white;
            } 
        </style>
    </head>
    <body>
        <form action="{{ route('administrador.edit') }}" method="POST">
            @csrf
            <br>
            <label class="texto1"> TIPO </label>
            <select name="tipo" require>
                <option></option>
                <option value="personal" >Personal</option>
                <option value="clientes" >Cliente</option>
                <option value="administradores" >Administradores</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
            <label class="texto2">REFERENCIA</label>
            <input class="texto" type="text" name="personas" require>
            <label for="datos" class="texto1">DATOS</label>
            <select name="base" require>
                <option></option>
                <option value="id_personal">Personal</option>
                <option value="id_admin">Administradores</option>
                <option value="num_expe">clientes</option>
            </select>
            <button name="search"  type="submit">Search</button>
        </form>
    </body>
</html>
