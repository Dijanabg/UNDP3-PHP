<?php
session_start();
echo "Dobrodosao, " . $_SESSION['email'];
echo "<a href='logout.php'> Log out. </a>";

// if( isset($_COOKIE['email']) && isset($_COOKIE['password']) && isset($_COOKIE['username'])) {
//     $usernameCookie = $_COOKIE['username'];
//     $emailCookie = $_COOKIE['email'];
//     $passwordCookie = $_COOKIE['password'];

//     echo "<script> 
//             alert('$usernameCookie');
//           </script>";
// }

//DOMACI IZVLACENJE IZ KOLACICA PUTEM DESERIJALIZE
if (isset($_COOKIE['user'])) {
    $userDe = unserialize($_COOKIE['user']);
    //$usernameCookie = $userDeserialize['username'];
    // $emailCookie = $userDeserialize['email'];
    // $passwordCookie = $userDeserialize['password'];

    echo "<br> Username: " . $userDe['username'];
    echo "<br> Email: " . $userDe['email'];
    echo "<br> Password: " . $userDe['password'];
}
