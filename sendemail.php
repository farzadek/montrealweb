<?php
 header("Access-Control-Allow-Origin: *");
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
$message = nl2br(strip_tags($_POST['message']));

$lang = filter_var(trim($_POST['lang']), FILTER_SANITIZE_STRING);
$findError = false;
$error['name'] = '';
$error['email'] = '';
$error['phone'] = '';
$error['message'] = '';
$error['send'] = '';

if(!$name){
    $error['name'] = "Tu ne veux pas nous dire ton nom?";
    if($lang == "0"){
        $error['name'] = "Don't you want to tell us your name?";
    }
    $findError = true;
}
if(!$phone && !$email){
    $error['email'] = "Nous avons besoin de votre numéro de téléphone ou de votre adresse électronique pour vous contacter.!";
    if($lang == "0"){
        $error['email'] = "We need your phone number or email address to contact you!";
    }
    $findError = true;
} 
else {
    if($phone && !preg_match("/^\(?([2-9][0-8][0-9])\)?[-. ]?([2-9][0-9]{2})[-. ]?([0-9]{4})$/", $phone)){
        $error['phone'] = "Il semble que le numéro de téléphone n'est pas correcte!";
        if($lang == "0"){
            $error['phone'] = "It seems that Phone no. is not correct!";
        }
        $findError = true;
    }
    if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "Il semble que le format d'email n'est pas correct!";
        if($lang == "0"){
            $error['email'] = "It seems that Email format is not correct!";
        }
        $findError = true;
    }
}
if(strlen($message)<3){
    $error['message'] = "Veux-tu me dire ce que je peux faire pour toi?";
    if($lang == "0"){
        $error['message'] = "Would you like to tell me what can I do for you?";
    }
    $findError = true;
}

if($findError){
    echo json_encode(array('error' => $error));
}
else {
    $msg = '<body><html><p style="font-size:14px">NAME: <strong>'.$name.'</strong></p><br/><p style="font-size:14px">EMAIL: <strong>'.$email.'</strong></p><br/>';
    $msg .= '<p style="font-size:14px">PHONE: <strong>'.$phone.'</strong></p><br/><p style="font-size:15px">'.$message.'</p></body></html>';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    if(mail("farzadek@gmail.com","visitor from MontrealWeb.ca",$msg, $headers)){
        $succ = true;
        $msg = '';
        if($email){
            if($name){
                $msg .= '<p>Dear <strong>'.$name.'</strong></p>';
            }
            $msg .= '<p>We received your message and we\'ll contact you as soon as possible.</p>';
            $msg .= '<p>Have a nice day.</p>';
            $msg .= '<p>Lili Ashadi - MontrealWEB.ca</p>';
            mail($email,"Message from MontrealWeb.ca",$msg, $headers);
        }
    } 
    else {
        $error['send'] = "Unfortunately our server didn't respond. Please try later!";
        echo json_encode(array('error' => $error));
    }
    
}

?>