<?php
include "Base.php";

abstract class Second extends Base
{
    protected int $q;

    public function getQ(): int
    {
        return $this->q;
    }

    public function setQ(int $q): void
    {
        $this->q = $q;
    }

    public function pow(): int
    {
        return pow($this->b, $this->q);
    }

    public function sub(): int
    {
        return $this->a - $this->b - $this->q;
    }
}
