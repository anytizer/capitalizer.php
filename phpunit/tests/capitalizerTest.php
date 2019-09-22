<?php
namespace tests;

use anytizer\capitalizer;
use PHPUnit\Framework\TestCase;

class capitalizerTest extends TestCase
{
	//private $capitalizer;
	public function setup(): void
	{
		//$this->capitalizer = new capitalizer();
	}

	public function testGeneralExpectations()
	{
		$capitalizer = new capitalizer();

		$this->assertEquals("API Key", $capitalizer->capitalize("api key"));
		$this->assertEquals("SQL String", $capitalizer->capitalize("sql string"));
		$this->assertEquals("Buy QTY", $capitalizer->capitalize("buy qTy"));
		$this->assertEquals("SN Student", $capitalizer->capitalize("SN student"));
		$this->assertEquals("VAT AMT", $capitalizer->capitalize("vat amt"));
		$this->assertEquals("VAT Percentage", $capitalizer->capitalize("vat_percentage"));
		$this->assertEquals("IP Address", $capitalizer->capitalize("ip_address"));
		$this->assertEquals("Amount VAT", $capitalizer->capitalize("amount_vat"));
		$this->assertEquals("SN ID", $capitalizer->capitalize("sn_id"));
		$this->assertEquals("RGB Value", $capitalizer->capitalize("rgb_value"));
		$this->assertEquals("Color RGB", $capitalizer->capitalize("color_rgb"));
		$this->assertEquals("Group ID", $capitalizer->capitalize("group_id"));
		$this->assertEquals("Blood Group ID", $capitalizer->capitalize("bloodgroup_id"));
	}
	
	public function testUnderscores()
	{
		$capitalizer = new capitalizer();

		$this->assertEquals("User ID", $capitalizer->capitalize("user_id"));
		$this->assertEquals("AMT ID Number", $capitalizer->capitalize("amt_id_number"));
	}
	
	public function testUnderscoresInBeginning()
	{
		$capitalizer = new capitalizer();

		$this->assertEquals("IP", $capitalizer->capitalize("_ip"));
	}
	
	public function testUnderscoresInEnding()
	{
		$capitalizer = new capitalizer();

		$this->assertEquals("Key", $capitalizer->capitalize("key_"));
		$this->assertEquals("ID", $capitalizer->capitalize("id_"));
	}
	
	public function testMixed()
	{
		$capitalizer = new capitalizer();

		$this->assertEquals("ID !no.", $capitalizer->capitalize("id !no."));
	}

	public function testNegatives()
	{
		$capitalizer = new capitalizer();

		/**
		 * Negative tests
		 */
		$this->assertNotEquals("vat", $capitalizer->capitalize("vat"));
	}

	public function testSpecialConditions()
	{
		$capitalizer = new capitalizer();

		$this->assertEquals("ID ID", $capitalizer->capitalize("id_id"));
		$this->assertEquals("ID ID", $capitalizer->capitalize("id id"));
		$this->assertEquals("ID: ID", $capitalizer->capitalize("id: ID"));
		$this->assertEquals("ID#", $capitalizer->capitalize("id#"));
		$this->assertEquals("ID# No.", $capitalizer->capitalize("id# no."));
	}
}
