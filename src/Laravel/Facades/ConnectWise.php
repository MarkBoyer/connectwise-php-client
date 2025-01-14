<?php

namespace Spinen\ConnectWise\Laravel\Facades;

use Spinen\ConnectWise\Api\Client;
use Illuminate\Support\Facades\Facade;

/**
 * Class ConnectWiseFacade
 *
 * @package Spinen\ConnectWise\Laravel\Facades
 */
class ConnectWise extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
//         return 'connectwise';
        return Client::class;
    }
}
