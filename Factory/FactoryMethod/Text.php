<?php

/**
 * Class Text
 */
class Text extends FactoryAbstract
{
    /** @var string */
    const ISSET = 'Isset';

    /** @var string */
    const EMPTY = 'Empty';

    /**
     * @inheritdoc
     */
    public function create($validator): ValidatorInterface
    {
        switch ($validator) {
            case self::EMPTY:
                return new EmptyValidator();
                break;
            case self::ISSET:
                return (new IssetValidator())->setMandatoryKeys(['key1', 'key2', 'key3']);
                break;
            default:
                throw new InvalidArgumentExceptionFactoryMethod('Invalid Validator name');
        }
    }
}