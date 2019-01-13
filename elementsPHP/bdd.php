<?php
session_start();
/**
 * DEV WINDOWS
 */
try{
    $bdd = new PDO('mysql:host=localhost;dbname=thehub;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
/**
 * PRODUCTION
 */
// $bdd = new PDO('mysql:host=91.234.194.248;dbname=blasquez2_thehub;charset=utf8', 'blasquez2', 'F6ToSTH9Ji');

/**
 * DEV MAC
 */
// $bdd = new PDO('mysql:host=localhost;dbname=projet1;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
