<?php

/**
 * Class UmbertoEcoBuilder
 */
class UmbertoEcoBuilder implements BuilderInterface
{
    /** @var  Books */
    private $books;

    /**
     * @inheritdoc
     */
    public function createBooks() : BuilderInterface
    {
        $this->books = new Books();

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getBooks() : Books
    {
        return $this->books;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setAuthor() : BuilderInterface
    {
        $this->books->setAuthor('Umberto Eco');

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setTitles() : BuilderInterface
    {
        $this->books
            ->setTitle('The name of the rose')
            ->setTitle('Foucault\'s Pendulum')
            ->setTitle('The Island of the Day Before')
            ->setTitle('Baudolino');

        return $this;
    }
}