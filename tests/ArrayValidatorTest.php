<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 25/11/2014
 * Time: 17:47
 */

namespace Tests\Steingate\Validator;

use \src\Validator\ArrayValidator;

/**
 * Class ArrayValidatorTest
 * @package Tests\Steingate\Validator
 */
class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test if the array is empty
     *
     * @throws \Exception
     */
    public function testArrayIsEmpty()
    {
        $array = array();

        $bool = ArrayValidator::isEmpty($array);

        $this->assertTrue($bool);
    }

    /**
     * Test if the array is not empty
     *
     * @throws \Exception
     */
    public function testArrayIsNotEmpty()
    {
        $array = array('key' => 'chat');

        $bool = ArrayValidator::isEmpty($array);

        $this->assertFalse($bool);
    }

    /**
     * Test if the comparate method throw exception if invalid parameter
     *
     *@expectedException \Exception
     */
    public function testException()
    {
        $array = array('Dogs' => 3);
        ArrayValidator::comparate($array, 'sd', 1);
    }

    /**
     * Test if the array is equal to a value
     *
     * @throws \Exception
     */
    public function testArrayIsEqualTo()
    {
        $array = array('Dogs' => 3);

        $bool = ArrayValidator::comparate($array, ArrayValidator::LENGTH_EQUAL, 1);

        $this->assertTrue($bool);
    }

    /**
     * Test if the array is not equal to a value
     *
     * @throws \Exception
     */
    public function testArrayIsNotEqualTo()
    {
        $array = array('Dogs' => 3);

        $bool = ArrayValidator::comparate($array, ArrayValidator::LENGTH_EQUAL, 3);

        $this->assertFalse($bool);
    }

    /**
     * Test if the is inferior to a value
     *
     * @throws \Exception
     */
    public function testArrayIsInferior()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);

        $bool = ArrayValidator::comparate($array, ArrayValidator::LENGTH_INFERIOR, 10);

        $this->assertTrue($bool);
    }

    /**
     * Test if the is superior to a value
     *
     * @throws \Exception
     */
    public function testArrayIsSuperior()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);

        $bool = ArrayValidator::comparate($array, ArrayValidator::LENGTH_SUPERIOR, 1);

        $this->assertTrue($bool);
    }

    /**
     * Test if the array's item is inferior or equal to a value
     *
     * @throws \Exception
     */
    public function testArrayIsInferiorOrEqual()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);

        $bool = ArrayValidator::comparate($array, ArrayValidator::LENGTH_INFERIOR_OR_EQUAL, 2);

        $this->assertTrue($bool);
    }

    /**
     * Test if the array's item is superior or equal to a value
     *
     * @throws \Exception
     */
    public function testArrayIsSuperiorOrEqual()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);

        $bool = ArrayValidator::comparate($array, ArrayValidator::LENGTH_SUPERIOR_OR_EQUAL, 2);

        $this->assertTrue($bool);
    }

    /**
     * Test if the array length is between two integer
     *
     * @throws \Exception
     */
    public function testIsBetween()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);

        $bool = ArrayValidator::ElementsBetween($array, 1, 2);

        $this->assertTrue($bool);
    }

    /**
     * Test if the array length is not between two integer
     *
     * @throws \Exception
     */
    public function testIsNotBetween()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);

        $bool = ArrayValidator::ElementsBetween($array, 3, 5);

        $this->assertFalse($bool);
    }

    /**
     * Test if the value exists in a array
     *
     * @throws \Exception
     */
    public function testValueInArray()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);

        $bool = ArrayValidator::isThereValue($array, '3');

        $this->assertTrue($bool);
    }

    /**
     * Test if the value exists in a array
     *
     * @throws \Exception
     */
    public function testNotValueInArray()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);

        $bool = ArrayValidator::isThereValue($array, '4');

        $this->assertFalse($bool);
    }

    /**
     * Test if the key exists in a array
     *
     * @throws \Exception
     */
    public function testKeyInArray()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);

        $bool = ArrayValidator::isThereKey($array, 'Dogs');

        $this->assertTrue($bool);
    }

    /**
     * Test if the key exists in a array
     *
     * @throws \Exception
     */
    public function testNotKeyInArray()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);

        $bool = ArrayValidator::isThereKey($array, 'Ca');

        $this->assertFalse($bool);
    }
}