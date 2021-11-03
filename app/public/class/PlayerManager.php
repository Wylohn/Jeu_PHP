<?php

    class PlayerManager{


        public function setPerso($conn,$perso) {
            // Insert into table perso
            $stmt = $conn->prepare("INSERT INTO perso (name, idrole) VALUES (:name, :idrole)");
            $stmt->execute(
                array(
                    ':name'=> $perso->getName(), // name = null
                    ':idrole'=> $perso->getidrole()
                )
            );
        }

        public function setSkills($conn,$player,$id){
            // Inster into table skills
            $stmtSkills = $conn ->prepare("INSERT INTO `skills` (`vie`, `force`, `defense`, `mana`, `id`) VALUES (:vie, :force, :defense, :mana, :id)");
            $stmtSkills->execute(
                array(
                    ':vie'=> $player->getVie(),
                    ':force'=> $player->getForce(),
                    ':defense'=> $player->getDefense() ,
                    ':mana'=> $player->getMana(),
                    ':id'=> $id,
                )
            );

        }

        public function getId($conn,$name): int
        {
            // Insert into table skills
            $stmtId = $conn ->prepare("SELECT * FROM perso WHERE name = :name");
            $stmtId->execute(
                array(
                    ':name' =>$name,
                )

            );
            $repId = $stmtId->fetch();
            return (int)$repId['id'];
        }

        public function getAllPersos($conn) {
            $dataPlayer = $conn->prepare('SELECT perso.id,role.idrole,name,role.nameRole,defense, skills.force, skills.mana, skills.vie FROM perso INNER JOIN role ON role.idrole = perso.idrole INNER JOIN skills ON skills.id =perso.id');
            $dataPlayer->execute();
            
            return $dataPlayer->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function deletePerso($conn, $perso) {
            
            $deletePerso = $conn->prepare('DELETE FROM perso WHERE id = :id ');
            $deletePerso->execute(
                array(
                    ':id'=> $perso->getId(),
                )
            );
        }

    }