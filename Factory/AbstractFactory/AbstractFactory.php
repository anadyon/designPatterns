<?php

/**
 * Class AbstractFactory
 */
abstract class AbstractFactory
{
    /**
     * @return Car
     */
    abstract public function createCar() : Car;
}