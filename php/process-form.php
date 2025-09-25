<?php
if (isset($_POST['name'], $_POST['email'], $_POST['comment'])) {

    // Limpar os dados recebidos
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST['comment']);

    // Configurar para onde o e-mail será enviado
    $to = 'h.duhke@gmail.com'; 
    $subject = 'Contato do Website';
    $headers = "From: ".$name." <".$email."> \r\n";
    $headers .= "Reply-To: ".$email."\r\n";

    // Enviar e-mail
    $send_email = mail($to, $subject, $message, $headers);

    echo ($send_email) ? 'success' : 'error';
}
?>
