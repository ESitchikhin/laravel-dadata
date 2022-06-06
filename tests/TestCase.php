<?php

namespace ESitchikhinFork\DaData\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app)
    {
        return [
            'ESitchikhinFork\DaData\DaDataServiceProvider'
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'DaDataAddress'    => 'ESitchikhinFork\DaData\Facades\DaDataAddress',
            'DaDataName'       => 'ESitchikhinFork\DaData\Facades\DaDataName',
            'DaDataEmail'      => 'ESitchikhinFork\DaData\Facades\DaDataEmail',
            'DaDataPhone'      => 'ESitchikhinFork\DaData\Facades\DaDataPhone',
            'DaDataCompany'    => 'ESitchikhinFork\DaData\Facades\DaDataCompany',
            'DaDataBank'       => 'ESitchikhinFork\DaData\Facades\DaDataBank',
            'DaDataPassport'   => 'ESitchikhinFork\DaData\Facades\DaDataPassport',
        ];
    }

}
