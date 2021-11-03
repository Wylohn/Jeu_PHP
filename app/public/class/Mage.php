<?php
    class Mage extends Perso {
        /**
         * @throws Exception
         */
        public function __construct($data) {
            parent::__construct($data);
            parent::setNameRole("Mage");
            parent::setidrole(1);
            $this->force = random_int(20, 40);
            $this->defense = random_int(10, 19);
            $this->vie = 100;
            $this->mana = 1; // I have mana
        }
    }