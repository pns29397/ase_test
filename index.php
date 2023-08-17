<?php

include "connection.php";

error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['submit']))
{
    
    
    

$nameFail = " ";
$emailFail = " "; 
$mobileFail = " ";
$subjectFail = " ";
$messageFail = " ";


    //echo $name.$mobile.$email.$subject.$message;

if(empty($_POST['name']))
{
  $nameFail = "Name is mandatory";

}
else
{
    
    if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['name']))
    {
        $name = check_value($_POST['name']);
    }
    else
    {
        $nameFail = "Pass only Alphabetical Value";
    }
}

if(empty($_POST['email']))
{
    $emailFail = "Email is Mandatory";
}
else
{
    $email = check_value($_POST['email']);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $emailFail = "Enter a valid Email";
    }
}


if(empty($_POST['mobile']))

    {
        $mobileFail = "Number is Mandatory";
    }
    else
    {
        if(strlen($_POST['mobile']) == 10)
        {
        if(preg_match("/^[0-9]{10}+$/",$_POST['mobile']))
        {   
            $mobile = $_POST['mobile'];
        }
        else
        {
            $mobileFail = "Pass only Numeric Value";
        }
        
        }

        else

        {
        $mobileFail = "Mobile Number is not more or Less than 10 Digit ";
        }

    }


if(empty($_POST['subject']))
{
  $subjectFail = "Subject is mandatory";

}
else
{
    $subject = $_POST['subject'];
    
    
}


if(empty($_POST['message']))
{
  $messageFail = "message is mandatory";

}
else
{
    $message = $_POST['message'];
    
}

$insert = "insert into contact_form (name,mobile,email,subject,message) values ('$name',$mobile,'$email','$subject','$message')";
$res = mysqli_query($con,$insert);
if($res)
{
?>
 <script>alert("Uploaded");</script>
 <?php


/*
FOR Email 

$to_email = "receipient@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: sender email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}


My System is not able to send the mail due to window 11 Issue 
 


*/

}
else
{
?>
<script>alert("Not Uploaded");</script>
<?php
}


}

function check_value($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <STYLE> 
    .span {
        color : red;
    } 
        </STYLE>
</head>
<body>
<form method="POST">
Full Name : <input type="text" name="name" placeholder="Enter your Full Name"> <span class = "span"> <?php echo $nameFail; ?> </span> <br><br>
Phone Number : <input type="mobile" name="mobile" placeholder="Enter your Phone Number"> <span class = "span"> <?php echo $mobileFail; ?> </span><br><br> 
Email : <input type="email" name="email" placeholder="Enter your Email"><span class = "span"> <?php echo $emailFail; ?> </span><br><br>
Subject : <input type="text" name="subject" placeholder="Enter Subject"><span class = "span"> <?php echo $subjectFail; ?> </span><br><br>
Message : <textarea name="message" cols="20" rows="05" placeholder="Enter your Message"></textarea><span class = "span"> <?php echo $messageFail; ?> </span><br><br>
<!-- <input type="text" name="message" required placeholder="Enter your Message"><br><br> -->
<input type="submit" name="submit" value="save">



</form>
</body>
</html>

