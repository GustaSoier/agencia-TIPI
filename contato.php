<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;

if (isset($_POST["email"])) {

//Load Composer's autoloader
require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';     //mudar o nome de acordo com o site de hospedagem
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ascensaodev@smpsistema.com.br';      //trocar de acordo com o email de disparo
    $mail->Password   = 'Senac@agencia04';      //trocar de acordo com a senha do email
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //mudar de acordo com a porta da hospedagem; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ascensaodev@smpsistema.com.br', 'Site agência TIPI');  // adicionar qual email vai enviar a mensagem e qual sera a mensagem
    $mail->addAddress('gsampaiosoier0@gmail.com');     //adicionar qual email vai receber

/*
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
*/

    //Content
    // dados do email
    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $mens = $_POST['mens'];

    $mail->isHTML(true);                               
    $mail->Subject = 'Site agência TIPI';
    $mail->Body    = "
        nome: $nome <br>
        E-mail: $email <br>
        Telefone: $tel <br>
        Mensagem: $mens
        ";

    $mail->AltBody = "
    nome: $nome <br>
    E-mail: $email <br>
    Telefone: $tel <br>
    Mensagem: $mens
    ";

    $mail->send();
    $ok = 1;
    // echo 'Mensagem enviada com SUCESSO!';
} catch (Exception $e) {
    $ok = 2;
    echo "ERRROOO... Tente mais tarde: {$mail->ErrorInfo}";
}
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agência TIPI</title>

    <!-- esses links são para chamar pastaas de estilização para o site -->
    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
     <?php require_once('conteudo/topo.php'); ?>

<main>

<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0254648900745!2d-46.434437023706685!3d-23.495592259181176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1sen!2sbr!4v1687884230706!5m2!1sen!2sbr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="form">
    <div class="site">
        <h2>Formulário de contato</h2>
        <div>
            <form action="#" method="post" id="formContato">
            <div>
                <input type="text" id="nome" name="nome" placeholder="Informe seu nome:">
                <input type="email" id="email" name="email" required placeholder="Informe seu email:">
                <input type="tel" id="tel" name="tel" placeholder="Informe seu telefone:">
                <h3>
                <?php
                    if($ok == 1){
                        echo $nome . ", sua mensagem foi enviada com sucesso!!!";
                    }elseif($ok == 2){
                        echo $nome . ", erro ao enviar sua mensagem. Tente mais tarde";
                    }
                ?>
                </h3>

            </div>

            <div>
                <textarea name="mens" id="mens" cols="30" rows="10" placeholder="Informe sua mensagem:"></textarea>
                <div>
                <input type="submit" value="Enviar via e-mail">
                <button onclick="event.preventDefault(); formWhats()">Enviar via WhatsApp</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>

    <?php require_once('conteudo/sobre-conteudo.php'); ?>
    <?php require_once('conteudo/depoimento.php'); ?>
    <?php require_once('conteudo/blog.php'); ?>

</main>

<footer>
    <?php require_once('conteudo/rodape.php'); ?>
    <?php require_once('conteudo/direitos.php'); ?>
</footer>
    

    <!-- aqui é pra chamar o aquivo js da biblioteca -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- aqui é pra chamar o arquivo js de animaçoes e precisa ser puxar da biblioteca para acha-lo -->
    <script src="js/slick.js"></script>

        <!-- animações AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- eu abri a pasta de animações de js -->
    <script src="js/script.js"></script>

    
</body>
</html>