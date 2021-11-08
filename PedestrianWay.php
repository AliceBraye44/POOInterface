<?php 

final class PedestrialWay extends HighWay
{
    protected int $nbLane=1;
    protected int $maxSpeed=10;

    public function addVehicle( $currentVehicle):void {
        if ($currentVehicle instanceof $Bicycle || $currentVehicle instanceof $Skateboard) {
            setCurrentVehicles($currentVehicle); 
        }
    }
}