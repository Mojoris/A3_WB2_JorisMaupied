<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 23/11/2014
 * Time: 15:44
 */

namespace mojo\Validator;

class DateTimeValidator {
   
    /**
     * @param \Datetime $date
     *
     * @return bool
     */
    public static function isMajor(\Datetime $date)
    {
        $today = new \DateTime();
        $difference = $date->diff($today);

        if($difference->y >= 18)
            return true;
        else
            return false;
    }

    /**
     * @param \Datetime $date
     *
     * @return bool
     */

    public static function isPassed(\Datetime $date)
    {
        $today = new \DateTime();
        if($date < $today)
            return true;
        else
            return false;
    }

    /**
     * @param \Datetime $date
     *
     * @return bool
     */

    public static function isFutur(\Datetime $date)
    {
        $today = new \DateTime();
        if($date > $today)
            return true;
        else
            return false;
    }

    /**
     * @param \Datetime $date
     * @param string $year
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function isYear(\Datetime $date, $year)
    {
        if(!is_string($year))
            throw new \Exception('Le deuxieme paramètre doit être une chaine');
        if($date->format('Y') === $year)
            return true;
        else
            return false;
    }

    /**
     * @param \Datetime $date
     * @param int $month
     *
     * @return bool
     *
     * @throws \Exception
     */

    public static function isMonth(\Datetime $date, $month)
    {
        if(!is_int($month))
            throw new \Exception('Le deuxieme paramètre doit être un entier');
        if((int) $date->format('m') === $month)
            return true;
        else
            return false;
    }

}

