<?php
session_start();
require "model/user.php";
require "model/tim.php";

//dodavanje
if (isset($_POST['dodajTim'])) {
    $_SESSION['timovi'][] = array(
        "timID" =>  findMaxId() + 1,
        "nazivTima" => $_POST['nazivTima'],
        "drzava" => $_POST['drzava'],
        "godinaOsnivanja" => $_POST['godinaOsnivanja'],
        "brojTitula" => $_POST['brojTitula'],
    );
    unset($_SESSION['timovi-search']); //ovo dodaj tek kad odradis SEARCH
    header("Location: .");
    include "home.php";
    exit();
}

//brisanje
if (isset($_GET['timID-izbrisi']) && is_numeric($_GET['timID-izbrisi'])) {
    for ($i = 0; $i < count($_SESSION['timovi']); $i++) {
        if ($_SESSION['timovi'][$i]['timID'] == $_GET['timID-izbrisi']) {
            array_splice($_SESSION['timovi'], $i, 1);
            unset($_SESSION['timovi-search']); //ovo dodaj tek kad odradis SEARCH
            header("Location: .");
            exit();
        }
    }
}


//azuriraj
if (isset($_POST['azurirajTim'])) {
    for ($i = 0; $i < count($_SESSION['timovi']); $i++) {
        if ($_SESSION['timovi'][$i]['timID'] == $_GET['timID-izmeni']) {
            $_SESSION['timovi'][$i]['nazivTima'] = $_POST['nazivTima'];
            $_SESSION['timovi'][$i]['drzava'] = $_POST['drzava'];
            $_SESSION['timovi'][$i]['godinaOsnivanja'] = $_POST['godinaOsnivanja'];
            $_SESSION['timovi'][$i]['brojTitula'] = $_POST['brojTitula'];
            break;
        }
    }
    header("Location: .");
    include "home.php";
    exit();
}


//predji na stranicu za azuriranje
if (isset($_GET['timID-izmeni']) && is_numeric($_GET['timID-izmeni'])) {
    include "updateTeam.php";
    exit();
}

//filtriranje
if (isset($_GET['unos'])) {
    if ($_GET['unos'] == "")
        unset($_SESSION['timovi-search']);
    else {
        $_SESSION['timovi-search'] = [];
        foreach ($_SESSION['timovi'] as $tim) {
            if (
                str_contains(strtolower($tim['nazivTima']), strtolower($_GET['unos'])) ||
                str_contains(strtolower($tim['drzava']), strtolower($_GET['unos'])) ||
                str_contains(strtolower($tim['godinaOsnivanja']), strtolower($_GET['unos'])) ||
                str_contains(strtolower($tim['brojTitula']), strtolower($_GET['unos']))
            ) {
                $_SESSION['timovi-search'][] = $tim;
            }
        }
    }
    header("Location: .");
    exit();
}


//za prelazak na drugu stranicu
if (isset($_GET['addTeam'])) {
    include "addTeam.php";
    exit();
}

//za sortiranje tabele
if (isset($_GET['sortiraj'])) {
    usort($_SESSION['timovi'], function ($a, $b) {
        return strcmp($a['nazivTima'], $b['nazivTima']);
    });
    header("Location: .");
    exit();
}


//za login
if (isset($_POST['username']) && isset($_POST['password'])) {
    $uname = $_POST['username'];
    $upass = $_POST['password'];

    if (login($uname, $upass)) {
        $_SESSION['username'] = $uname;
        include "home.php";
        // header('Location: home.php');
        exit();
    }
}

if (isset($_SESSION['username'])) {
    include "home.php";
    exit();
}

include "login.php";


function findMaxId()
{
    $idjevi = [];
    foreach ($_SESSION['timovi'] as $tim) {
        $idjevi[] = $tim['timID'];
    }
    return max($idjevi);
}
