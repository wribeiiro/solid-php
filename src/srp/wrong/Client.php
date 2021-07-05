<?php

namespace app\srp\wrong;

class Client
{
    private string $name;
    private string $email;
    private \Datetime $birthdate;

    public function __construct(string $name, string $email, \Datetime $birthdate)
    {
        $this->name = $name;
        $this->email = $email;
        $this->birthdate = $birthdate;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getBirthDate(): \DateTime
    {
        return $this->birthdate;
    }

    public function setBirthDate(\Datetime $birthdate): self
    {
        $this->birthdate = $birthdate;
        return $this;
    }
}