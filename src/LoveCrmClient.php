<?php

namespace LoveCrm;

class DadataClient
{
    private $deals;
    private $tasks;
    private $clients;

    public function __construct($token, $secret)
    {
        $this->deals = new DealsClient($token, $secret);
        $this->tasks = new TasksClient($token, $secret);
        $this->clients = new clientsClient($token, $secret);
    }

    public function addDeal($value)
    {
        return $this->deals->clean($value);
    }

}