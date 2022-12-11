<?php
include "Second.php";

class Seventh extends Second
{
    protected int $j;

    public function getJ(): int
    {
        return $this->j;
    }

    public function setJ(int $j): void
    {
        $this->j = $j;
    }

    public function pow(): int
    {
        return pow($this->a * $this ->b, $this->j);
    }

    public function devideSub(): int|float
    {
        return $this->sub() / $this->j;
    }
}
