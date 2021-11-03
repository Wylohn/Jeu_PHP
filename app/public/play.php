<?php
spl_autoload_register(function ($className) {

    require_once __DIR__.'/class/'.$className.'.php';

});
$db = new DataBase();
$conn = $db->getDb();

$getPlayers = new PlayerManager();
$dataPlayers = $getPlayers->getAllPersos($conn);
    $Mage = null;
    $Guerrier = null;

    $stmt6 = $conn->prepare('SELECT perso.id,role.idrole,name,nameRole FROM perso INNER JOIN role ON role.idrole = role.idrole');
    $stmt6->execute();
    $somme = $stmt6->fetchAll(PDO::FETCH_ASSOC);
    #
    $perso = new Perso($somme);

    $stmt7 = $conn->prepare('SELECT COUNT(perso.id) FROM perso INNER JOIN role ON role.idrole = role.idrole');
    $stmt7->execute();
    $somme7 = $stmt7->fetch();

    ?>
<html>
    <title> VS Game </title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<main>


    <?php if(!$Mage || !$Guerrier ) :?>
    <!-- Le bouton jouer ne renvoi à rien pour le moment -->
    <form class=login  method="post" action="">
    <h1>Choix Personnage</h1>
  
    <input type="text" placeholder="Nom" name="lastName" id="lastName"></br>

    <input type="text" placeholder="Role: 1(Mage) ou 2(Guerrier)" name="idrole" id="idrole"></br>
    <input type="submit" value="Jouez!">
    </form>
    <?php endif ;?>

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
            <!-- Bouton Jouer -->
            <td>
                <form action="play.php" method="GET">
                    <input type="submit" value="Jouer" name="<?= $key['id'];?>"></form>
            </td>

            <!-- Bouton Supprimer -->
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