<?php

namespace ESitchikhinFork\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataName
 * @package ESitchikhinFork\DaData\Facades
 * @method \ESitchikhinFork\DaData\DaDataName standardization(string $name)
 * @method \ESitchikhinFork\DaData\DaDataName prompt(string $name, int $count, int $gender, array $parts)
 */
class DaDataName extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_name';
    }

}
