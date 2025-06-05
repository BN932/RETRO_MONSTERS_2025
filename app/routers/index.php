<?php

if (isset($_GET['monsters'])) :
    include_once '../app/routers/monsters.php';
else :
    include_once '../app/controllers/PagesController.php';
    \App\Controllers\PagesController\homeAction($connexion, 3);

endif;