<?php
include '../lib/conexion.php';

/*Instanción objeto de conexion*/
$conn=new Conexion;

if ($conn->conectar()){
$nom=$_POST["nombre"];
$totusd=$_POST["totalusd"];
$ano=$_POST["ano"];

$sql="INSERT INTO productos(nombre,totalusd,ano) values('$nom',$totusd,$ano)";

$conn->objconn->query($sql);

echo $sql;
}
/*Uso del metodo conexión
 $resultado = $this->Conexion()->query($sql);
        $i=0;
        while($fila = $resultado->fetch_assoc()){
          $oProducto= new Producto($fila["nombre"],$fila["precio"],$fila["codigo"]);
          $aProductos[$i]=$oProducto;
         }
         
        
        return $aProductos;

 */

