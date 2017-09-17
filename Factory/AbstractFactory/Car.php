<?php

/**
 * Class Car
 */
class Car
{
    /** @var  string */
    private $color;

    /** @var  string */
    private $model;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return $this
     */
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return $this
     */
    public function setModel(string $model)
    {
        $this->model = $model;

        return $this;
    }
}