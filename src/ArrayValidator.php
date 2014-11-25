<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 23/11/2014
 * Time: 15:44
 */

namespace mojo\Validator;

/**
 * Class ArrayValidator
 * @package mojo\Validator
 */
class ArrayValidator
{

    const LENGTH_EQUAL             = 1;
    const LENGTH_INFERIOR          = 2;
    const LENGTH_SUPERIOR          = 3;
    const LENGTH_INFERIOR_OR_EQUAL = 4;
    const LENGTH_SUPERIOR_OR_EQUAL = 5;

    /**
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isEmpty($array){
        if(is_array($array)=== FALSE)
            throw new \Exception('Le paramètre doit être un tableau');

        return (count($array) === 0) ? true : false;
    }

    /**
     * @param array $array
     * @param       $comparator
     * @param int   $integer
     *
     * @return boolean|integer
     *
     * @throws \Exception
     */
    public static function comparate($array, $comparator, $integer)
    {
        if(!is_array($array) || !is_int($integer))
            throw new \Exception('Mauvais format des paramètres');

        if (!in_array($comparator, [
            self::LENGTH_EQUAL,
            self::LENGTH_INFERIOR,
            self::LENGTH_SUPERIOR,
            self::LENGTH_SUPERIOR_OR_EQUAL,
            self::LENGTH_INFERIOR_OR_EQUAL,
        ])) {
            throw new \InvalidArgumentException('Le deuxième paramètre doit être un comparateur valide');
        }

        $arrayLength = count($array);

        $result = 0;

        switch ($comparator) {
            case self::LENGTH_EQUAL:
                $result = $arrayLength === $integer;
                break;

            case self::LENGTH_INFERIOR:
                $result = $arrayLength < $integer;
                break;

            case self::LENGTH_SUPERIOR:
                $result = $arrayLength > $integer;
                break;

            case self::LENGTH_INFERIOR_OR_EQUAL:
                $result = $arrayLength <= $integer;
                break;

            case self::LENGTH_SUPERIOR_OR_EQUAL:
                $result = $arrayLength >= $integer;
                break;
        }

        return $result;
    }

    /**
     * @param array $array
     * @param int   $min
     * @param int   $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function ElementsBetween($array, $min, $max){
        if(is_array($array) === FALSE || is_int($min) === FALSE || is_int($max) === FALSE)
            throw new \Exception('Le premier paramètre doit etre un tableau');

        return ( count($array) >= $min &&  count($array) <= $max) ? true : false;
    }

    /**
     * @param array  $array
     * @param string $key
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isThereKey($array, $key){
        if(is_array($array) === FALSE || is_string($key) === FALSE)
            throw new \Exception('Mauvais paramètres saisi');

        return (array_key_exists($key, $array)) ? true : false;
    }

    /**
     * @param array  $array
     * @param string $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isThereValue($array, $value){
        if(is_array($array) === FALSE || is_string($value) === FALSE)
            throw new \Exception('Mauvais paramètres saisi');

        return (in_array($value, $array)) ? true : false;
    }

}
