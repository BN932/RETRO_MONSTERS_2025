<?php
namespace App\Models\MonstersModel;
use \PDO;
function findAll(PDO $connexion, int $limit): array {
    /*Ici viennent les requêtes SQL*/
    $sql = "SELECT monsters.*, monster_types.name AS type_name
            FROM monsters
            JOIN monster_types ON monsters.type_id = monster_types.id
            ORDER BY created_at DESC
            LIMIT $limit";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
function findOneById(PDO $connexion, int $id) : array {
    /*Ici viennent les requêtes SQL*/
    $sql = "SELECT monsters.*, monster_types.name AS type_name
            FROM monsters
            JOIN monster_types ON monsters.type_id = monster_types.id
            WHERE monsters.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}