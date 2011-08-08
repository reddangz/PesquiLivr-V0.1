<?php

mysql_connect('sql.esquio.dreamhosters.com','esquio','esquigaliza');
mysql_select_db('esquio');

$query = mysql_query ('DELETE FROM libros WHERE id = '.(int)$_GET['id']);


header('Location: /librsearch');