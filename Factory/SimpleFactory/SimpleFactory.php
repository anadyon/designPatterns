<?php

/**
 * Class SimpleFactory
 */
class SimpleFactory
{
    /**
     * @return Car
     */
    public function createCar() : Car
    {
        return new Car();
    }
}