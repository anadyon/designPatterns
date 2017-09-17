<?php

/**
 * Class MazdaFactory
 */
class MazdaFactory extends AbstractFactory
{
    /**
     * @inheritdoc
     */
    public function createCar() : Car
    {
        return new MazdaCar();
    }
}