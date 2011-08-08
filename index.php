<body background="imaxes/fondo1.jpg">

<h6 align="center"><font size="20" color="#ffffff"> PesquiLivr V. 0.1</font>
<br><br>

<style type="text/css">
	body{
	font-family: "Letter Gothic MT";
	font-size: 25px;
	background-image: url(./imaxes/fondo1.jpg)
	}
	
	.suggestionsBox {

		background-color: #000000;
		-moz-border-radius: 7px;
		-webkit-border-radius: 7px;
		border: 2px solid #000;	
		color: #fff;
	}
	
	h3 {
		margin: 0px;
		padding: 0px;
		
	}

	
	.suggestionList {
		margin: 0px;
		padding: 0px;
	}
	
	.suggestionList li {
		
		margin: 0px 0px 3px 0px;
		padding: 3px;
		cursor: pointer;
	}
	
	.suggestionList li:hover {
		background-color: #659CD8;
	}

	</style>




<FORM action="arquivo.php" method="post" enctype="multipart/form-data">
    <P>
    <audio autoplay>aaa </audio>
    <LABEL for="nombre"><b><font color="#c0c0c0">Titulo: </font></b></LABEL>
              <INPUT type="text" name="titulo"><BR>
    <LABEL for="autor"><b><font color="#c0c0c0">Autor: </font></LABEL>
              <INPUT type="text" name="autor"><BR>
    <LABEL for="isbn"><b><font color="#c0c0c0">ISBN: </font></LABEL>
              <INPUT type="text" name="isbn"><BR>
    <LABEL for="email"><b><font color="#c0c0c0">Data:</font> </LABEL>
              <INPUT type="text" name="data"><BR>
    <LABEL for="idioma"><b><font color="#c0c0c0">Idioma: </font></LABEL>
              <INPUT type="text" name="idioma"><BR>
    <LABEL for="lugar"><b><font color="#c0c0c0">Lugar: </font></LABEL>
              <INPUT type="text" name="lugar"><BR>
              
              
    <font color="#c0c0c0">Estado: </font> 
             
	<select name="estado">

	<option value="livre" selected>Livre</option>

	<option value="prestado">Prestado</option>

	</select>
	<br>
		
   	<input name="file" type="file" id="file"> <br>
    <INPUT type="submit" value="Gardar livro">
    </P>
 </FORM>



<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
	function lookup(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("rpc.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#suggestions').show();
					$('#autoSuggestionsList').html(data);
				}
			});
		}
	} // lookup
	
	function fill(thisValue) {
		$('#inputString').val(thisValue);
		setTimeout("$('#suggestions').hide();", 200);
	}
</script>

</head>


<form>
			<div>
				<font color="#c0c0c0"><br><br><br><br><br>Procurar um livro:</font>
				<br />
				<input align="center" type="text" size="30" value="" id="inputString" onkeyup="lookup(this.value);" onblur="fill();" name="buscar" />
			</div>
			
			<div class="suggestionsBox" id="suggestions" style="display: none;">
				
				<div class="suggestionList" id="autoSuggestionsList">
					&nbsp;
				</div>
			</div>
		</form>
		
		
<a href="lista.php" target="main">Lista</a> 

