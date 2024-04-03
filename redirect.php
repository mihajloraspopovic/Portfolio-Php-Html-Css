<?php
// Definišite URL stranice na koju želite preusmeriti korisnika
$desired_page = "www.discordapp.com/users/406404271534374914";

// Preusmerite korisnika na željenu stranicu
header("Location: $desired_page");
exit(); // Prekinite izvršavanje skripte nakon preusmeravanja
?>
