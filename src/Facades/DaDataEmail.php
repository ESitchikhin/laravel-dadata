<?php

namespace ESitchikhinFork\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataEmail
 * @package ESitchikhinFork\DaData\Facades
 * @method \ESitchikhinFork\DaData\DaDataEmail standardization(string $email)
 * @method \ESitchikhinFork\DaData\DaDataEmail prompt(string $email, int $count)
 */
class DaDataEmail extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_email';
    }

}
