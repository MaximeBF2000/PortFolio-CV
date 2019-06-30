<?php

require_once(__DIR__."/../database_co.php");
require_once('./../vendor/autoload.php');
require_once("./../vendor/infoMail.php");


if( # Form --> is complete ?
    count($_POST) === 4
    && isset($_POST["nom"])
    && isset($_POST["prenom"])
    && isset($_POST["mail"])
    && isset($_POST["msg"])
) {
    $prepare = $db->prepare(" INSERT INTO contact (nom, prenom, mail, msg) 
    VALUES (:nom, :prenom, :mail, :msg) ");
    $prepare->bindValue(":nom", $_POST["nom"]);
    $prepare->bindValue(":prenom", $_POST["prenom"]);
    $prepare->bindValue(":mail", $_POST["mail"]);
    $prepare->bindValue(":msg", $_POST["msg"]);
    $prepare->execute();

    // $prepare2 = $db->prepare("SELECT * FROM contact");
    $prepare2 = $db->prepare("SELECT * FROM contact ORDER BY id DESC LIMIT 1");
    $prepare2->execute();
    $form_mail = $prepare2->fetch(PDO::FETCH_ASSOC);
    // print("<pre>"); die(var_dump($form_mail));
    

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername($mailperso)
    ->setPassword($mdpperso)
    ;

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message 
    $message = (new Swift_Message('contact message'))
    ->setFrom([$form_mail["mail"] => $form_mail["prenom"]])
    ->setTo(['maxime.bounaas@gmail.com' => 'maxime'])
    ->setBody($form_mail["msg"])
    ;

    // Send the message
    $result = $mailer->send($message);

    $_POST = null;
}

?>

<div class="conteneur zoneWhite" id="meContacter">
    <div class="zoneTitle fadeUp-b">Me contacter</div>
    <div class="container fadeUp-b">
        <form id="formulaire" action="" method="POST">
            <label for="nom">Nom : </label>
            <input id="nom" name="nom" type="text">
            <div id="nomCheck"></div>
            <label for="prenom">Prénom : </label>
            <input id="prenom" name="prenom" type="text">
            <div id="prenomCheck"></div>
            <label for="mail">Email : </label>
            <input id="mail" name="mail" type="text">
            <div id="mailCheck"></div>
            <label for="message">Votre Message : </label>
            <textarea name="msg" id="message"></textarea>
            <button id="sendFormBtn" type="button">Envoyer</button>
        </form>
    </div>
</div>
