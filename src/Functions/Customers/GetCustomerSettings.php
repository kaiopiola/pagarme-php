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

abstract class GetCustomerSettings extends Base
{
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }
}