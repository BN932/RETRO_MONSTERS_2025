<?php

use \App\Controllers\MonstersController;
use \App\Controllers\PagesController;

if(isset($_POST['texte'])) :
    include_once '../app/controllers/MonstersController.php';
    include_once '../app/controllers/PagesController.php';
    MonstersController\showResultNameSearch($connexion, $_POST['texte']);
    PagesController\filtersAction($connexion);
else :
    include_once '../app/controllers/MonstersController.php';
    include_once '../app/controllers/PagesController.php';
    switch ($_GET['monsters']) :
    
        case 'show':
            MonstersController\showAction($connexion, $_GET['id']);
            \App\Controllers\PagesController\filtersAction($connexion);
        break;
        default:
            MonstersController\indexAction($connexion, 10);
            PagesController\filtersAction($connexion);
        break;
    endswitch;

endif;
