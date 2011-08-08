<style type="text/css">

	body{
	font-family: "Letter Gothic MT";
	font-size: 20px;
	}
	
</style>

<html>
<head>

<h6 align="center">
</head>
</html><body background="imaxes/fondo1.jpg"> 
<?php

if (!$_REQUEST['buscar']) die('No has buscado nada, idiota.');

mysql_connect('sql.esquio.dreamhosters.com','esquio','esquigaliza');
mysql_select_db('esquio');

$busqueda = mysql_real_escape_string($_REQUEST['buscar']);

$result = mysql_query("select * FROM libros WHERE titulo LIKE '%$busqueda%'"); 
while ($libro = mysql_fetch_assoc($result)) {
	echo '<b><font color="#c0c0c0"><p>Titulo: </font><font color="#80e103">'.$libro['titulo'].'</font></p>';
	echo '<b><font color="#c0c0c0"><p>Autor: </font><font color="#80e103">'.$libro['autor'].'</font></p>';
	echo '<b><font color="#c0c0c0"><p>ISBN: </font><font color="#80e103">'.$libro['isbn'].'</font></p>';
	echo '<b><font color="#c0c0c0"><p>Data: </font><font color="#80e103">'.$libro['data'].'</font></p>';
	echo '<b><font color="#c0c0c0"><p>Idioma: </font><font color="#80e103">'.$libro['idioma'].'</font></p>';
	echo '<b><font color="#c0c0c0"><p>Lugar: </font><font color="#80e103">'.$libro['lugar'].'</font></p>';

	
	echo '<b><font color="#c0c0c0"><p>Estado: </font><font color="#80e103">'.$libro['estado'].' </font><a href="editarestado.php?id='.$libro['id'].'&estado=Livre">Livre</a> <a href="editarestado.php?id='.$libro['id'].'&estado=Prestado">Prestado</a></p>';
	
	echo '<img height="200" width=140" src="imaxes/'.$libro['id'].'.'.$libro['extension'].'">';
}

echo '<b><font color="#c0c0c0"> <a href="./">Volver</a></font></b>';
?>
</h6>