<?php

require_once "Highway.php";

final class ResidentialWay extends HighWay {

    public function __construct (int $nbLane, int $maxSpeed)
    {
        parent::__construct(2, 50);
    }

    public function setMaxspeed(): void
    {
        
    }
    public function setNbLane(): void
    {
        
    }

    public function addVehicle(Vehicle $vehicle )
    {
        if ($vehicle instanceof Vehicle){
            $this->setCurrentVehicles($vehicle);
            echo "You can go on it";
        }
    }
}