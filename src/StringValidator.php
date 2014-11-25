<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 23/11/2014
 * Time: 15:44
 */

namespace src\Validator;

class StringValidator {

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function lengthEqual($string, $length)
    {
        if(!is_string($string) || !is_int($length))
            throw new \Exception('Les deux variables doivent etres dans le bon format');
        if(mb_strlen($string) === $length)
            return true;
        else
            return false;
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function lengthSuperiorX($string, $length)
    {
        if(!is_string($string) || !is_int($length))
            throw new \Exception('Les deux variables doivent êtres dans le bon format');
        if(mb_strlen($string) > $length)
            return true;
        else
            return false;
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function lengthInferiorX($string, $length)
    {
        if(!is_string($string) || !is_int($length))
            throw new \Exception('Les deux variables doivent etres dans le bon format');
        if(mb_strlen($string) < $length)
            return true;
        else
            return false;
    }

    /**
     * @param string $string
    * @param int $varMin
    * @param int $varMax
    *
    * @return bool
    *
    * @throws \Exception
    */

    public static function lengthBetweenXX($string, $varMin, $varMax)
    {
        if(!is_string($string) || !is_int($varMin) || !is_int($varMax) )
            throw new \Exception('Les deux variables doivent etres dans le bon format');
        $lengthString = mb_strlen($string);
        if($lengthString >= $varMin && $lengthString <= $varMax)
            return true;
        else
            return false;
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function haveNoWhiteSpaceBeforeEnd($string)
    {
        if(!is_string($string))
            throw new \Exception('La variable doit etre de type String');
        $stringNoSpace = trim($string);
        if($stringNoSpace != $string)
            return true;
        else
            return false;
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function noWhiteSpace($string)
    {
        if(!is_string($string))
            throw new \Exception('La variable doit etre de type String');
        $checkWhiteSpace = explode(' ', $string);
        if(count($checkWhiteSpace) > 2)
            return true;
        else
            return false;
    }

}

