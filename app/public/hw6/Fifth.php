<?php
include "First.php";

class Fifth extends First
{
    protected int $g;

    public function getG(): int
    {
        return $this->g;
    }

    public function setG(int $g): void
    {
        $this->g = $g;
    }

    public function pow(): int
    {
        return pow($this->b, $this->g);
    }

    public function devideSum(): int|float
    {
        return $this->sum() / $this->g;
    }
}
