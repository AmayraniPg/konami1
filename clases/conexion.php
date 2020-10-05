<?php  
/**
 * summary
 */
class conectar 
{
    /**
     * summary
     */
    public function conexion()
    {
     $servidor="localhost";
     $usuario="root";
     $password="";  
     $baseDatos="Konami";
     $conexion=mysqli_connect($servidor,$usuario,$password,$baseDatos);
     return $conexion;
    }
}
?>
