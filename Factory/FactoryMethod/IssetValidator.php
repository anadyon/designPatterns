<?php

/**
 * Class IssetValidator
 */
class IssetValidator implements ValidatorInterface
{
    /** @var array  */
    private $mandatoryKeys = ['key1' => '', 'key2' => ''];

    /**
     * @param array $parameters
     * @return bool
     */
    public function validate(array $parameters = [])
    {
        return count(array_intersect_key($parameters, $this->mandatoryKeys)) === count($this->mandatoryKeys);
    }

    /**
     * @param array $keys
     */
    public function setMandatoryKeys(array $keys)
    {
        $this->mandatoryKeys = $keys;
    }
}