<?php
ob_start(); // mise en buffer

require_once 'index.php';

spl_autoload_register(function ($className) {

    require_once __DIR__.'/class/'.$className.'.php';

});

// instanciation de la DB
$db = new DataBase();
$conn = $db->getDb();



//..
//...
//....
// check if form is correctly sent
if(isset($_POST['name']) && isset($_POST['idrole']) ) {

    $perso = null;

    switch($_POST['idrole']) {
        case '1':
            try {
                $perso = new Mage($_POST);
            }
            catch (Exception $e)
            {
                echo 'Exception reçue: ',$e->getMessage(), "\n";
            }
            break;

        case '2':
            try {
                $perso = new Guerrier($_POST);
            }
            catch (Exception $e)
            {
                echo 'Exception reçue: ',$e->getMessage(), "\n";
            }
            break;

    }
    $setPersos = new PlayerManager();
    $setPersos->setPerso($conn,$perso);

    $name = $perso->getName();

    $id = $setPersos->getId($conn, $name);
    echo $id."zdfzerf";
    $perso->setId($id);

    $perso->setSkills($conn,$perso,$id);
    var_dump($perso);

}
if(!isset($_POST['name']) || !isset($_POST['idrole']) ) {

    echo 'Veuillez bien remplir les champs';
}

// redirect to index.php
while (ob_get_status()) // reset du buffer
{
    ob_end_clean();
}

// no redirect
header("Location: index.php");
