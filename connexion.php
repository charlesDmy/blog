<?php
$mdp='';
$user='root';
$host='localhost';
$dbname='mini_projet_blog';

$options=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user, $mdp, $options);