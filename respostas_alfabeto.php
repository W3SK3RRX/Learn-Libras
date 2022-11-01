<?php

if(isset($_POST['enviar-formulario'])):
	$msg = array();
	$p1 = $_POST['resposta-p1'];
	if($p1 == "livro"):
		$msg[] = 'Acertou!';
	else:
		$msg[] = 'Errou!';
	endif;
endif;

?>