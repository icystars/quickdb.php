<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conectar
 *
 * @author tato
 */
include ("ConnectionDB.php");
$connector = new ConnectionDB($_POST["host"],$_POST["db"],
                                $_POST["user"], $_POST["pwd"]);
$connector->connectMySQL(); //conecto con la bd

$sqlInsert = "INSERT INTO table1(attribute) VALUES (\"value_0\"), (\"value_1\")";
$q1 = $connector->query($sqlInsert); //inserto 2 valores

if($q1) echo "<br><p>Insersión exitosa.<br>Se insertaron los valores:
                value_0 y value_1.<br>Con la consulta: $sqlInsert";

$sqlSelect = "SELECT * FROM table1";
$result = $connector->query($sqlSelect); //consulto table1

if($result) echo "<br><p>Consulta exitosa.<br>Se utilizó la consulta:
                    $sqlSelect<br><p> El resultado fue:<br><p>";

echo "<table>";//creo tabla para mostrar los datos
echo "<tr>";
echo "<td>ID</td>";
echo "<td>ATTRIBUTE</td>";
echo "</tr>";

$reg = mysql_fetch_array($result, MYSQL_BOTH);//reg = los registros del resutado de la consulta
while($reg)
{
echo "<tr>";
echo "<td>".$reg[0]."</td>";
echo "<td>".$reg[1]."</td>";
$reg = mysql_fetch_array($result, MYSQL_BOTH);
echo "</tr>";
}
echo "</table>";

$connector->closeConnection();
?>
