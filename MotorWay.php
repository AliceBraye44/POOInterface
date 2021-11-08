<?php 

final class MotorWay extends HighWay
{
    protected int $nbLane=4;
    protected int $maxSpeed=130;

    /* fonction abstraite hérité de la mère : ajoute tout type de voiture au tableau $currentVehicles*/ 
    
    public function addVehicle( $currentVehicle):void {
        if ($currentVehicle instanceof $car) {
            setCurrentVehicles($currentVehicle); 
        }
    }

}