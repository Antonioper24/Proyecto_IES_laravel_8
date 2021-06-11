<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
#encabezado{
        background-color: rgba(63, 63, 66, 0.925);
        position: relative;
        z-index: 100;
        float: center;
        width: 1428px;
        height: 105px;
}

nav{
        float: right;

}

nav ul{
      margin: 0px;
       padding-top: 60px;
}

nav ul li{
        display: inline-block;
        font-family: 'Muli', sans-serif;
        font-size: 18px;
        line-height: 20px;
        margin-right: 50px;
}

nav ul li a{
        text-decoration: none;
        color: white;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: rgba(184, 202, 18, 0.267);
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: lima;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: yellow;}

.dropdown:hover .dropdown-content {
  display: block;
}

p {
        color: blanchedalmond;
}

img {
        margin-left: 60px;
        padding-top: 17px;
        float: left;
        width: 95px;
        height: 75px;
}

button {
  font-family: 'Muli', sans-serif;
  font-size: 17.5px;
  line-height: 20px;
  color: white;
  background-color: rgba(63, 63, 66, 0.925);
  border: 0;
  outline: none;
}

   </style>
   <body>
      <header id="encabezado">
        <img src="../imagen/logo2.png">
        <nav>
            <ul>
              <li class="dropdown">
                      <p>Altas</p>
                      <div class="dropdown-content">
                                <a href="{{ route('cliente.index') }}">Clientes</a>
                                <a href="{{ route('personal.index') }}">Personal</a>
                                <a href="{{ route('formadmin') }}">Administradores</a>
                      </div>
              </li>
              <li> <a href="{{ route('update') }}">Actualizar</a></li>
              <li class="dropdown">
                <p>Consultas</p>
                <div class="dropdown-content">
                  <a  href="{{ route('contacto.index') }}">Citas</a>
                  <a href="{{ route('cliente.show') }}">Clientes</a>
                  <a href="{{ route('personal.show') }}">Personal</a>
                </div>
              </li>
              <li>
                <form action="{{ route('administrador.logout') }}" method="POST">
                  @csrf  
                  <button type="submit" >Cerrar Sessi&oacute;n</button>
                </form>
              </li>
            </ul>
          </nav>
      </header>
   </body>
<html>