<?php

namespace ESitchikhinFork\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataBank
 * @package ESitchikhinFork\DaData\Facades
 * @method \ESitchikhinFork\DaData\DaDataBank id(string $bank)
 * @method \ESitchikhinFork\DaData\DaDataBank prompt(string $company, int $coun, array $status, array $type, string $locations, string $locations_boost)
 */
class DaDataBank extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_bank';
    }

}
