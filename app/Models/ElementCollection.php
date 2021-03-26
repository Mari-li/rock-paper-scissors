<?php


namespace App\Models;


class ElementCollection
{

    private array $elements = [];


    public function addElement(Element $element): void
    {
        $this->elements[] = $element;
    }

    /**
     * @return Element[]
     */
    public function getAll(): array
    {
        return $this->elements;
    }

    public function getRandom(): Element
    {
        return $this->getAll()[rand(0, count($this->getAll()) - 1)];
    }

}