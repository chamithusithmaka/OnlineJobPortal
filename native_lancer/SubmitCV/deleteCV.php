<?php
        $id = $_POST['delete'];

        $pdo = new PDO('mysql:host=localhost;dbname=nativecv', 'root', '');

        $query = "DELETE FROM cv WHERE cvID = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();



?>