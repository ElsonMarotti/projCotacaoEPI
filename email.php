<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$company = addslashes($_POST['company']);
$address = addslashes($_POST['address']);
$email = addslashes($_POST['email']);
$phone = addslashes($_POST['phone']);
$Autorizo = addslashes($_POST['Autorizo']);
$observations = addslashes($_POST['observations']);
$CA46064 = addslashes($_POST['CA46064']);
$CA460641 = addslashes($_POST['CA460641']);
$CA46063 = addslashes($_POST['CA46063']);
$CA460631 = addslashes($_POST['CA460631']);
$CA460632 = addslashes($_POST['CA460632']);
$CA47639 = addslashes($_POST['CA47639']);
$CA476391 = addslashes($_POST['CA476391']);
$CA47638 = addslashes($_POST['CA47638']);
$CA476381 = addslashes($_POST['CA476381']);
$CA476392 = addslashes($_POST['CA476392']);
$CA48075 = addslashes($_POST['CA48075']);
$CA48076 = addslashes($_POST['CA48076']);

$to = "contato@seusite.com.br";
$subject = "Cotação de Produtos";
$body = "Nome: ".$nome. "\r\n".
        "CIA: ".$company. "\r\n".
        "End.: ".$address. "\r\n".
        "E-mail: ".$email. "\r\n".
        "Tel.: " .$phone. "\r\n".
        "Cont-WhatsApp: ".$Autorizo. "\r\n".
        "*********************************************************". "\r\n".
        "OBS: ".$observations. "\r\n".
        "*********************************************************". "\r\n".
        "Produtos solicitados: ". "\r\n".
        "Luva petroleira vaqueta total CA 46064: ".$CA46064. "\r\n".
        "Luva vaqueta total economy CA 46064: ".$CA460641. "\r\n".
        "Luva petroleira vaqueta mista CA 46063: ".$CA46063. "\r\n".
        "Luva petroleira vaqueta mista economy CA 46063: ".$CA460631. "\r\n".
        "Luva vaqueta mista invertida CA 46063: ".$CA460632. "\r\n".
        "Luva petroleira raspa total CA 47639: ".$CA47639. "\r\n".
        "Luva raspa total economy CA 47639: ".$CA476391. "\r\n".
        "Luva petroleira vaqueta mista com punho CA 47638: " .$CA47638. "\r\n".
        "Luva invertida vaqueta mista com punho CA 47638: ".$CA476381. "\r\n".
        "Luva raspa total com punho CA 47639: " .$CA476392. "\r\n".
        "Avental CA 48075: " .$CA48075. "\r\n".
        "Avental barbeiro CA 48076: " .$CA48076. "\r\n";

$header = "From:contato@seusite.com"."\r\n".
            "Replay-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("Falha ao enviar Email!!!");
}



}
?>