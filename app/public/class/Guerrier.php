<?php
    class Guerrier extends Perso {
        /**
         * @throws Exception
         */
        public function __construct($data) {
            parent::__construct($data);
            parent::setNameRole("Guerrier");
            parent::setidrole(2);
            $this->force = random_int(5, 10);
            $this->defense = 0;
            $this->vie = 100;
            $this->mana = 0; // I don't have mana
        }
    } 