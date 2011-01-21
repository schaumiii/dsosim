<?php

abstract class Unit
{
    /**
     * Health points of the unit
     * 
     * @var int
     */
    protected $health;

    /**
     * Attack priority of the unit
     * 
     * @var int
     */
    protected $priority;

    /**
     * Minimum hit points of the unit
     * 
     * @var int
     */
    protected $minHitPoints;

    /**
     * Additional bonus hit points of the unit
     * 
     * @var int
     */
    protected $bonusHitPoints;

    /**
     * Bonus hit point probability
     * 
     * @var float
     */
    protected $hitProbability;

    /**
     * May be put into a tower
     * 
     * @var bool
     */
    protected $tower;

    /**
     * Common attack order for units
     * 
     * @var array
     */
    protected $attackOrder = array(
        'Chuck',
        'Metallgebiss',
        'DieWildeWaltraud',
        'Rekrut',
        'Plünderer',
        'Miliz',
        'Schläger',
        'Reiterei',
        'Wachhund',
        'Soldat',
        'Raufbold',
        'Elitesoldat',
        'Bogenschütze',
        'Steinwerfer',
        'Langbogenschütze',
        'Waldläufer',
        'Armbrustschütze',
        'Kanonier',
        'General',
        'EinäugigerBert',
        'Stinktier',
    );

    /**
     * Low priority
     */
    const LOW = 1;

    /**
     * Medium priority
     */
    const MEDIUM = 2;

    /**
     * Hugh priority
     */
    const HIGH = 3;

    /**
     * Determine the next target of the current unit
     * 
     * @param Army $army 
     * @return Unit
     */
    public function determinNextTarget( Army $army )
    {
        // @TODO: Implement based on $attackOrder
    }

    /**
     * Provides read access to all contained properties
     * 
     * @param string $property 
     * @return mixed
     */
    public function __get( $property )
    {
        if ( !isset( $this->$property ) )
        {
            throw new RuntimeException( "No such property: $property." );
        }

        return $this->$property;
    }

    /**
     * Declines write access for all properties
     * 
     * @param string $property 
     * @param mixed $value 
     * @return void
     */
    public function __set( $property, $value )
    {
        throw new RuntimeException( "No such property: $property." );
    }
}

