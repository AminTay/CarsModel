<?php

namespace app\Car;

abstract class BaseCar
{
    public const DESTINATION = [15, 15];
    public int $speed;
    public int $fuel;
    public int $posX;
    public int $posY;
    public int $baseFuelConsumption;
    public float $distanceToDestination;

    public function __construct(int $posX, int $posY, int $baseFuelConsumption)
    {
        echo "Starting the Car... \n\n";

        $this->fuel = 100;
        $this->speed = 1;

        $this->posX = $posX;
        $this->posY = $posY;
        $this->baseFuelConsumption = $baseFuelConsumption;

        $this->distanceToDestination = $this->calculateDistance();
    }


    private function distanceHandler()
    {

        if ($this->calculateDistance() == 0) {
            echo "You reached to your destination!\n\n";
        } elseif ($this->distanceToDestination < $this->calculateDistance()) {
            echo "You got further from your destination.\n\n";
        } elseif ($this->distanceToDestination > $this->calculateDistance()) {
            echo "You got closer to your destination.\n\n";
        }

        $this->distanceToDestination = $this->calculateDistance();
    }


    private function calculateDistance(): float
    {
        return sqrt(pow($this->posX - self::DESTINATION[0], 2) + pow($this->posY - self::DESTINATION[1], 2));
    }


    private function fuelIsEnough(): bool
    {
        return $this->fuel >= $this->baseFuelConsumption * $this->speed;
    }


    private function handleMovement(string $pos, string $direction)
    {
        if (!$this->fuelIsEnough()) {
            echo "Fuel is not enough! Can Not Move!\n\n";
            return;
        }
        if ($direction === '+') {
            $this->{$pos} += $this->speed;
        } else {
            $this->{$pos} -= $this->speed;
        }
        $this->distanceHandler();
        $this->decreaseFuel();
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
        echo "Set speed on $speed\n\n";
    }

    public function goUp()
    {
        echo "Going Up => ";
        $this->handleMovement('posX', '+');
    }

    public function goDown()
    {
        echo "Going Down => ";
        $this->handleMovement('posX', '-');
    }

    public function goRight()
    {
        echo "Going Right => ";
        $this->handleMovement('posY', '+');
    }

    public function goLeft()
    {
        echo "Going Left => ";
        $this->handleMovement('posY', '-');
    }

    public function __destruct()
    {
        echo "Back To Garage...\n\n";
    }

    private function decreaseFuel()
    {
        $this->fuel -= $this->baseFuelConsumption * $this->speed;
        if ($this->fuel == 0) {
            echo "You ran out of fuel!\n\n";
        }
    }

    public function getFuel()
    {
        echo "Remaining Fuel: $this->fuel\n\n";
    }

    public function getDistance()
    {
        echo 'Distance: ' . number_format($this->distanceToDestination, 2, '.', '') . "\n\n";
    }

    public function getDestination()
    {
        echo "Destination: (" . self::DESTINATION[0] . "," . self::DESTINATION[1] . ")\n\n";
    }

    public function increaseFuel(int $amount)
    {
        $this->fuel += $amount;
        echo "Increased fuel to $this->fuel\n\n";
    }

    public function getPosition()
    {
        echo "Current Position: [$this->posX, $this->posY]\n\n";
    }
}
