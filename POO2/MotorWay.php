<?php

require_once "HighWay.php";

final class MotorWay extends HighWay {

    public function __construct (int $nbLane, int $maxSpeed)
    {
        parent::__construct(4, 130);
    }

    public function setMaxspeed(): void
    {
        
    }
    public function setNbLane(): void
    {
        
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car){
            $this->setCurrentVehicles($vehicle);
            echo "You can go on it";
        } else if ($vehicle instanceof Truck){
            $this->setCurrentVehicles($vehicle);
            echo "YOu can go on it";
        } elseif ($vehicle instanceof Bicycle){
            echo "You are not authorized";
        } elseif ($vehicle instanceof SkateBoard){
            echo "You are not authorized";
        }
    }
}