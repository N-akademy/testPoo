<?php

class Archer extends Character {
    private $quiver = 2  ;
    public function __construct($pseudo) {
        $this->pseudo = $pseudo;

    }
   
    public function action($target) {
        $rand = rand(1,10);
        if ($rand >= 1 && $rand <= 5) {
            return $this->attack($target);
        } elseif ($rand >5  && $rand <= 10) {
            return $this->twoArrows($target);
        }
    }
    
    public function attack($target) {
        $rand = rand(1,8);
        $arrows=1;
        if($this->quiver >= $arrows){
            $this->quiver -= $arrows;
            $damage = $this->atk;
            $target->setHP($damage);
            $target->isAlive();
            $status = "$this->pseudo envoie un flèche sur $target->pseudo qui a $target->lifePoint points de vie!";
            return $status;
        }else{
            $status = "$this->pseudo n'a plus de flèche, et ne peut pas attaquer!";
            return $this->dagger($target);
        }
    }

    public function twoArrows($target) {
        $rand = rand(9,10);
        $arrows= 2;
        if($this->quiver >= $arrows){    
            $damage = $this->atk *2;
            $target->setHP($damage);
            $target->isAlive();
            $status = "$this->pseudo utlise sa capacité special TwoArrows sur $target->pseudo qui a $target->lifePoint points de vie!";
            return $status;
        }else{
            $status = "$this->pseudo n'a plus de flèche, et ne peut pas attaquer!";
            return $this->dagger($target);
        }
    }

    public function dagger($target) {
        $damage = $this->atk - 5;
        $target->setHP($damage);
        $target->isAlive();
        $status = "$this->pseudo se defends avec sa dague $target->pseudo qui a $target->lifePoint points de vie!";
        return $status;
    }

    public function setRound($round){
        $status= "tour passée";
        return $status;
    }

   

    public function setHP($damage) {
        $this->lifePoint -= $damage;
        return;
    }
}