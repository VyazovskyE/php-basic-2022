<?php
namespace Core\Hw7;

final class Third extends Base
{
    protected int $e;

    public function getE(): int
    {
        return $this->e;
    }

    public function setE($e): void
    {
        $this->e = $e;
    }

    public function pow(): int
    {
        return pow($this->e, $this->e);
    }

    public function mul()
    {
        return $this->a * $this->b * $this->e;
    }
}
