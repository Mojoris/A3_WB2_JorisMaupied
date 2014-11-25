<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 23/11/2014
 * Time: 15:44
 */

namespace src\Validator;

class ArrayValidator {

    const LENGTH_EQUAL = 1;
    const LENGTH_SUPERIOR = 2;
    const LENGTH_INFERIOR = 3;
    const LENGTH_SUPERIOR_OR_EQUAL = 4;
    const LENGTH_INFERIOR_OR_EQUAL = 5;


    /**
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function isEmpty($array)
    {
        if(!is_array($array))
            throw new \Exception('la variable doit etre un tableau');
        if(count($array) == 0)
            return true;
        else
            return false;
    }

    /**
     * @param array $array
     * @param $comparator
     * @param int $integer
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function comparate($array, $comparator, $integer)
    {
        if(!is_array($array))
            throw new \Exception('la premiere variable doit etre un tableau');

        if (!in_array($comparator, [
            self::LENGTH_EQUAL,
            self::LENGTH_SUPERIOR,
            self::LENGTH_INFERIOR,
            self::LENGTH_SUPERIOR_OR_EQUAL,
            self::LENGTH_INFERIOR_OR_EQUAL,
        ])) {
            throw new \Exception('Le deuxieme parametre doit être un comparateur valide');
        }

        if(!is_int($integer))
            throw new \Exception('Le troisieme parametre doit etre un entier');

        $arrayLength = count($array);

        switch ($comparator){
            case self::LENGTH_EQUAL:
                $result =  $arrayLength === $integer;
                break;

            case self::LENGTH_SUPERIOR:
                $result = $arrayLength > $integer;
                break;

            case self::LENGTH_INFERIOR:
                $result = $arrayLength < $integer;
                break;

            case self::LENGTH_SUPERIOR_OR_EQUAL:
                $result = $arrayLength >= $integer;
                break;

            case self::LENGTH_INFERIOR_OR_EQUAL:
                $result = $arrayLength <= $integer;
                break;

        }
        return $result;
    }

    /**
     * @param array $array
     * @param int $min
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function ElementsBetween($array, $min, $max)
    {
        if(!is_array($array))
            throw new \Exception('Le premier parametre doit etre un tableau');

        if(!is_int($min))
            throw new \Exception('Le deuxième parametre doit etre un entier');

        if(!is_int($max))
            throw new \Exception('Le troisieme parametre doit etre un entier');

        $arrayLength = count($array);

        if($arrayLength >= $min && $arrayLength <= $max)
            return true;
        else
            return false;
    }

    /**
     * @param array $array
     * @param string $key
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isThereKey($array, $key)
    {
        if(!is_array($array))
            throw new \Exception('Le premier parametre doit etre un tableau');

        if(!is_string($key))
            throw new \Exception('Le deuxième parametre doit etre une chaine');

        if(array_key_exists($key, $array))
            return true;
        else
            return false;
    }

    /**
     * @param array $array
     * @param string $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isThereValue($array, $value)
    {
        if(!is_array($array))
            throw new \Exception('Le premier parametre doit etre un tableau');

        if(!is_string($value))
            throw new \Exception('Le deuxième parametre doit etre une chaine');

        foreach($array as $k => $v){
            if($array[$k] === $value )
                return true;
        }

        return false;
    }

    }




