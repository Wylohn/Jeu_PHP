<?php
session_start();
spl_autoload_register(function ($className) {

    require_once __DIR__.'/class/'.$className.'.php';
    
});
$db = new DataBase();
$conn = $db->getDb();

$getPlayers = new PlayerManager();
$dataPlayers = $getPlayers->getAllPersos($conn);

?>
<html>
<head>
    <title> VS Game </title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<main>
    <form class=login  method="post" action="confirmCreationPerso.php">
    <h1>Créez votre personnage</h1>
  
    <input type="text" placeholder="NomPerso" name="name" id="name"></br>

        <select name="idrole" id="idrole">
            <option value="2">Guerrier</option>
            <option value="1">Mage</option>
        </select></br>

    <input type="submit" value="Envoyer!">
    </form>


    <table>
        <tr>
            <th>Nom Perso</th>
            <th>Classe Perso</th>
            <th>Statistiques Perso</th>
            <th>Jouer</th>
            <th>Supprimer</th>
        </tr>
        <?php foreach($dataPlayers as $key):?>
            <tr>
                <td>
                    <?= $key['name'];?>
                </td>
                <td>
                    <?= $key['nameRole'];?>
                </td>
                <td>
                    Vie: <?= $key['vie'];?>, Force: <?= $key['force'];?>, Defense: <?= $key['defense'];?>
                </td>
                <!-- Bouton Jouer, ne fonctionne pas, à creuser -->
                <td>
                <form action="play.php" method="GET">
                <input type="submit" value="Jouer" name="<?= $key['id'];?>"></form>
                </td>
                
                <!-- Bouton Supprimer, ne fonctionne pas, à creuser -->
                <td>
                <form action="confirmationDeletePerso.php" method="GET">
                <input type="submit" value="Supprimer" name="<?= $key['id'];?>"></form>
                </td

                </tr>
        }
        <?php endforeach;?>
    </table>
</main>
</body>
</html>