<?php

namespace App\Libraries;

/**
 * Response library
 *
 * @author daishitie <daishitie@otakunity.net>
 * @copyright 2020 daishitie
 */
class Response
{
    /**
     * Set status code
     *
     * @param int $code
     */
    public function setStatusCode($code)
    {
        http_response_code($code);
    }
}
