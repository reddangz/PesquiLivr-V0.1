<?php

mysql_connect('sql.esquio.dreamhosters.com','esquio','esquigaliza');
mysql_select_db('esquio');

$estado = mysql_real_escape_string($_GET['estado']);;
$id_libro = (int) $_GET['id'];

$query = mysql_query("UPDATE libros SET estado = '$estado' WHERE `id` = $id_libro");

header('Location: '.$_SERVER['HTTP_REFERER']);