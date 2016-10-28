<?php

include('Monster.php');
include('Database.php');

try {
    $bdd = new PDO('mysql:host=localhost;dbname=monster;charset=utf8', 'root', '');
} catch (\Exception $e) {
    echo $e->getMessage();
}

$domaineName = isset($_GET['name']);
$email = isset($_GET['email']);

$database = new Database($bdd);


foreach ($database->getEmails() as $result)
    echo $result['id'].' => '.$result['email'];


if ($email)
    $database->insertEmail($email);