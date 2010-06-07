<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Formulario Ingreso de Datos</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
      <h1>Ingresar los datos de conexión con la BD:</h1>
      <form name="ingresoDatos" action="conectar.php" method="POST">
          <table><tr>
            <th>Host:</th><td><input type="text" name="host" size="30"/></td>
            <th>Base de datos:</th><td><input type="text" name="db" size="30"/></td>
            </tr><tr>
            <th>Ususario:</th><td><input type="text" name="user" size="30"/></td>
            <th>Clave:</th><td><input type="text" name="pwd" size="30"/></td>
            </tr><tr>
            <th></th><td><button type=submit/>Conectar</td>
         </tr></table>
      </form>
  </body>
</html>
