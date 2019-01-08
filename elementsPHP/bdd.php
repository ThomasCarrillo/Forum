<?php
session_start();
/**
 * DEV WINDOWS
 */
// try{
//     $bdd = new PDO('mysql:host=localhost;dbname=thehub;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// }
// catch (Exception $e)
// {
//     die('Erreur : ' . $e->getMessage());
// }
/**
 * PRODUCTION
 */
//$bdd = new PDO('mysql:host=db764576347.hosting-data.io;dbname=db764576347;charset=utf8', 'dbo764576347', 'Vitrolles13');

/**
 * DEV MAC
 */
$bdd = new PDO('mysql:host=localhost;dbname=projet1;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
