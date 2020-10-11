<?php
$firstname = $name = $phoneNumber = $email = $message = "";
$firstnameErr = $nameErr = $phoneNumberErr = $emailErr = $messageErr = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_firstname"])) {
        $firstnameErr = "Name is required";
    } else {
        $firstname = test_input($_POST["user_firstname"]);
    }

    if (empty($_POST["user_name"])) {
        $nameErr = "Email is required";
    } else {
        $name = test_input($_POST["user_email"]);
    }

    if (empty($_POST["user_phone_number"])) {
        $phoneNumberErr = "Phone number is required";
    } else {
        $phoneNumber = test_input($_POST["user_phone_number"]);
    }

    if (empty($_POST["user_email"])) {
        $emailErr = "Email is required";
    } else {
        filter_var(test_input($_POST["user_email"]), FILTER_VALIDATE_EMAIL) ? $email = ($_POST["user_email"]) : $emailErr = "Email is not valid";
    }

    if (empty($_POST["user_message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["user_message"]);
    }
}

if ($firstname == "") {
    echo $firstnameErr . '<br>';
}
if ($name == "") {
    echo $nameErr . '<br>';
}
if ($phoneNumber == "") {
    echo $phoneNumberErr . '<br>';
}
if ($email =="") {
    echo $emailErr . '<br>';
}
if ($message == "") {
    echo $messageErr . '<br>';
}

if ($firstname != "" && $name != "" && $phoneNumber != "" && $email != "" && $message != "") {
echo ' Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_name'] . ' de nous avoir contacté à propos de ' . $_POST['subject'] . '<br>';
echo 'Un de nos conseiller vous contactera soit à l\'adresse ' . $_POST['user_email'] . '<br>';
echo 'ou par téléphone au ' . $_POST['user_phone_number'] . ' dans les plus brefs délais pour traiter votre demande :' . '<br>';
echo $_POST['user_message'];
};
