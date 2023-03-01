<?php 
try
{
    $bd= new PDO('mysql:host=localhost;dbname=bd-php','root','');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>