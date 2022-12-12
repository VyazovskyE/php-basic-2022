<?php
include "Base.php";
abstract class First extends Base
{
    protected int $c;

    public function getC(): int
    {
        return $this->c;
    }

    public function setC(int $c): void
    {
        $this->c = $c;
    }

    public function sum(): int
    {
        return $this->a + $this->b + $this->c;
    }

    public function pow(): int
    {
        return pow($this->a, $this->c);
    }
}
