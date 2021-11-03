<?php
    # Ici nous n'avons pas réussi à appeler une fonciton hydrate directement depuis cette class
    # dans le construct d'une autre (e.g. Perso).
    # notre hypothèse est que le $this en ligne 17 est ce qui cause problème (s'applique t'il dans la class Hydrate au
    # au lieu de s'appliquer dans le construct où il est appelé sur la class Perso par exemple ?)


class Hydrate
{
    /*
    public function hydrate(array $data) // $data = $_POST
    {
        foreach($data as $key => $value) { // $data = $_POST // $key = $_POST['name'] // $value = "Jacquy"

            $method = 'set' . ucfirst($key); // set"?"() <- setName() setFirstName setID

            if(is_callable([$this, $method])) { // if setName exists
                $this->$method($value); // then launch setName("Charles")
            }
        }
    }*/
}