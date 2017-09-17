<?php

/**
 * Class CheckboxValidator
 */
class CheckboxValidator implements ValidatorInterface
{
    /** @var array  */
    private $mandatoryKeys = ['termsAndConditions' => '', 'ageAbove18' => ''];

    /**
     * @param array $parameters
     * @return bool
     */
    public function validate(array $parameters = [])
    {
        $validate = true;

        $intersectKeys = array_intersect_key($parameters, $this->mandatoryKeys);

        if (count($intersectKeys) !== count($this->mandatoryKeys)) {
            $validate = false;

            return $validate;
        }

        foreach ($intersectKeys as $val) {
            if ($val !== 1) {
                $validate = false;
                break;
            }
        }

        return $validate;
    }

    /**
     * @param array $keys
     */
    public function setMandatoryKeys(array $keys)
    {
        $this->mandatoryKeys = $keys;
    }
}