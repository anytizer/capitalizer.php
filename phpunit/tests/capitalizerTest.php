<?php
namespace tests;

use common\capitalizer;
use PHPUnit\Framework\TestCase;

class capitalizerTest extends TestCase
{
	public function test01()
	{
		$capitalizer = new capitalizer();
		$this->assertEquals("IP Address", $capitalizer->capitalize("ip_address"));
	}

	public function test02()
	{
		$capitalizer = new capitalizer();
		$this->assertEquals("Amount VAT", $capitalizer->capitalize("amount_vat"));
	}
}