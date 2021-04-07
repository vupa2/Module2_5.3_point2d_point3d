<?php
class Point2D
{
  protected float $x;
  protected float $y;

  public function __construct($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  public function getX()
  {
    return $this->x;
  }

  public function setX($x)
  {
    $this->x = $x;

    return $this;
  }

  public function getY()
  {
    return $this->y;
  }

  public function setY($y)
  {
    $this->y = $y;

    return $this;
  }

  public function setXY($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  public function getXY()
  {
    return [$this->x, $this->y];
  }

  public function __toString()
  {
    return "($this->x,$this->y)";
  }
}

class Point3D extends Point2D
{
  protected float $z;

  public function __construct($x, $y, $z)
  {
    parent::__construct($x, $y);
    $this->z = $z;
  }

  public function getZ()
  {
    return $this->z;
  }

  public function setZ($z)
  {
    $this->z = $z;

    return $this;
  }

  public function setXYZ($x, $y, $z)
  {
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
  }

  public function getXYZ()
  {
    return [$this->x, $this->y, $this->z];
  }

  public function __toString()
  {
    return "($this->x,$this->y,$this->z)";
  }
}

$point3d = new Point3D(10, 20, 10);
echo implode(",", $point3d->getXYZ()) . ' ' . $point3d->toString();
