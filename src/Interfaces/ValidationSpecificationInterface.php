<?php

interface ValidationSpecificationInterface
{
    /**
     * @return string|int
     * @throw \Exception
     */
    public function isSatisfiedBy();
}
