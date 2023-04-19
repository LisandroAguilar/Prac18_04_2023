<?php
    class Producto{
        public function ObtenerProductos(){
            include 'conexion.php'; //Llama al archivo
            $conecta=new Conectar();//Crea la instancia
            $consulta="SELECT * FROM Productos";
            $query=$conecta->prepare($consulta);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return $query->FetchAll();
        }
        public function InsertarProducto($nombre,$precio,$existencias){
            try {
                include 'conexion.php';
                $conecta = new Conectar();
                $consulta=$conecta->prepare("INSERT INTO
                Productos(Nombre,Precio,Existencias)
                VALUES(:nombre,:precio,:existencias)");
                $consulta->bindParam(":nombre",$nombre,PDO::PARAM_STR);
                $consulta->bindParam(":precio",$precio,PDO::PARAM_STR);
                $consulta->bindParam(":existencias",$existencias,PDO::PARAM_STR);
                $consulta->execute();
                return true;
            } catch (Exception $e) {
                return false;
            }
        }
    }
?>