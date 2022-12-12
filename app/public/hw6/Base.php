<?php
abstract class Base
{
    protected int $a;
    protected int $b;

    public function getA(): int
    {
        return $this->a;
    }

    public function setA(int $a): void
    {
        $this->a = $a;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function setB(int $b): void
    {
        $this->b = $b;
    }

    abstract public function pow(): int;
}
