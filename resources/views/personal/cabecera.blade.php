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
img {
        margin-left: 60px;
        padding-top: 17px;
        float: left;
        width: 95px;
        height: 75px;
}

   </style>
   <body>
      <header id="encabezado">
        <img src="../imagen/logo2.png">
        <nav>
            <ul>
              <li><a  href="{{ route('revision') }}">Consultas</a></li>
              <li><a  href="{{ route('cerrar') }}">Cerrar Sessi&oacute;n</a></li>
            </ul>
          </nav>
      </header>
   </body>
<html>