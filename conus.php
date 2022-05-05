Thank You for the Submission
<?php echo '<script type="text/javascript">';
echo 'function Redirect() 
    {  
        window.location="https://kayoschool.com/contact-us.html"; 
    } 
    // document.write("You will be redirected to a new page in 5 seconds"); 
    setTimeout(\'Redirect()\', 2000);  ';
echo '</script>'; ?>

<?php
$name = $_POST['name'];
$lastname  = $_POST['lastname'];
$address  = $_POST['address'];
$phoneno  = $_POST['phoneno'];
$email = $_POST['email'];
$message = $_POST['message'];
?>

<?php
$email_from = 'admissions@kayoschool.com';

$email_subject = "New Message from Kayo Website";

$email_body = "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
</head>
<body>
<table  cellpadding='0' cellspacing='0' style=\"width:800px;height:100px;border-style:none;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;\" >
<tr style=\"vertical-align:top;\" >
    <td style=\"width:800px;height:75px;vertical-align:top;\" > <img
            src='https://kayoschool.com/images/kayo-international-school.png'
            title='KAYO School' /> </td>
</tr>
<tr>
    <td style=\"text-align:left;vertical-align:middle;background-color:#f5f5f5;width:720px;height:115px;padding-top:0;padding-bottom:20px;padding-right:20px;padding-left:20px;\" >
        <p class='feedback-head' style=\"font-family:Arial, 'Times New Roman', Times, serif;font-size:16px;color:#333;margin-top:20px;\" > You have received a new message from the user $name through the kayo Website.</p>
        <p class='feedback' style=\"font-family:Arial, 'Times New Roman', Times, serif;font-size:14px;color:#000;margin-top:5px;margin-bottom:0;margin-right:0;margin-left:0;display:block;padding-top:5px;padding-bottom:5px;padding-right:5px;padding-left:5px;background-color:#e4e4e4;width:95%;float:left;\" ><b>Name :</b></p>
        <p class='data' style=\"font-family:Arial, 'Times New Roman', Times, serif;font-size:12px;color:#333;display:block;width:95%;float:left;padding-left:5px;\" >$name $lastname</p>
        <p class='feedback' style=\"font-family:Arial, 'Times New Roman', Times, serif;font-size:14px;color:#000;margin-top:5px;margin-bottom:0;margin-right:0;margin-left:0;display:block;padding-top:5px;padding-bottom:5px;padding-right:5px;padding-left:5px;background-color:#e4e4e4;width:95%;float:left;\" ><b>Address :</b></p>
        <p class='data' style=\"font-family:Arial, 'Times New Roman', Times, serif;font-size:12px;color:#333;display:block;width:95%;float:left;padding-left:5px;\" >$address</p>
        <p class='feedback' style=\"font-family:Arial, 'Times New Roman', Times, serif;font-size:14px;color:#000;margin-top:5px;margin-bottom:0;margin-right:0;margin-left:0;display:block;padding-top:5px;padding-bottom:5px;padding-right:5px;padding-left:5px;background-color:#e4e4e4;width:95%;float:left;\" ><b>Phone :</b></p>
        <p class='data' style=\"font-family:Arial, 'Times New Roman', Times, serif;font-size:12px;color:#333;display:block;width:95%;float:left;padding-left:5px;\" >$phoneno</p>
        <p class='feedback' style=\"font-family:Arial, 'Times New Roman', Times, serif;font-size:14px;color:#000;margin-top:5px;margin-bottom:0;margin-right:0;margin-left:0;display:block;padding-top:5px;padding-bottom:5px;padding-right:5px;padding-left:5px;background-color:#e4e4e4;width:95%;float:left;\" ><b>E-mail :</b></p>
        <p class='data' style=\"font-family:Arial, 'Times New Roman', Times, serif;font-size:12px;color:#333;display:block;width:95%;float:left;padding-left:5px;\" >$email</p>
        <p class='feedback' style=\"font-family:Arial, 'Times New Roman', Times, serif;font-size:14px;color:#000;margin-top:5px;margin-bottom:0;margin-right:0;margin-left:0;display:block;padding-top:5px;padding-bottom:5px;padding-right:5px;padding-left:5px;background-color:#e4e4e4;width:95%;float:left;\" ><b>Message :</b></p>
        <p class='data' style=\"font-family:Arial, 'Times New Roman', Times, serif;font-size:12px;color:#333;display:block;width:95%;float:left;padding-left:5px;\" >$message</p>

    </td>
</tr>
<tr>
    <td style=\"text-align:center;font-family:Arial;background-color:#d0d0d0;padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;color:#4d4d4d;font-size:12px;\" >
        <p>Copyright (c)Kayo International(Private)Limited. All rights reserved.</p>
    </td>
</tr>
</table>
 
</body>
</html> 
"

?>

<?php

$to = "admissions@kayoschool.com, $email";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $phoneno \r\n";

$headers .= "Return-Path: The Sender <$email_from>\r\n";
$headers .= "Organization: Sender Organization\r\n";
$headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP" . phpversion() . "\r\n";



// $headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
// $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
// $headers .= "CC: susan@example.com\r\n";
// $headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to, $email_subject, $email_body, $headers);

?>

<?php
function IsInjected($str)
{
    $injections = array(
        '(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
    );

    $inject = join('|', $injections);
    $inject = "/$inject/i";

    if (preg_match($inject, $str)) {
        return true;
    } else {
        return false;
    }
}


?>