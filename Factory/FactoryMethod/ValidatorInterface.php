<?php

/**
 * Interface ValidatorInterface
 */
interface ValidatorInterface
{
    /**
     * @param array $parameters
     * @return boolean
     */
    public function validate(array $parameters = []);
}