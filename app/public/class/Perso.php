<?php

class Perso {
    public $id;
    public $name;
    public $idrole;
    public $vie;
    public $force;
    public $defense;
    public $mana;
    public $nameRole;
    
    // on call Hydrate dans le construct pour gérer l'instanciation d'objets Persos
    public function __construct(array $data) {
        //$Hydrate = new Hydrate($data); cf. commentaire class Hydrate
        //$Hydrate->hydrate($data);
        $this->hydrate($data);
    }

    public function hydrate(array $data) // $data = $_POST
    {
        foreach($data as $key => $value) { // $data = $_POST // $key = $_POST['name'] // $value = "Jacquy"

            $method = 'set' . ucfirst($key); // set"?"() <- setName() setFirstName setID

            if(is_callable([$this, $method])) { // if setName exists
                $this->$method($value); // then launch setName("Charles")
            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getidrole()
    {
        return $this->idrole;
    }

    /**
     * @param mixed $idrole
     */
    public function setidrole($idrole): void
    {
        $this->idrole = $idrole;
    }

    /**
     * @return int
     */
    public function getVie(): int
    {
        return $this->vie;
    }

    /**
     * @param int $vie
     */
    public function setVie(int $vie): void
    {
        $this->vie = $vie;
    }

    /**
     * @return mixed
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @param mixed $force
     */
    public function setForce($force): void
    {
        $this->force = $force;
    }

    /**
     * @return mixed
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param mixed $defense
     */
    public function setDefense($defense): void
    {
        $this->defense = $defense;
    }

    /**
     * @return mixed
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * @param mixed $mana
     */
    public function setMana($mana): void
    {
        $this->mana = $mana;
    }

    /**
     * @return mixed
     */
    public function getNameRole()
    {
        return $this->nameRole;
    }

    /**
     * @param mixed $nameRole
     */
    public function setNameRole($nameRole): void
    {
        $this->nameRole = $nameRole;
    }

    public function attaquer( $perso) {
        $vieactuelle = $perso->getVie - ($this->getforce - $perso->defense );

        $perso->setVie($vieactuelle);
    }
    
    public function endormir($perso) {

    }
}