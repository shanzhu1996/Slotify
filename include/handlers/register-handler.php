<?php
function sanitizerFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
}

function sanitizerFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

function sanitizerFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

function validateUsername($un) {

}

function validateFirstName($fn){

}

function validateLastName($ln) {

}

function validateEmail($em1, $em2) {

}

function validatePassword($pw1, $pw2) {

}

if(isset($_POST['registerButton'])) {
    // If login button is pressed
    $username = sanitizerFormUsername($_POST['username']);
    $firstName = sanitizerFormString($_POST['firstName']);
    $lastName = sanitizerFormString($_POST['lastName']);
    $email = sanitizerFormString($_POST['email']);
    $email2 = sanitizerFormString($_POST['email2']);
    $password = sanitizerFormPassword($_POST['password']);
    $password2 = sanitizerFormPassword($_POST['password2']);

    validateUsername($username);
    validateFirstName($firstName);
    validateLastName($lastName);
    validateEmail($email, $email2);
    validatePassword($password, $password2);
}

?>