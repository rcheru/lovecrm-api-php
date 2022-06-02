<?php

namespace LoveCrm;

use DateTime;

class ClientsClient extends ClientBase
{
    const BASE_URL = "https://love-crm.ru/api/v1/";

    public function __construct($token, $secret)
    {
        parent::__construct(self::BASE_URL, $token, $secret);
    }

    public function add($value = [])
    {
        $url = "clients/add";
        $response = $this->post($url, $value);
        return $response;
    }
}