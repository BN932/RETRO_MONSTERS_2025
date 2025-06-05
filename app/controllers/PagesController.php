<?php
namespace App\Controllers\PagesController;
use \PDO;
use \App\Models\MonstersModel;
function homeAction(PDO $connexion, int $limit): void {
    include '../app/models/MonstersModel.php';
    $monsters = MonstersModel\findAll($connexion, $limit);
    $monster = MonstersModel\findOneById($connexion, rand(1, 35));
    global $content;
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}