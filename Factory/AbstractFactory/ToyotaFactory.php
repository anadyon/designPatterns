<?php

/**
 * Class ToyotaFactory
 */
class ToyotaFactory extends AbstractFactory
{
    /**
     * @inheritdoc
     */
    public function createCar(): Car
    {
        new ToyotaCar();
    }
}