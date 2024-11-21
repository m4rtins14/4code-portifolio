<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $celular = htmlspecialchars($_POST['celular']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Seu e-mail
    $para = "juliamartinsdesouza33@gmail.com";
    $assunto = "Nova mensagem do formulário de contato";

    // Mensagem que será enviada
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "E-mail: $email\n";
    $mensagem_email .= "Celular: $celular\n";
    $mensagem_email .= "Mensagem: \n$mensagem\n";

    // Cabeçalhos do e-mail
    $headers = "From: $email";

    // Envia o e-mail
    if (mail($para, $assunto, $mensagem_email, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem. Tente novamente.";
    }
} else {
    echo "Método de envio inválido.";
}
?>
