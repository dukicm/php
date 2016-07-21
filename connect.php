<?php 

// 1. mysqli_connect() - ova funkcija znaci sledece: otvori mi novu konekciju ka mom MySql Serveru (Bazi)
// 2. or die znaci ako ne uspe konekcija prikazi mi tekst u zagradama.
// 3. ova strana connect.php se mora povezati sa registerFootballClubs.php

$connectionToDatabase = mysqli_connect("localhost", "root", "", "milan") or die('Something is wrong with this connection');



?>