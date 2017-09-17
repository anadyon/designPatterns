<?php

/**
 * Class EmptyValidator
 */
class EmptyValidator implements ValidatorInterface
{
    /**
     * @param array $parameters
     * @return bool
     */
    public function validate(array $parameters = [])
    {
        $validate = true;

        foreach ($parameters as $param) {
            if (empty($param)) {
                $validate = false;

                break;
            }
        }

        return $validate;
    }
}