<?php
include_once "Point.php";
class MoveablePoint extends Point
{
    public float $xSpeed;
    public float $ySpeed;

    public function __construct(float $x, float $y, float $xSpeed, float $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function setXSpeed(float $xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    public function getXSpeed(): float
    {
        return $this->xSpeed;
    }

    public function setYSpeed(float $ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }

    public function getYSpeed(): float
    {
        return $this->ySpeed;
    }

    public function getSpeed(): array
    {
        return [$this->xSpeed, $this->ySpeed];
    }

    public function move(): MoveablePoint
    {
      $this->x += $this->xSpeed;
      $this->y += $this->ySpeed;
       return $this;
    }

    public function __toString(): string
    {
        return "{x: " . $this->x . ", y: " . $this->y . "spx: " .$this->xSpeed. " ysp: ". $this->ySpeed."}";

    }

}

