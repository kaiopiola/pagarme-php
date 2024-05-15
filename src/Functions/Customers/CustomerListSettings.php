<?php

/**
 * @author Kaiopiola <github.com/kaiopiola>
 * @package Kaiopiola\Pagarme
 * 
 * This file is part of the Kaiopiola\Pagarme package.
 * 
 * (c) Kaio Piola 2024 <contact@kaiopiola.dev>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kaiopiola\Pagarme\Functions\Customers;

use InvalidArgumentException;
use Kaiopiola\Pagarme\Functions\Base\Base;

abstract class CustomerListSettings extends Base
{
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDocument($document)
    {
        $this->document = $document;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setGender(?string $gender): void
    {
        if ($gender === null || in_array($gender, ['male', 'female'])) {
            $this->gender = $gender;
        } else {
            throw new InvalidArgumentException('O valor de gênero deve ser "male" ou "female".');
        }
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }
}
