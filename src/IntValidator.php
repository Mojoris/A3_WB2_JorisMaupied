<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 23/11/2014
 * Time: 15:44
 */

namespace mojo\Validator;

class IntValidator {
   /**
     * @param $varA
     * @param $varB
     *
     * @return boolean
     *
     * @throws \Exception
     */

    public static function equal($varA, $varB)
    {
        if(!is_int($varA) || !is_int($varB))
            throw new \Exception('Les deux variables doivent être des entiers');
        if($varA == $varB)
            return true;
        else
            return false;
    }

    /**
     * @param int $varA
     * @param int $varB
     *
     * @return boolean
     *
     * @throws \Exception
     */

    public static function superior($varA, $varB)
    {
        if(!is_int($varA) || !is_int($varB))
            throw new \Exception('Les deux variables doivent être des entiers');
        if($varA > $varB)
            return true;
        else
            return false;
    }

    /**
     * @param int $varA
     * @param int $varB
     *
     * @return boolean
     *
     * @throws \Exception
     */

    public static function inferior($varA, $varB)
    {
        if(!is_int($varA) || !is_int($varB))
            throw new \Exception('Les deux variables doivent être des entiers');
        if($varA < $varB)
            return true;
        else
            return false;
    }

    /**
     * @param int $int
     * @param int $var1
     * @param int $var2
     *
     * @return boolean
     * @throws \Exception
     */

    public static function between($int, $var1, $var2)
    {
        if(!is_int($int) || !is_int($var1) || !is_int($var2))
            throw new \Exception('Les trois variables doivent être des entiers');
        if($int <= $var1 && $int >= $var2)
            return true;
        else
            return false;
    }

    /**
     * @param int $int
     *
     * @return boolean
     *
     * @throws \Exception
     */

    public static function negative($int)
    {
        if(!is_int($int))
            throw new \Exception('La variable doit être un entier');
        if($int <= 0)
            return true;
        else
            return false;

    }

    /**
     * @param int $int
     *
     * @return boolean
     *
     * @throws \Exception
     */

    public static function positive($int)
    {
        if(!is_int($int))
            throw new \Exception('La variable doit être un entier');
        if($int >= 0)
            return true;
        else
            return false;

    }
}

