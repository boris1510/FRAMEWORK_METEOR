<?php

// Započni novu ili nastavi postojeću sesiju
session_start();

// Uključi vanjsku biblioteku
include 'baza.php';

// Inicijaliziraj bazu
$baza = new Baza();

// Izvrši upit i vrati rezultat
$rezultat = $baza->query('SELECT * FROM korisnici WHERE korisnicko_ime = ? AND lozinka = ?', [$_POST['korisnicko_ime'], $_POST['lozinka']]);

// Provjeri rezultat upita
if(empty($rezultat))
{
    // Korisnik s ovim pristupnim podacima ne postoji u bazi ili je dana lozinka neispravna
    // Prijava je neuspješna

    echo 'Neispravno korisničko ime i/ili lozinka.';
}
else
{
    // Korisnik s ovim pristupnim podacima postoji u bazi i dana lozinka je ispravna
    // Prijava je uspješna

    // Spremi korisničke podatke u sesijsku varijablu
    $_SESSION['id'] = $rezultat[0]['id'];
    $_SESSION['ime'] = $rezultat[0]['ime'];
    $_SESSION['korisnicko_ime'] = $rezultat[0]['korisnicko_ime'];
    $_SESSION['email'] = $rezultat[0]['email'];
    $_SESSION['grad_id'] = $rezultat[0]['grad_id'];

    // Preusmjeri na login.php
    header('Location: admin.php');
}