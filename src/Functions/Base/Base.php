<?php

namespace Kaiopiola\Pagarme\Functions\Base;

abstract class Base
{
    /**
     * Set API key
     * @param string $pattern String of allowed format i.e. XXXX-NNNN-LLLL
     * @return void
     **/
    public function setAPIKey($APIKey)
    {
        $BasicAPIKey = "Basic " . base64_encode($APIKey . ":");
        $this->APIKey = $BasicAPIKey;
    }
}
