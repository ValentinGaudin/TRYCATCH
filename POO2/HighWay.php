<?php

abstract class HighWay
{
    protected array $currentVehicles;

    protected int $nbLane;

    protected int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    public function setCurrentVehicles(array $vehicles): void
    {        
        foreach($vehicles as $vehicle){
            $this->currentVehicles[]=$vehicle;
        }
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeend;
    }
    public function setMaxspeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);


}

