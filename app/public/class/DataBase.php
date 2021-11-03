<?php

class DataBase
{
    //1-insertion des paramètres de notre base de données
    private $host = 'db';
    private $database_name = 'player';
    private $username = 'root';
    private $password = 'example';
    private $data;

    //création d'une function qui nous permettra de nous connecter à notre base de données en mettant nos paramètres prècedents...

    public function __construct()
    {
        //on specifie que notre $conn est actuellement vide parce-qu'il n'y a pas encore eu de connexion
        $this->data = null;
        try {
            $this->data = new PDO('mysql:host='. $this->host . ';dbname=' . $this->database_name, $this->username, $this->password);
            //on ajoute setAttribute pour reperer facilement les erreurs dans le code
            $this->data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            die('Connection Error : ' . $e->getMessage());
        }

    }

    public function getDb()
    {
        if ($this->data instanceof PDO) {
            return $this->data;
        }
    }
}

