<?php

require_once "HighWay.php";

final class PedestrianWay extends HighWay {

    public function __construct (int $nbLane, int $maxSpeed)
    {
        parent::__construct(4, 10);
    }

    public function setMaxspeed(): void
    {
        
    }
    public function setNbLane(): void
    {
        
    }
    public function addVehicle(Vehicle $vehicle)
    {
        
        if ($vehicle instanceof Bicycle){
            $this->setCurrentVehicles($vehicle);
            echo "You can go on it";
        } else if ($vehicle instanceof SkateBoard){
            $this->setCurrentVehicles($vehicle);
            echo "YOu can go on it";
        } elseif ($vehicle instanceof Car){
            echo "You are not authorized";
        } elseif ($vehicle instanceof Truck){
            echo "You are not authorized";
        }
    }

}