<?php
namespace Core\Hw7;

class Sixth extends Second
{
    protected int $h;

    public function getH(): int
    {
        return $this->h;
    }

    public function setH(int $h): void
    {
        $this->h = $h;
    }

    public function mul(): int
    {
        return pow($this->a, $this->h);
    }

    public function powSub(): int|float
    {
        return pow($this->sub(), $this->h);
    }

}
