<?php

class Car
{
private int $nbWheels = 4;
private int $currentSpeed =50;
private string $color = 'black';
private int $nbSeats = 5;
private string  $typeEnergy = 'gasoline';
private int  $energyLevel = 100;

public function __construct(string $color, int $nbWheels,  string $typeEnergy)
{
    $this->color = $color;
    $this->nbWheels = $nbWheels;
    $this->typeEnergy = $typeEnergy;
}

public function start()
 {
    echo "The car starts !" ;
}

public function forward(): string
{
    $this->currentSpeed = 50;
    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}

public function getNbWheels(): string
    {
        return $this->nbWheels;
    }
 public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

public function getColor(): string
    {
        return $this->color;
    }

public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

public function getEnergy(): string
    {
        return $this->typeEnergy;
    }

 public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }


}

?>
