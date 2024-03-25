<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Validação simples de e-mail e senha
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($senha) >= 6) {
        // Aqui você pode verificar o e-mail e a senha no banco de dados
        // Se o login for válido, redirecione o usuário para a página inicial
        header("Location: pagina_inicial.php");
        exit();
    } else {
        // Se o login não for válido, exiba uma mensagem de erro
        echo "E-mail ou senha inválidos.";
    }
}
?>

