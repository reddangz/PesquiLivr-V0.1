<body background="./imaxes/fondo1.jpg"
<style type="text/css">
	body{
	font-family: "Letter Gothic MT";
	font-size: 15px;
	background-image: url(./imaxes/fondo1.jpg)
	}

</style>
<h2 align="center"><b><font size="13px" color="#c0c0c0"> Lista de livros...<br></b></font>

<?php

mysql_connect('sql.esquio.dreamhosters.com','esquio','esquigaliza');
mysql_select_db('esquio');

$query = mysql_query ('select * FROM libros');

while ($libro = mysql_fetch_array($query)) {

echo '<strong><a href="busqueda.php?buscar='.$libro['titulo'].'">'.$libro['titulo'].'</a></strong><font color="#c0c0c0"> de <em>'.$libro['autor'].'</em> - <a href="delete.php?id='.$libro['id'].'">borrar?</a><br></font>';


}
echo '<br><br><br><br><b><font color="#c0c0c0"> <a href=".">Volver</a></font></b>';
?>
</h2>