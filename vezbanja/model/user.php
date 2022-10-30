<?php
$korisnici = array(
    array(
        "username" => 'admin',
        "password" => 'admin',
    ),
    array(
        "username" => 'aleksa',
        "password" => 'aleksa',
    ),
);

function login($username, $password)
{
    global $korisnici;
    foreach ($korisnici as $k) {
        if ($k['username'] == $username && $k['password'] == $password) {
            return true;
        }
    }
    return false;
}
