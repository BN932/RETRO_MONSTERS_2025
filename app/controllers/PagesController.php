<?php
namespace App\Controllers\PagesController;
use \PDO;
use \App\Models\MonstersModel;
use \App\Models\UtilitiesModel;
function homeAction(PDO $connexion, int $limit): void {
    include '../app/models/MonstersModel.php';
    $monsters = MonstersModel\findAll($connexion, $limit);
    $monster = MonstersModel\findOneById($connexion, rand(1, 35));
    
    global $content;
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}

function filtersAction (PDO $connexion): void {
    include '../app/models/UtilitiesModel.php';
    $types = UtilitiesModel\typesList($connexion);
    $rareties = UtilitiesModel\raretiesList($connexion);

    global $types_rareties;
    ob_start();
    include '../app/views/templates/partials/_text_searchbar.php';
    include '../app/views/sidebar/_searchbar_sliders.php';
    $types_rareties = ob_get_clean();
}
