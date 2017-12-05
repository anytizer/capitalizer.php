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

	public function test03()
	{
		$capitalizer = new capitalizer();
		$this->assertEquals("SN ID", $capitalizer->capitalize("sn_id"));
	}

	public function test04()
	{
		$capitalizer = new capitalizer();
		$this->assertEquals("RGB Value", $capitalizer->capitalize("rgb_value"));
	}

	public function test05()
	{
		$capitalizer = new capitalizer();
		$this->assertEquals("Color RGB", $capitalizer->capitalize("color_rgb"));
	}
}