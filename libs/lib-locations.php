<?php

function insertLocation($data)
{
    global $pdo;
    $sql = "INSERT INTO locations (title,lat, lng, type) VALUES (:title,:lat, :lng, :type)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':title' => $data['title'],
        ':lat' => $data['lat'],
        ':lng' => $data['lng'],
        ':type' => $data['type']
    ]);
    return $stmt->rowCount();
}
