<?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=Unit-fiverr;charset=utf8', 'aeziak', 'Alomac07');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) 
    {
        die('Erreur' .$e -> getMessage());
    }
?>