if(isset($_POST['enviar'])){
    $assunto = "Fale Conosco";

    $msg = "Nome: " . $_POST["Nome Completo"] . "<br>";
    $msg .= "Email: " . $_POST["Email"] . "<br>";
    $msg .= "Idade: " . $_POST["Cidade/Estado"] . "<p>";
	$msg .= "Idade: " . $_POST["Telefone"] . "<p>";
    $msg .= "Mensagem:<br>" . $_POST["Mensagem"];

    $destinatario = "escritorioircontabilidade@gmail.com";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $_POST["Nome Completo"] . "<" . $_POST["Email"] . ">\r\n";
    $headers .= "Reply-To: " . $_POST["Email"] . "\r\n";

    mail($destinatario,$assunto,$msg,$headers);

    header("Location: contato.html");
}