<?php
/*
 *    
 *      Copyright 2009 Antonio Gomez Garcia <agomeztron@yahoo.es>
 *      
 * Este programa es software libre; lo puedes redistribuir y/o modificar
 * bajo los terminos de la licencia publica GNU, publicada por la Free 
 * Software Foundation; ya sea la version 2 de la licencia, o cualquier 
 * version posterior.
 * 
 * Este programa se esta distribuyendo con la esperanza de que sea util 
 * a la comunidad, pero SIN NINGUNA GARANTIA, �RECLAMACIONES, AL MAESTRO 
 * ARMERO!, que decian en la mili. Si te quedas con la duda, examina los
 * terminos de la licencia GNU
 * 
 * Deberias haber recibido una copia de la Licencia Publica General GNU 
 * junto con esta aplicacion. Si no es asi, y te da pereza tirar de In-
 * ternet, escribe a: Free Software Foundation, Inc., 51 Franklin Street
 * , Fifth Floor, Boston, MA 02110-1301,USA.
 * 
 */
?>
 <?php 

   include("conectarse.php");
   $link=Conectarse();
   $nombre=md5($_POST['nombre']);
   $contra=md5($_POST['contra']);
	$result = mysql_query("SELECT id FROM claves WHERE nombre='$nombre' AND contra='$contra'");
$row = mysql_fetch_array($result);
if ((!isset($row[0]))) {
echo "El Usuario con Nombre <B>".$nombre."</B> no est� registrado en nuestra base de datos o no ha introducido adecuadamente su clave."; mysql_close();
} else{
echo "<meta http-equiv=\"refresh\" content=\"5;URL=pruebaconexion.php\">";
}
  ?>

  



</body>
</html>
