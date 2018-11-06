<?php

require 'mensagens.php';
$dados= new Mensagens();
$dados->conectar();
$mensagens = $dados->getTodasMensagens();


foreach ($mensagens as $msg) {
	echo "<h3>" . $msg['remetente']. "escreveu (ID: " .$msg['id']."):</h3>";
	echo "<p>";
	echo nl2br($msg['texto']);
	echo"</p>";
}



?>
<form action="enviar.php" method="POST">
	<label for ="remetente">Remetente:</label>
	<input type="text" id="remetente" name="remetente">
	<label for="texto">Mensagem:</label>
	<input type="text" id="texto" name="texto">
	<button type="submit" name="enviar">Enviar (Enter)</button>
