<?php

class Client
{
    private $registrationCode;

    public function __construct(array $array)
    {
        // Example constructor code
    }

    public function getRegistrationCode()
    {
        return $this->registrationCode;
    }

    public function setRegistrationCode($code)
    {
        $this->registrationCode = $code;
    }
}
