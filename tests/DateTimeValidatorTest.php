<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 25/11/2014
 * Time: 17:48
 */

namespace Tests\mojo\Validator;

use \mojo\Validator\DateTimeValidator;

/**
 * Class DateTimeValidatorTest
 * @package Tests\src\Validator
 */
class DateTimeValidatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test if the date is major
     *
     * @throws \Exception
     */
    public function testIsMajor()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');

        $birthdate = new \DateTime('12/14/1993 00:00:00');

        $bool = DateTimeValidator::isMajor($birthdate);

        $this->assertTrue($bool);
    }

    /**
     * Test if the date is not major
     *
     * @throws \Exception
     */
    public function testIsNotMajor()
    {
        //if not set, get an error
        date_default_timezone_set('Europe/Paris');

        $birthdate = new \DateTime('12/14/2000 00:00:00');

        $bool = DateTimeValidator::isMajor($birthdate);

        $this->assertFalse($bool);
    }

    /**
     * Test if the date is passed
     *
     * @throws \Exception
     */
    public function testIsPassed()
    {
        //if not set, get an error
        date_default_timezone_set('Europe/Paris');

        $date = new \DateTime('12/14/2010 00:00:00');

        $bool = DateTimeValidator::isPassed($date);

        $this->assertTrue($bool);
    }

    /**
     * Test if the date is not passed
     *
     * @throws \Exception
     */
    public function testIsNotPassed()
    {
        date_default_timezone_set('Europe/Paris');

        $date = new \DateTime('12/14/2020 00:00:00');

        $bool = DateTimeValidator::isPassed($date);

        $this->assertFalse($bool);
    }

    /**
     * Test if the date is future
     *
     * @throws \Exception
     */
    public function testIsFuture()
    {
        date_default_timezone_set('Europe/Paris');

        $date = new \DateTime('12/14/2020 00:00:00');

        $bool = DateTimeValidator::isFutur($date);

        $this->assertTrue($bool);
    }

    /**
     * Test if the date is not future
     *
     * @throws \Exception
     */
    public function testIsNotFuture()
    {
        date_default_timezone_set('Europe/Paris');

        $date = new \DateTime('12/14/2010 00:00:00');

        $bool = DateTimeValidator::isFutur($date);

        $this->assertFalse($bool);
    }

    /**
     * Test if the date's year is equal
     *
     * @throws \Exception
     */
    public function testIsYear()
    {
        date_default_timezone_set('Europe/Paris');

        $date = new \DateTime('12/14/2010 00:00:00');

        $bool = DateTimeValidator::isYear($date, 2010);

        $this->assertTrue($bool);
    }

    /**
     * Test if the date year is not equal
     *
     * @throws \Exception
     */
    public function testIsNotYear()
    {
        date_default_timezone_set('Europe/Paris');

        $date = new \DateTime('12/14/2010 00:00:00');

        $bool = DateTimeValidator::isYear($date, 2012);

        $this->assertFalse($bool);
    }

    /**
     * Test if the date month is equal
     *
     * @throws \Exception
     */
    public function testIsMonth()
    {
        date_default_timezone_set('Europe/Paris');

        $date = new \DateTime('12/14/2010 00:00:00');

        $bool = DateTimeValidator::isMonth($date, 12);

        $this->assertTrue($bool);
    }

    /**
     * Test if the date month is not equal
     *
     * @throws \Exception
     */
    public function testIsNotMonth()
    {
        date_default_timezone_set('Europe/Paris');

        $date = new \DateTime('12/14/2010 00:00:00');

        $bool = DateTimeValidator::isMonth($date, 11);

        $this->assertFalse($bool);
    }
}