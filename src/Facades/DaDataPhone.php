<?php

namespace ESitchikhinFork\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataPhone
 * @package ESitchikhinFork\DaData\Facades
 * @method \ESitchikhinFork\DaData\DaDataPhone standardization(string $phone)
 */
class DaDataPhone extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_phone';
    }

}
