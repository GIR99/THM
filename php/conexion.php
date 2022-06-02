<?php
        function ConexionBD(){

            $username = 'root';
            $host = 'localhost';
            $dbname = 'taller';
            $password = 'admin';
        
            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                echo "Se conecto correctamente a la base de datos $dbname en $host Satisfactoriamente";
            } catch (PDOException $pe) {
                die("No se puede conectar a la base de datos $dbname :" . $pe->getMessage());
            }
            return $conn;
        
        }

?>