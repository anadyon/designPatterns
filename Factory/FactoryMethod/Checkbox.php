<?php

/**
 * Class Checkbox
 */
class Checkbox extends FactoryAbstract
{
    /** @var string */
    const CHECKBOX = 'Checkbox';

    /**
     * @inheritdoc
     */
    public function create($validator): ValidatorInterface
    {
        switch ($validator) {
            case self::CHECKBOX:
                return (new CheckboxValidator())->setMandatoryKeys(['key1', 'key2']);
                break;
            default:
                throw new InvalidArgumentExceptionFactoryMethod('Invalid Validator name');
        }
    }
}