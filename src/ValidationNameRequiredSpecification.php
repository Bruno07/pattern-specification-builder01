<?php

require_once __DIR__ . "/Interfaces/ValidationSpecificationInterface.php";

class ValidationNameRequiredSpecification implements ValidationSpecificationInterface
{
    /**
     * @property $name
     */
    private $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     * @throw \Exception
     */
    public function isSatisfiedBy()
    {
        if (empty($this->name)) {
            throw new \Exception('Name field is required.');
        }

        return $this->name;
    }
}