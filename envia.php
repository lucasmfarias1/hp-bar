<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/Exception.php';
require './phpmailer/PHPMailer.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$whats = $_POST['whats'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$formacao = $_POST['formacao'];

if (!$nome) header('Location: franquia.html');

$mail = new PHPMailer();

//Recipients
$mail->setFrom('mail@stackstaging.com');
$mail->addAddress('lucasmfarias1@gmail.com');            // Name is optional

// Content
$mail->isHTML(true);                               // Set email format to HTML
$mail->Subject = 'Iniciativa Franqueadores';
$mail->Body    = "
  <p>Nome: $nome</p>
  <p>Idade: $idade</p>
  <p>WhatsApp: $whats</p>
  <p>CPF: $cpf</p>
  <p>RG: $rg</p>
  <p>Cidade para abertura: $cidade</p>
  <p>Email: $email</p>
  <p>Formação: $formacao</p>
";

$mail->send();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/franquia.css">
  <link rel="stylesheet" href="./css/formulario-franquia.css">

  <title>HP Geek Bar n' Burger</title>
</head>

<body>
  <h1>HP Geek Bar n' Burger</h1>

  <div class="franquia" id="franquia">
    <h2>Iniciativa Franqueadores</h2>

    <a href="index.html">
      <img class="franquia__logo" src="./img/franquia/logo.png" alt="hp geek bar n` burger">
    </a>

    <div>

    </div>
    <img class="franquia__logo-franquia" src="./img/franquia/logo-franquia.png" alt="iniciativa franqueadores">

    <h3>
      Sua inscrição foi enviada e vamos te dar uma resposta o mais rápido possível.
    </h3>

    <p>
      Caso queira tirar dúvidas ou ter mais informações, fique à vontade para me contatar diretamente no WhatsApp.
    </p>

    <div class="my-2">
      <p>
        <a href="https://api.whatsapp.com/send?phone=5513997111176" target="_blank">
          <img src="./img/social/whatsapp-black.png" alt="whatsapp">
        </a>
      </p>
      <p>
        <a href="https://api.whatsapp.com/send?phone=5513997111176" target="_blank">(13) 9 9711-1176</a>
      </p>
    </div>

    <img class="franquia__arquivo-confidencial" src="./img/franquia/arquivo-confidencial.png" alt="arquivo confidencial">
  </div>

  <footer class="footer">
    <div class="footer__text">
      <p>
        Desenvolvido por <a href="#" class="link-look">Lucas Manzano</a>
      </p>
    </div>

    <div class="footer__anchor-top">
      <a href="#top" >
        <img src="./img/icons/top-arrow.png" alt="arrow top">
      </a>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>
