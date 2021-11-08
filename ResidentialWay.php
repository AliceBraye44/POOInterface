<?php 

final class ResidentialWay extends HighWay
{
    protected int $nbLane=2;
    protected int $maxSpeed=50;

      
    public function addVehicle( $currentVehicle):void {
        if ($currentVehicle instanceof $Vehicle) {
            setCurrentVehicles($currentVehicle); 
        }
    }
}