<?php

/**
 * Class TV
 */
class TV
{
    /** @var  ReceiverAV */
    private $receiverAV;

    /**
     * TV constructor.
     * @param ReceiverAV $receiverAV
     */
    public function __construct(ReceiverAV $receiverAV)
    {
        $this->receiverAV = $receiverAV;
    }

    /**
     * @return string
     */
    public function makeSound()
    {
        return $this->receiverAV->playSound();
    }
}