
1.Utilizar el servidor tinker para introducir los datos de prueba

php artisan tinker

2. Datos a introducir

$administrador = new Administradore
$administrador->id_admin = "RPEMARIO36"
$administrador->nombre = "MARIO"
$administrador->apellido1 = "FERNAN"
$administrador->apellido2 = "PEREZ"
$administrador->telefono = "678910048"
$administrador->correo = "marioper24@gmail.com"
$administrador->direccion = "AVD. HYTASA, 50"
$administrador->ciudad = "Barcelona"
$administrador->password = Hash::make("MRfernan.29");
$administrador->save();

3. podemos consultar los datos utilizando lo siguiente:

Administradore::all()