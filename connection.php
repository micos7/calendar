<?php
$user='root';
$parola='';
$pdo = new PDO("mysql:host=localhost;dbname=ecalendar",$user,$parola);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>