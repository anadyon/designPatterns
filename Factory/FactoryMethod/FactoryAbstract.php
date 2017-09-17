<?php

/**
 * Class FactoryAbstract
 */
abstract class FactoryAbstract
{
    /**
     * @param $validator
     * @return ValidatorInterface
     */
    abstract public function create($validator) : ValidatorInterface;

    /**
     * @param string $validator
     * @param array $parameters
     * @return bool
     */
    public function build(string $validator, array $parameters = []) : bool
    {
        $validator = $this->create($validator);

        return $validator->validate($parameters);
    }
}