<?php 

abstract class HighWay 
{

    /* propriétés de la classe HighWay  */ 
 protected array $currentVehicles = [];
 protected int $nbLane;
 protected int $maxSpeed; 
 
 
    /* Getter et Setter de la classe HighWay  */ 

public function getCurrentVehicles(): array
{
    return $this->currentVehicles;
}

public function setCurrentVehicles (array $currentVehicles): void
{
   $this->currentVehicles = $currentVehicles;
    
}

public function getNbLane(): int
{
    return $this->nbLane;
}

public function setNbLane (int $nbLane): void
{
    if($nbLane >= 0){
        $this->nbLane = $nbLane;
    }
}

public function getMaxSpeed(): int
{
    return $this->maxSpeed;
}

public function setMaxSpeed (int $maxSpeed): void
{
    if($maxSpeed >= 0){
        $this->maxSpeed = $nbLmaxSpeedane;
    }
}

/* méthode Abstraite pour ajouter des vehicule : reste vide car déteriminé dans classes enfants*/ 

abstract public function addVehicle();

}