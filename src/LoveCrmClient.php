<?php

namespace LoveCrm;

class LoveCrmClient
{
    private $deals;
    private $tasks;
    private $clients;

    public function __construct($token, $secret)
    {
        $this->deals = new DealsClient($token, $secret);
        $this->tasks = new TasksClient($token, $secret);
        $this->clients = new ClientsClient($token, $secret);
    }

    public function addDeal($value)
    {
        return $this->deals->add($value);
    }

    public function addTask($value)
    {
        return $this->tasks->add($value);
    }

    public function addClient($value)
    {
        return $this->clients->add($value);
    }

}