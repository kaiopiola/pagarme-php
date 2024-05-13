<?php

namespace Kaiopiola\Pagarme\Functions\Clientes;

use Exception as GlobalException;
use Kaiopiola\Pagarme\Functions\Clientes\Settings;
use Kaiopiola\Pagarme\Request\Request;

class Clientes extends Settings
{
    protected string $APIKey;
    protected ?string $name = null;
    protected ?string $document = null;
    protected ?string $email = null;
    protected ?string $gender = null;
    protected ?int $page = null;
    protected ?int $size = null;
    protected ?string $code = null;

    public function listarClientes()
    {
        $url = "https://api.pagar.me/core/v5/customers";
        $method = "GET";
        $data = [
            'name' => $this->name,
            'document' => $this->document,
            'email' => $this->email,
            'gender' => $this->gender,
            'page' => $this->page,
            'size' => $this->size,
            'code' => $this->code
        ];
        return Request::Request($this->APIKey, $url, $method, $data);
    }
}