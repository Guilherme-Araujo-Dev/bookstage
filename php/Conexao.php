<?php

    function conectar() {
        $pdo = new PDO('mysql:host=;dbname=bookstage', 'root', '');
        return $pdo;
    };

?>