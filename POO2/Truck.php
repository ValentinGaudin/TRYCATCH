<?php

require_once "Vehicle.php";

class Truck extends Vehicle 
{
    public const ALLOWED_ENERGIES = [
        "fuel",
        "electric"
    ];

    private $stockage;
    private $truckLoad = 0 ;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockage, int $truckLoad)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->stockage = $stockage;
        $this->truckLoad = $truckLoad;
    }

    public function getTruclLoad(): int 
    {
        return $this -> truckLoad;
    }

    public function isFull(): string
    {
        return $this -> stockage === $this -> truckLoad ? "full" : "in filling";

    }
    public function getStockage(): int
    {
        return $this -> stockage;
    }
}