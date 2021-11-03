<?php
ob_start(); // mise en buffer

spl_autoload_register(function ($className) {
    require_once __DIR__.'/class/'.$className.'.php';
});

$db = new DataBase();
$conn = $db->getDb();

$getPlayers = new playerManager();

var_dump($_GET);

$value = null;

$getPlayers->deletePerso($conn,$value);


if(!isset($data) && !isset($_GET) ) {
    echo 'Veuillez bien remplir les champs';
}
else {

    // redirect to index.php
    while (ob_get_status()) // reset du buffer
    {
        ob_end_clean();
    }

    // no redirect
    header("Location: index.php");
}

