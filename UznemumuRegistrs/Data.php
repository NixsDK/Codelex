<?php

class Data

{
    private String $name;
    private String $regcode;
    private String $address;
    private String $registered;

    public function __construct($name, $regcode, $address, $registered)
    {
        $this->name = $name;
        $this->regcode = $regcode;
        $this->address = $address;
        $this->registered = $registered;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRegCode()
    {
        return $this->regcode;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getRegistered()
    {
        return $this->registered;
    }
}
