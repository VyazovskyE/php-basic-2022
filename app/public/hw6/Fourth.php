<?php
include "First.php";

class Fourth extends First
{
    protected $f;

    public function getF(): int
    {
        return $this->f;
    }

    public function setF(int $f): void
    {
        $this->f = $f;
    }

    public function div(): int|float
    {
        return $this->a / $this->f;
    }

    public function multiplySum(): int
    {
        return $this->sum() * $this->f;
    }
}
