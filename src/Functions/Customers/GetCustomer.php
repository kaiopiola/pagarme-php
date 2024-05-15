<?php

namespace Kaiopiola\Pagarme\Functions\Customers;

use Exception as GlobalException;
use Kaiopiola\Pagarme\Request\Request;

class GetCustomer extends GetCustomerSettings
{
    protected string $APIKey;
    protected ?string $customer_id = null;

    public function execute()
    {
        $url = "https://api.pagar.me/core/v5/customers/" . $this->customer_id;
        $data = [];
        $method = "GET";
        return Request::Request($this->APIKey, $url, $method, $data);
    }
}