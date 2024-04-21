<?php

require_once __DIR__ . "/Interfaces/ValidationSpecificationInterface.php";

class ValidationMinorSpecification implements ValidationSpecificationInterface
{
    /**
     * @property $age
     */
    private $age;

    /**
     * @param string $age
     */
    public function __construct(int $age)
    {
        $this->age = $age;
    }

    /**
     * @return int
     * @throw \Exception
     */
    public function isSatisfiedBy()
    {
        if ($this->age < 18) {
            throw new \Exception('Minor');
        }

        return $this->age;
    }
}