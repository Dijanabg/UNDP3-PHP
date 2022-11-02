<?php
session_start();
session_destroy();

//Brisanje kolacica
// if( isset($_COOKIE['email']) && isset($_COOKIE['password']) && isset($_COOKIE['username'] )) {
//     $emailCookie = $_COOKIE['email'];
//     $passwordCookie = $_COOKIE['password'];
//     $usernameCookie = $_COOKIE['username'];

//     setcookie('email', $emailCookie, time() - 1);
//     setcookie('password', $passwordCookie, time() - 60);
//     setcookie('username', $usernameCookie, time() - 60);
// }

//DOMACI KOLACICI BRISANJE
if (isset($_COOKIE['user'])) {
    $user = $_COOKIE['user'];
    setcookie('user', $user, time() - 1);
}


echo "Uspesno ste se odjavili!
          Kliknite <a href='login.php'> ovde </a> da biste ponovo logovali.";
