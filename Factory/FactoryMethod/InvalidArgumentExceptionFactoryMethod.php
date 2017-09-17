<?php

/**
 * Class InvalidArgumentExceptionFactoryMethod
 */
class InvalidArgumentExceptionFactoryMethod extends InvalidArgumentException
{
    /**
     * @param string $message
     * @return InvalidArgumentExceptionFactoryMethod
     */
    public function create(string $message) : InvalidArgumentExceptionFactoryMethod
    {
        return new static($message);
    }
}