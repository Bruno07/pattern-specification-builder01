<?php

require_once __DIR__ . "/Interfaces/ValidationSpecificationInterface.php";

class ValidationBuilder
{
    /**
     * @param ValidationSpecificationInterface $validationSpecificationInterface
     */
    public function addValidationSpecification(ValidationSpecificationInterface $validationSpecificationInterface)
    {
        $validationSpecificationInterface->isSatisfiedBy();

        return $this;
    }
}