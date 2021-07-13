<?php

use Inc\FizzBuzz;

class FizzBuzzTest extends PHPUnit\Framework\TestCase 
{
	private $fizzBuzz;

	protected function setUp(): void
	{
		parent::setUp();
		$this->fizzBuzz = new FizzBuzz();
	}

	public function testFirstNumberIsOne()	
	{
		$result = $this->fizzBuzz->getData()[1];
		$this->assertEquals(1, $result);
	}

	public function testThirdNumberIsFizz()
	{
		$result = $this->fizzBuzz->getData()[3];
		$this->assertEquals('Fizz', $result);
	}

	public function testFithNumberIsBuzz()
	{
		$result = $this->fizzBuzz->getData()[5];
		$this->assertEquals('Buzz', $result);
	}

	public function testFifteenNumberIsFizzBuzz()
	{
		$result = $this->fizzBuzz->getData()[15];
		$this->assertEquals('FizzBuzz', $result);
	}

	public function testEveryMultipleOfThreeIsFizz()
	{
		$numbers = $this->fizzBuzz->getData();

		for ($i = 1; $i <= count($numbers); $i++) {
			if ($i % 3 == 0 && $i % 5 !== 0) {
				$this->assertEquals('Fizz', $numbers[$i]);
			}
		}
	}

	public function testEveryMultipleOfFiveIsBuzz()
	{
		$numbers = $this->fizzBuzz->getData();

		for ($i = 1; $i <= count($numbers); $i++) {
			if ($i % 5 == 0 && $i % 3 !== 0) {
				$this->assertEquals('Buzz', $numbers[$i]);
			}
		}

	}

	public function testGetDataMustReturnOneHunderNumbers()
	{
		$this->assertEquals(100, count($this->fizzBuzz->getData()));
	}
}
