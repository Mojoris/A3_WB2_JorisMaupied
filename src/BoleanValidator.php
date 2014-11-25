<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 23/11/2014
 * Time: 15:44
 */

namespace src\Validator;

class BooleanValidator {

/**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function isFalse($boolean)
    {
        if(!is_bool($boolean))
            throw new \Exception('La variable doit être un booléen');
        if(!$boolean)
            return true;
        else
            return false;
    }

 /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function isTrue($boolean)
    {
        if(!is_bool($boolean))
            throw new \Exception('La variable doit être un booléen');
        if($boolean)
            return true;
        else
            return false;
    }
}

