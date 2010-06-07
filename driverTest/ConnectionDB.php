<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PHPClass
 *
 * @author tato
 */
class ConnectionDB {
    private $host = "";
    private $nameDB = "";
    private $username = "";
    private $password = "";
    private $url = "";
    private $conexion = null;

    function __construct($host,$nameDB,$username,$password){
        $this->host=$host;
	$this->nameDB=$nameDB;
	$this->username=$username;
	$this->password=$password;
    }

    function connectMySQL() {
        try {
            $conexion = mysql_connect($this->host, $this->username , $this->password);//Establece la conexión con el servidor
            if ($conexion){
                echo 'Conexion exitosa.';
                echo "<br>Info: ";
                echo "<br>Host: ";
                echo mysql_get_host_info();
                echo "<br>Server: ";
                echo mysql_get_server_info();
            }else die('<br>Imposible conectar: ' . mysql_error());
            $db = mysql_select_db($this->nameDB,$conexion);//Establece la conexión con una base de datos del servidor

	} catch (Exception $e) {
            echo "Error, falló la conexión con la base de datos";
            echo $e->getMessage();//Devuelve el mensaje de la exception
            echo $e->getCode();//Devuelve el código de la Execption(Integer)
            echo $e->getLine();//Devuelve la línea donde se lanzó la execption
	}
    }

    function closeConnection() {
	try {
            mysql_close($conexion);
            echo "<br><p>Conexión cerrada.";
	} catch (Exception $e) {
            echo "Error, falló la desconexión con la base de datos";
            echo $e->getMessage();//Devuelve el mensaje de la exception
            echo $e->getCode();//Devuelve el código de la Execption(Integer)
            echo $e->getLine();//Devuelve la línea donde se lanzó la execption
	};
    }

    function query($query){
        return mysql_query($query);
    }
}
?>