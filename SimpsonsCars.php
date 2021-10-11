<?php

require_once 'Vehicle.php';

class SimpsonsCars extends Vehicle {
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy) {
        
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function start(): string
    {
        $this->currentSpeed = 20;
        return "I'm started";
    }
    public function getEnergy(string $energy): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): SimpsonsCars
    {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
    }
    public function getEnergyLevel(int $energyLevel): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
