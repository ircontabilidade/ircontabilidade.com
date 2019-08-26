<?php
session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
	if (($usuario == "08886250000182") || ($senha == "08886250000182")) {
		$_SESSION['OK1'] = 'permitido';
		Header("Location: empresa/08886250000182.html");
	} else if (($usuario == "12141590000151") || ($senha == "12141590000151")) {
		$_SESSION['OK2'] = 'permitido';
		Header("Location: empresa/12141590000151/1/12141590000151.html");
	} else if (($usuario == "15265251000175") || ($senha == "15265251000175")) {
		Header("Location: empresa/15265251000175/1/15265251000175.html");
	}
?>