<?php
$server  = "db626351678.db.1and1.com";
   $bd   = "db626351678";
   $user  = "dbo626351678";
   $pass   = "Bakemonogatari1991";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd)
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

$tipo=$_GET['tipo'];
$rango=$_GET['rango'];

if($tipo==null || $rango==null){
//generamos la consulta
$sql = "SELECT * FROM clase";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result))
{
    $id_clase=$row['id_clase'];
    $nombre=$row['nombre'];
    $nombre_ingles=$row['nombre_ingles'];
    $rango=$row['rango'];
    $tipo=$row['tipo'];
    $funcion=$row['funcion'];
    $dificultad=$row['dificultad'];
    $descripcion=$row['descripcion'];
    $circulo=$row['circulo'];
    $avatar_tabla=$row['avatar_tabla'];
    $avatar_m=$row['avatar_m'];
    $avatar_f=$row['avatar_f'];
    $logo=$row['logo'];


    $clases[] = array('id_clase'=> $id_clase, 'nombre'=> $nombre, 'nombre_ingles'=> $nombre_ingles, 'rango'=> $rango,
                        'tipo'=> $tipo, 'funcion'=> $funcion, 'dificultad'=> $dificultad, 'descripcion'=> $descripcion
                      , 'circulo'=> $circulo, 'avatar_tabla'=> $avatar_tabla, 'avatar_m'=> $avatar_m
                    , 'avatar_f'=> $avatar_f, 'logo'=> $logo);

}

//desconectamos la base de datos
$close = mysqli_close($conexion)
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


//Creamos el JSON
$json_string = json_encode($clases);
echo $json_string;

}else{

  $sql = "SELECT * FROM clase WHERE clase.rango=$rango AND clase.tipo=$tipo";
  mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

  if(!$result = mysqli_query($conexion, $sql)) die();

  $clientes = array(); //creamos un array

  while($row = mysqli_fetch_array($result))
  {
      $id_clase=$row['id_clase'];
      $nombre=$row['nombre'];
      $nombre_ingles=$row['nombre_ingles'];
      $rango=$row['rango'];
      $tipo=$row['tipo'];
      $funcion=$row['funcion'];
      $dificultad=$row['dificultad'];
      $descripcion=$row['descripcion'];
      $circulo=$row['circulo'];
      $avatar_tabla=$row['avatar_tabla'];
      $avatar_m=$row['avatar_m'];
      $avatar_f=$row['avatar_f'];
      $logo=$row['logo'];


      $clases[] = array('id_clase'=> $id_clase, 'nombre'=> $nombre, 'nombre_ingles'=> $nombre_ingles, 'rango'=> $rango,
                          'tipo'=> $tipo, 'funcion'=> $funcion, 'dificultad'=> $dificultad, 'descripcion'=> $descripcion
                        , 'circulo'=> $circulo, 'avatar_tabla'=> $avatar_tabla, 'avatar_m'=> $avatar_m
                      , 'avatar_f'=> $avatar_f, 'logo'=> $logo);

  }

  //desconectamos la base de datos
  $close = mysqli_close($conexion)
  or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


  //Creamos el JSON
  $json_string = json_encode($clases);
  echo $json_string;

}

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_contents($file, $json_string);
*/


?>
