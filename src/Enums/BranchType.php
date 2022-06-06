<?php

namespace ESitchikhinFork\DaData\Enums;

/**
 * Class BranchType
 * @package ESitchikhinFork\DaData\Enums
 */
class BranchType
{

    const MAIN   = 1;
    const BRANCH = 2;

    /**
     * @var string[]
     */
    public static $map  = [
        self::MAIN     => 'MAIN',
        self::BRANCH   => 'BRANCH',
    ];

}
