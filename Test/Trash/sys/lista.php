<?php
    session_start();
    include_once("../../settings/settings.php");
    $id_de = $usuarioAtual;
    $id_para = $_SESSION['id_para'];

    $sql = SELECT * FROM("SELECT * FROM mensgens WHERE (id_de = :d and id_para = :p) or (id_de = :p and id_para = :d) ORDER BY DESC LIMIT 10) sub ORDER BY id ASC");
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":d", $id_de);
    $stmt->bindParam(":p", $id_para);
    $stmt->execute();
?>