<?php

class UnitResult
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $count;

    /**
     * @var int
     */
    public $initialCount;

    /**
     * @var int
     */
    public $maxCount;

    /**
     * @var int
     */
    public $minCount;

    public function __construct( $name, $count, $initialCount, $minCount = PHP_INT_MAX, $maxCount = 0 )
    {
        $this->name         = $name;
        $this->count        = $count;
        $this->initialCount = $initialCount;
        $this->minCount     = $minCount;
        $this->maxCount     = $maxCount;
    }
}

