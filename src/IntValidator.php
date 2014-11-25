<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 23/11/2014
 * Time: 15:44
 */

namespace mojo\Validator;

/**
 * Class IntegerValidator
 * @package Steingate\Validator
 */
class IntValidator
{

    /**
     * @param int $a
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function equal($a, $b) {
        if(is_int($a) === FALSE || is_int($b) === FALSE)
            throw new \Exception('Les deux parametres doivent être des entiers');

        return ($a == $b) ? true : false;
    }

    /**
     * @param int $a
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function superior($a, $b) {
        if(is_int($a) === FALSE || is_int($b) === FALSE)
            throw new \Exception('Les deux parametres doivent être des entiers');

        return ($a > $b) ? true : false;
    }

    /**
     * @param int $a
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function inferior($a, $b) {
        if(is_int($a) === FALSE || is_int($b) === FALSE)
            throw new \Exception('Les deux parametres doivent être des entiers');

        return ($a < $b) ? true : false;
    }

    /**
     * @param int $int
     * @param int $min
     * @param int $max
     *
     * @return bool
     * @throws \Exception<
     */
    public static function between($int, $min, $max) {
        if(is_int($int) === FALSE || is_int($min) === FALSE || is_int($max) === FALSE)
            throw new \Exception('Les trois parametres doivent être des entiers');

        return ($int <= $max && $int >= $min) ?  true : false;
    }

    /**
     * @param int $int
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function negative($int) {
        if(is_int($int) === FALSE)
            throw new \Exception('Le parametre doit être un entier');

        return ($int <= 0) ? true : false;
    }

    /**
     * @param int $int
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function positive($int) {
        if(is_int($int) === FALSE)
            throw new \Exception('Le parametre doit être un entier');

        return ($int >= 0) ?  true : false;
    }
}
