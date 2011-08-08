<body background="imaxes/fondo.jpg"> 
<style type="text/css">
	body{
	font-family: "Letter Gothic MT";
	font-size: 15px;
	background-image: url(./imaxes/fondo1.jpg)
	}

</style>
<h2 align="center">

<?php

if ($_POST) {

mysql_connect('sql.esquio.dreamhosters.com','esquio','esquigaliza');
mysql_select_db('esquio');

// detectamos extensi—n archivo subido
$ext = explode('.', $_FILES['file']['name']);
$extension = $ext[count($ext)-1];

$q = mysql_query("insert into libros (titulo,autor,isbn,`data`,lugar,idioma,estado,extension) values ('".$_POST['titulo']."', '".$_POST['autor']."', '".$_POST['isbn']."', '".$_POST['data']."', '".$_POST['lugar']."', '".$_POST['idioma']."', '".$_POST['estado']."', '$extension')") ;



function crearArbol($categorias,$cat_id,$nome){
	
	$sql='select * from '.$categorias;
$rs=@mysql_query($sql);
if($rs){
           /*Recorrer todos las entradas */
           while($arr=mysql_fetch_array($rs)){
        /* Imprimir campo a mostrar*/
                echo($prefix.$arr[$show_data].'<br>');
        
        /* imprimir arbol the "hijos" de este elemento*/
                crearArbol($categorias,$cat_id,$parent_id,
                               $link_field,$arr[$id_field],$prefix.$prefix);
           }
    }    
}  


if ($_FILES)
{
	copy($_FILES['file']['tmp_name'], './imaxes/'.mysql_insert_id().'.'.$extension);
}

echo '<b><font color="#c0c0c0">Meteuse bem o livro<br></font>';

}

echo "<a href='.'><br><br>Volver a pagina principal</a>"

?>

</h2>
